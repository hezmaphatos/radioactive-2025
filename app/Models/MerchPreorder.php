<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MerchPreorder extends Model
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

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function preorderDetails(): HasMany
    {
        return $this->hasMany(MerchPreorderDetail::class, 'order_id', 'id');
    }
}
