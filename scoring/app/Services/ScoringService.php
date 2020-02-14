<?php

namespace App\Services;

use App\Models\EducationLevel;
use App\Models\EmailDomain;
use App\Models\PhoneOperator;
use App\Models\PhoneOperatorCode;
use App\Models\User;
use Illuminate\Support\Str;

class ScoringService
{
    public function calculate($user)
    {
        return $this->emailScoring($user->email)
            + $this->educationScoring($user->education_id)
            + $this->phoneScoring($user->phone)
            + $this->termsScoring($user->terms);
    }

    public function emailScoring($email)
    {
        $emailDomain = Str::after($email, '@');
        $emailScoring = EmailDomain::firstWhere('name', $emailDomain);

        return $emailScoring ? $emailScoring->scoring : EmailDomain::DEFAULT_SCORE;
    }

    public function educationScoring($education)
    {
        return EducationLevel::firstWhere('id', $education)->scoring;
    }

    public function phoneScoring($phoneNumber)
    {
        $userPhoneOperator = substr($phoneNumber, 1, 3);
        $phoneOperatorCode = PhoneOperatorCode::firstWhere('code', $userPhoneOperator);

        return $phoneOperatorCode ? $phoneOperatorCode->phoneOperator->scoring : PhoneOperator::DEFAULT_SCORING;
    }

    public function termsScoring($terms)
    {
        return $terms ? User::TERMS_ACCEPTED_SCORE : User::DEFAULT_SCORE;
    }
}