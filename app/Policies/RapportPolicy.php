<?php

namespace App\Policies;

use App\Models\Rapport;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class RapportPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if($user->hasPermissionTo('Voir Rapport')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Rapport $rapport): bool
    {
        if($user->hasPermissionTo('Voir Rapport')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if($user->hasPermissionTo('Créer Rapport')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Rapport $rapport): bool
    {
        if($user->hasPermissionTo('Modifier Rapport')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Rapport $rapport): bool
    {
        if($user->hasPermissionTo('Supprimer Rapport')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Rapport $rapport): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Rapport $rapport): bool
    {
        //
    }
}
