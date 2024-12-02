<?php

namespace App\Models\ACL;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Module extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'route_name'
    ];

    /**
     * Get the permissions for the module.
     */
    public function permissions()
    {
        return $this->hasMany(Permission::class);
    }
}
