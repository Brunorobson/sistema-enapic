<?php

namespace App\Policies;

use App\Models\Critera;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CriteriaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('read_criteria');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Critera $critera): bool
    {
        return $user->hasPermissionTo('read_criteria');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('write_criteria');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Critera $critera): bool
    {
        return $user->hasPermissionTo('write_criteria');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Critera $critera): bool
    {
        return $user->hasPermissionTo('write_criteria');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Critera $critera): bool
    {
        return $user->hasPermissionTo('write_criteria');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Critera $critera): bool
    {
        return $user->hasPermissionTo('write_criteria');
    }
}
