<?php
namespace App\Policies;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;
class UserPolicy
{
    public function follow(User $currentUser, User $user)
    {
        return $currentUser->id !== $user->id;
    }
}
