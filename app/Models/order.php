<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class order extends Model
{
    Protected $table = 'order';

    Protected $fillable = [
        'product_id',
        'product_name',
        'name',
        'email',
        'number',
        'detail',
        'delivery',
        'address'
    ];
}
