<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Merch extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'description',
        'image',
        'price',
        'stock',
    ];

    public function list_merch() {
        $data = Merch::all();
        return $data;
    }

    public function detail_merch($id) {
        $data = Merch::find($id);
        return $data;
    }
    
    public function merchvariations(): HasMany{
        return $this->hasMany(MerchVariation::class);
    }

    public function images(): HasMany{
        return $this->hasMany(MerchImage::class);
    }

    public function merchlinks(): HasMany{
        return $this->hasMany(MerchLink::class);
    }
}
