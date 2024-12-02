<?php

namespace App\Policies;

use App\Models\Avaliation;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AvaliationPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('read_avaliantions');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Avaliation $avaliation): bool
    {
        return $user->hasPermissionTo('read_avaliantions');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('write_avaliantions');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Avaliation $avaliation): bool
    {
        return $user->hasPermissionTo('write_avaliantions');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Avaliation $avaliation): bool
    {
        //return $user->hasPermissionTo('write_avaliantions');
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Avaliation $avaliation): bool
    {
        return $user->hasPermissionTo('write_avaliantions');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Avaliation $avaliation): bool
    {
        //return $user->hasPermissionTo('write_avaliantions');
        return false;
    }
}
