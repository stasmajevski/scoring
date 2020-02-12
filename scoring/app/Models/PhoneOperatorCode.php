<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PhoneOperatorCode extends Model
{
    /**
     * The relationships between PhoneOperatorCode and PhoneOperator models.
     *
     * @return BelongsTo
     */
    public function phoneOperator()
    {
        return $this->belongsTo(PhoneOperator::class);
    }
}
