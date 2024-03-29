<?php

namespace App\Policies;

use App\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class UserPolicy
{
    use HandlesAuthorization;

    public function __construct()
    {
        //
    }

    public function before(User $user, $ability)
    {
        if ($user->isAdmin()) {
            return true;
        }
    }

    public function edit(User $authUser, User $user)
    {
        return $authUser->id === $user->id;
    }

    public function update(User $authUser, User $user)
    {
        return $authUser->id === $user->id;
    }

    public function destroy(User $authUser, User $user)
    {
        return $authUser->id === $user->id;
    }


}
