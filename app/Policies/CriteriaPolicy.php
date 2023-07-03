<?php

namespace App\Policies;

use App\Models\Critera;
use App\Models\Criteria;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class CriteriaPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('read_criterias');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Criteria $critera): bool
    {
        return $user->hasPermissionTo('read_criterias');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('write_criterias');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Criteria $critera): bool
    {
        return $user->hasPermissionTo('write_criterias');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Criteria $critera): bool
    {
        return $user->hasPermissionTo('write_criterias');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Criteria $critera): bool
    {
        return $user->hasPermissionTo('write_criterias');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Criteria $critera): bool
    {
        return $user->hasPermissionTo('write_criterias');
    }
}
