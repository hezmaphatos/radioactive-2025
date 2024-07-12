<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Merch extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function list_merch() {
        $data = Merch::all();
        return $data;
    }

    public function detail_merch($id) {
        $data = Merch::find($id);
        return $data;
    }
}
