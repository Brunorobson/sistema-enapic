<?php

namespace App\Models;

//use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
//use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Str;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;


class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;

    public const SUPPORT = 1;
    public const ADMIN = 2;

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable = [
        'name',
        'cpf',
        'email',
        'password',
        'active',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
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
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        'profile_photo_url',
    ];

    public function inscriptions()
    {
        return $this->hasMany(Inscription::class);
    }

    public function makeInscription(int $user_id, int $event_id)
    {
        Inscription::create([
            'uuid' => Str::uuid(),
            'user_id' => $user_id,
            'event_id' => $event_id
        ]);
    }

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    public function permissions()
    {
        $permissions = [];
        foreach($this->roles as $role){
            foreach($role->permissions as $permission){
                $permissions[] = $permission->guard_name;
            }
        }
        return $permissions;
    }

    public function isSupport(): bool
    {
        return $this->roles()->get()->contains(User::SUPPORT);
    }

    public function isAdmin(): bool
    {
        return $this->roles()->get()->contains(User::ADMIN);
    }


    public function hasPermissionTo(string $permission): bool
    {
        //dd($permission);
        return in_array($permission, $this->permissions());
    }

    public function setRole(int $role_id): void
    {
        /** @var Role $role */

        if (!$this->roles()->get()->contains($role_id)) {
            $this->roles()->sync([$role_id]);
        }
    }

    public function submissions(): BelongsToMany
    {
        return $this->belongsToMany(Submission::class, 'avaliations', 'user_id', 'submission_id');
    }

    // public function submissions()
    // {
    //     return $this->belongsToMany(Submission::class, 'user_submissions')->withTimestamps();
    //     //retorna uma relação muitos-para-muitos entre o modelo User e o modelo Submission com a tabela intermediária
    //     //chamada user_submissions e o método withTimestamps() define que a tabela intermediária deve ter os campos created_at e updated_at
    // }

    public function associarSubmissao(Submission $submissao)
    {
        $this->submissoes()->attach($submissao->id);
        //usado para associar uma submissão específica ao usuário atual. Ele recebe como parâmetro uma instância do
        //modelo Submission e usa o método attach() para associar o ID da submissão com o ID do usuário na tabela intermediária.
    }



}
