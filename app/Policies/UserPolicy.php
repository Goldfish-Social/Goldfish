<?php
 
namespace App\Policies;
 
use App\Models\User;
 
class UserPolicy
{
    /**
     * Determine if the given post can be updated by the user.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Post  $post
     * @return bool
     */
    public function update(User $user)
    {
        return $user->id === $user->user_id;
    }

    public function destroy(User $user)
    {
        return $user->id === $user->user_id;
    }
}