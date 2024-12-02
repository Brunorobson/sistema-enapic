<?php

namespace App\Models\Scopes;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Scope;
use Illuminate\Support\Facades\Auth;

class SubmissionScope implements Scope
{
    /**
     * Apply the scope to a given Eloquent query builder.
     */
    public function apply(Builder $builder, Model $model): void
    {
        /** @var User $user */
        $user = Auth::user();
        if (!($user->isSupport() or $user->isAdmin() or $user->isCommission())) {
            //Role 4 avaliador, filtrar as submissões atribuidas a ele.
            if (!$user->hasRole(4)) {
                $builder->where('user_id', $user->id);
            }
        }
    }
}