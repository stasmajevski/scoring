<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    const TERMS_ACCEPTED_SCORE = 4;
    const TERMS_NOT_ACCEPTED_SCORE = 0;

    /**
     * The attributes that should be appended to response.
     *
     * @var array
     */
    protected $appends = [
        'phoneScoring',
        'emailScoring',
        'educationScoring',
        'termsScoring',
    ];

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'phone', 'email', 'terms', 'education_id'
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
     * Build attribute for getting email scoring.
     *
     * @return mixed|string
     */
    public function getEducationNameAttribute()
    {
        return $this->education()->first()->name;
    }

    /**
     * Build attribute for getting email scoring.
     *
     * @return mixed|string
     */
    public function getEmailScoringAttribute()
    {
        return resolve('ScoringService')->emailScoring($this->email);
    }


    /**
     * Build attribute for getting email scoring.
     *
     * @return mixed|string
     */
    public function getEducationScoringAttribute()
    {
        return resolve('ScoringService')->educationScoring($this->education_id);
    }

    /**
     * Build attribute for getting phone scoring.
     *
     * @return mixed|string
     */
    public function getPhoneScoringAttribute()
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
