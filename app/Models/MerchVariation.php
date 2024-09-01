<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MerchVariation extends Model
{
    use HasFactory;

    protected $fillable = [
        'merch_id',
        'description',
        'stock',
        'additional_price'
    ];

    public function merch(): BelongsTo{
        return $this->belongsTo(Merch::class);
    }
}
