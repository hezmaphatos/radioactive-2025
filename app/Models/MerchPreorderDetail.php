<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MerchPreorderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'merch_id',
        'quantity',
        'variation',
        'total_price'
    ];

    public function merchOrder(): BelongsTo
    {
        return $this->belongsTo(MerchPreorder::class, 'id', 'order_id');
    }

    public function merch(): HasOne
    {
        return $this->hasOne(Merch::class, 'id', 'merch_id');
    }
}
