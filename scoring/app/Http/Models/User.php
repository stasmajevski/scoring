<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/*
 * @mixin Builder
 */
class User extends Model
{
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
     * The relationships between User and UserScoring models.
     *
     * @return HasOne
     */
    public function scoring()
    {
        return $this->hasOne(UserScoring::class);
    }
}
