<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    Protected $table = 'product';

    Protected $fillable = [
        'name_en',
        'name_fa',

        'catagory_id',

        'detail_en',
        'detail_fa',

        'price',
        'img',
        'productType'
    ];

    public function catagory()
    {
        return $this->belongsTo(catagory::class);
    }
}
