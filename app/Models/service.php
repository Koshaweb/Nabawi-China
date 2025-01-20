<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class service extends Model
{
    Protected $table = 'service';

    Protected $fillable = [
        'name_en',
        'name_fa',

        'detail_en',
        'detail_fa',


    ];
}
