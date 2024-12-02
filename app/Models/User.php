<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use App\Models\ACL\{Module, Role};
use App\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\{Cache, DB};
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable // implements MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    use HasUuidTrait;

    public const SUPPORT = 1;
    public const ADMIN   = 2;

    public const COMMISSION = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'uuid',
        'name',
        'cpf',
        'email',
        'type',
        'institution',
        'password',
        'active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public static function loadFromEmail(string $email): User
    {
        return User::where('email', $email)->first();
    }

    public function isSupport(): bool
    {
        return $this->roles()->get()->contains(User::SUPPORT);
    }

    public function isAdmin(): bool
    {
        return $this->roles()->get()->contains(User::ADMIN);
    }

    public function isCommission(): bool
    {
        return $this->roles()->get()->contains(User::COMMISSION);
    }

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function makeInscription(int $user_id, int $event_id)
    {
        Inscription::create([
            'uuid'     => Str::uuid(),
            'user_id'  => $user_id,
            'event_id' => $event_id,
        ]);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        $permissions = [];

        foreach($this->roles as $role) {
            foreach($role->permissions as $permission) {
                $permissions[] = $permission->guard_name;
            }
        }

        return $permissions;
    }

    public function hasRole(int $role_id): bool
    {
        foreach ($this->roles as $role) {
            if ($role->id == $role_id) {
                return true;
            }
        }

        return false;
    }

    public function submissions(): BelongsToMany
    {
        return $this->belongsToMany(Submission::class, 'avaliations', 'user_id', 'submission_id');
    }

    public function associarSubmissao(Submission $submissao)
    {
        $this->submissoes()->attach($submissao->id);
    }

    public function hasPermissionTo(string $permission): bool
    {
        $permissionsOfUser = Cache::rememberForever('permissions::of::user::' . $this->id, function () {
            return $this->permissions();
        });

        return in_array($permission, $permissionsOfUser);
    }

    public function setRole(int $role_id): void
    {
        if (!$this->roles()->get()->contains($role_id)) {
            $this->roles()->attach($role_id);
        }
    }

    public function removeRole(int $role_id): void
    {
        if ($this->roles()->get()->contains($role_id)) {
            $this->roles()->detach($role_id);
        }
    }

    public function modules(): array
    {
        if ($this->isSupport()) {
            return Module::all()->pluck('route_name', 'id')->toArray();
        }

        // $modules = array(0 => 'dashboard');
        $modules = [];

        foreach ($this->roles as $role) {
            foreach ($role->permissions as $permission) {
                $isRead = explode('_', $permission->guard_name)[0] == 'read';

                if ($isRead) {
                    $modules[$permission->module_id] = $permission->module->route_name;
                }
            }
        }

        return $modules;
    }

    public function hasModuleTo(string $module): bool
    {
        $modulesOfUser = Cache::rememberForever('modules::of::user::' . $this->id, function () {
            return $this->modules();
        });

        return in_array($module, $modulesOfUser);
    }

    public function getAllModulesFromCache(): array
    {
        $modules = Cache::rememberForever('modules::of::user::' . $this->id, function () {
            return $this->modules();
        });

        return $modules;
    }

    public static function forgetCache($user_id): void
    {
        Cache::forget("permissions");
        Cache::forget("permissions::of::user::" . $user_id);
        Cache::forget("modules::of::user::" . $user_id);
    }

    public function getActiveInString(): String
    {
        return $this->active ? 'Ativo' : 'Inativo';
    }

    public function search($filter = null)
    {
        $filter = strtolower($filter);

        $result = $this->where('id', '>', 1)
            ->where(function ($query) use ($filter) {
                $query->whereRaw('LOWER(name) like ?', ["%{$filter}%"]);
                $query->orWhereRaw('LOWER(email) like ?', ["%{$filter}%"]);
            })
            ->paginate(10);

        return $result;
    }

    public static function getType()
    {
        $array = [
            'UB' => 'UNIBALSAS',
            'PE' => 'PARTICIPANTE EXTERNO',
        ];

        return $array;
    }

    public static function getAllByRole(int $roleId)
    {
        return DB::table('users')
            ->select('users.*')
            ->join('role_user as r', 'r.user_id', '=', 'users.id')
            ->where('r.role_id', $roleId)
            ->where('users.active', true)
            ->get();
    }
}