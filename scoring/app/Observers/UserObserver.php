<?php

namespace App\Observers;

use App\Models\EducationLevel;
use App\Models\EmailDomain;
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
        $user->scoring = $this->calculateScoring($user);
    }

    private function calculateScoring($user)
    {
        return $this->calculateEmailScoring($user->email) + $this->calculateEducationScoring($user->education_id);
    }

    private function calculateEmailScoring($email)
    {
        $emailDomain = EmailDomain::whereName(substr($email, strpos($email, '@') + 1))->first();
        return $emailDomain ? $emailDomain->scoring : EmailDomain::whereName('other')->first()->scoring;
    }

    private function calculateEducationScoring($education)
    {
        return EducationLevel::whereId($education)->first()->scoring;
    }
}
