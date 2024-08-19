<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class MerchLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'merch_id',
        'type',
        'title',
        'link'
    ];

    public function merch(): BelongsTo{
        return $this->belongsTo(Merch::class);
    }
}
