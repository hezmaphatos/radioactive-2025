<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MerchOrder extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'email',
        'phone',
        'line',
        'payment_image',
        'cumulative_price',
        'status'
    ];

    public function orderDetails(): HasMany{
        return $this->hasMany(MerchOrderDetail::class, 'order_id', 'id');
    }

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
