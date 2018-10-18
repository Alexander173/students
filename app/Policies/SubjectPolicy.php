<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class SubjectPolicy
{
    use HandlesAuthorization;

    /**
     * Create a new policy instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function edit(User $user)
    {
        if ($user->role->name == 'admin') {
            return true;
        }
        return false;
    }

    public function create(User $user)
    {
        if ($user->role->name == 'admin') {
            return true;
        }
        return false;
    }

    public function destroy(User $user)
    {
        if ($user->role->name == 'admin') {
            return true;
        }
        return false;
    }
}
