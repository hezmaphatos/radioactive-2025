<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class MerchOrderDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'order_id',
        'merch_id',
        'quantity',
        'variation',
        'total_price'
    ];

    public function merchOrder(): BelongsTo{
        return $this->belongsTo(MerchOrder::class);
    }

    public function merch(): HasOne{
        return $this->hasOne(Merch::class);
    }
}
