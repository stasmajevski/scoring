<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class PhoneOperator extends Model
{
    const DEFAULT_SCORING = 1;

    /**
     * The relationships between PhoneOperator and PhoneOperatorCode models.
     *
     * @return HasMany
     */
    public function phoneOperatorCodes()
    {
        return $this->hasMany(PhoneOperatorCode::class);
    }
}
