<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Cart extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'merch_id',
        'quantity',
        'variation',
        'total_price'
    ];

    public function user(): BelongsTo {
        return $this->belongsTo(User::class);
    }

    public function merch(): HasOne {
        return $this->hasOne(Merch::class, 'id', 'merch_id');
    }
}
