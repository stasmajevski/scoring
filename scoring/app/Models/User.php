<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    const TERMS_ACCEPTED_SCORE = 4;
    const DEFAULT_SCORE = 0;

    protected $with = [
        'education'
    ];

    /**
     * The attributes that should be appended to response.
     *
     * @var array
     */
    protected $appends = [
        'educationName',
        'emailScoring',
        'phoneScoring',
        'termsScoring'
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'email', 'terms'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'terms' => 'boolean',
    ];

    /**
     * Build attribute for getting education name.
     *
     * @return mixed|string
     */

    protected function getEducationNameAttribute()
    {
        return $this->getEducationName();
    }

    protected function getEducationName()
    {
        return ucfirst($this->education->name);
    }

    /**
     * Build attribute for getting email scoring.
     *
     * @return mixed|string
     */
    public function getEmailScoringAttribute()
    {
        return $this->getEmailScoring();
    }

    public function getEmailScoring()
    {
        return resolve('ScoringService')->emailScoring($this->email);
    }

    /**
     * Build attribute for getting phone scoring.
     *
     * @return mixed|string
     */
    public function getPhoneScoringAttribute()
    {
        return $this->getPhoneScoring();
    }

    public function getPhoneScoring()
    {
        return resolve('ScoringService')->phoneScoring($this->phone);
    }

    /**
     * Build attribute for getting terms scoring.
     *
     * @return mixed|string
     */
    public function getTermsScoringAttribute()
    {
        return $this->getTermsScoring();
    }

    public function getTermsScoring()
    {
        return resolve('ScoringService')->termsScoring($this->terms);
    }

    /**
     * The relationships between User and Education models.
     *
     * @return HasOne
     */
    public function education()
    {
        return $this->hasOne(EducationLevel::class, 'id', 'education_id');
    }

}
