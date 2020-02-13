<?php

namespace App\Observers;

use App\Models\User;

class UserObserver
{
    /**
     * Handle the User "saved" event.
     *
     * @param User $user
     * @return void
     */
    public function saving(User $user)
    {
        $user->scoring = resolve('ScoringService')->calculate($user);
    }
}
