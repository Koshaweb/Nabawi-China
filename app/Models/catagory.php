<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class catagory extends Model
{
    Protected $table = 'catagory';

    Protected $fillable = [
        'name_en',
        'name_fa',
        'img'
    ];

    public function products(){
        return $this->hasMany(product::class, 'catagory_id');
    }
}
