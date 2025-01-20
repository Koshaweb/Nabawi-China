<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bgimg extends Model
{
    Protected $table = 'bgimg';

    Protected $fillable = [
        'homebg',
        'aboutbg',
        'offerbg',
        'contactbg'
    ];
}
