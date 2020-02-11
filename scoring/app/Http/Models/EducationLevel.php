<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class EducationLevel extends Model
{
    /**
     * The relationships between CountryTier and Country models.
     *
     * @return HasMany
     */
    public function user()
    {
        return $this->hasMany(User::class);
    }
}
