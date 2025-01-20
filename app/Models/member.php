<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class member extends Model
{
    Protected $table = 'member';

    Protected $fillable = [
        'email'
    ];
}
