<?php

namespace App\Models;

use App\Repositories\ScoringRepository;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class User extends Model
{
    const TERMS_ACCEPTED_SCORE = 4;
    const DEFAULT_SCORE = 0;
    private $scoringRepository;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->scoringRepository = new ScoringRepository();
    }

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
     * The relationships between User and Education models.
     *
     * @return HasOne
     */
    public function education()
    {
        return $this->hasOne(EducationLevel::class);
    }

    public function calculateScoring()
    {
        return $this->scoringRepository->calculate($this);
    }
}
