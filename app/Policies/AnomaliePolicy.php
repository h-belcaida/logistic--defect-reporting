<?php

namespace App\Policies;

use App\Models\Anomalie;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class AnomaliePolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        if($user->hasPermissionTo('Voir Anomalie')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, Anomalie $anomalie): bool
    {
        if($user->hasPermissionTo('Voir Anomalie')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        if($user->hasPermissionTo('Créer Anomalie')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, Anomalie $anomalie): bool
    {
        if($user->hasPermissionTo('Modifier Anomalie')) {
            return true;
        }
        return false;
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, Anomalie $anomalie): bool
    {
        if($user->hasPermissionTo('Supprimer Anomalie')) {
            return true;
        }
        return false;
            
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, Anomalie $anomalie): bool
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, Anomalie $anomalie): bool
    {
        //
    }
}
