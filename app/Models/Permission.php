<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Cache;

class Permission extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'guard_name'
    ];

    /**
     * Get the module that owns the permission.
     */
    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    /**
    * The roles that belong to the permission.
    */
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }

    /**
     * Gets the permission by guard_name
     *
     * @param string $guard_name
     * @return Permission
     */
    public static function getPermission(string $guard_name): Permission
    {
        /** @var Permission $permission */
        $permission = self::getAllFromCache()->where('guard_name', $guard_name)->first();

        return $permission;
    }

    /**
     * Gets all permissions from cache or load from database
     *
     * @return Collection
     */
    public static function getAllFromCache(): Collection
    {
        /** @var Collection $permissions */
        $permissions = Cache::rememberForever('permissions', function () {
            return self::all();
        });

        return $permissions;
    }

    /**
     * Check if permission exists
     *
     * @param string $guard_name
     * @return boolean
     */
    public static function existsOnCache(string $guard_name): bool
    {
        return self::getAllFromCache()->where('guard_name', $guard_name)->isNotEmpty();
    }
}
