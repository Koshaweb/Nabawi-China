<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class offer extends Model
{
    Protected $table = 'offer';

    Protected $fillable = [
        'title_en',
        'title_fa',

        'content_en',
        'content_fa',

        'img'

    ];
}
