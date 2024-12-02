<?php

namespace App\Models\ACL;

use App\Models\User;
use App\Traits\HasUuidTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    use HasUuidTrait;

    protected $fillable = [
        'uuid',
        'name',
    ];

    /**
      * The users that belong to the role.
      */
    public function users()
    {
        return $this->belongsToMany(User::class);
    }

    /**
     * The permissions that belong to the role.
     */
    public function permissions()
    {
        return $this->belongsToMany(Permission::class);
    }

    /**
     * Sync permissions from the role
     *
     * @param array $ids_permissions
     * @return void
     */
    public function storePermissions(array $ids_permissions): void
    {
        $this->permissions()->sync($ids_permissions);
    }

    /**
     * Search functions by name and page in 10
     *
     * @param string $filter
     * @return Collection
     */
    public function search($filter = null)
    {
        $result = $this->where('name', 'LIKE', "%{$filter}%")->where('id', '<>', 1)->paginate(15);

        return $result;
    }
}
