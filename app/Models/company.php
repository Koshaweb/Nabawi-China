<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class company extends Model
{
    Protected $table = 'company';

    Protected $fillable = [
        'number',
        'email',
        'address_en',
        'address_fa',
        'map',
        'info_en',
        'info_fa',
        'img'
    ];
}
