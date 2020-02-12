<?php

namespace App\Repositories;

use App\Models\EducationLevel;
use App\Models\EmailDomain;
use App\Models\PhoneOperator;
use App\Models\PhoneOperatorCode;
use App\Models\User;
use Illuminate\Support\Str;

class ScoringRepository
{
    public function calculate($user)
    {
        return $this->calculateEmailScoring($user->email)
            + $this->calculateEducationScoring($user->education_id)
            + $this->calculatePhoneScoring($user->phone)
            + $this->calculateTermsScoring($user->terms);
    }

    protected function calculateEmailScoring($email)
    {
        $emailDomain = Str::after($email, '@');
        $emailScoring = EmailDomain::firstWhere('name', $emailDomain);

        return $emailScoring ? $emailScoring->scoring : EmailDomain::DEFAULT_SCORE;
    }

    protected function calculateEducationScoring($education)
    {
        return EducationLevel::firstWhere('id', $education)->scoring;
    }

    protected function calculatePhoneScoring($phoneNumber)
    {
        $userPhoneOperator = substr($phoneNumber, 1, 3);
        $phoneOperatorCode = PhoneOperatorCode::firstWhere('code', $userPhoneOperator);

        return $phoneOperatorCode ? $phoneOperatorCode->phoneOperator->scoring : PhoneOperator::DEFAULT_SCORING;
    }

    public function calculateTermsScoring($terms)
    {
        return $terms ? User::TERMS_ACCEPTED_SCORE : User::DEFAULT_SCORE;
    }
}
