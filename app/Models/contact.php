<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contact extends Model
{
    Protected $table = 'contact';

    Protected $fillable = [
        'name',
        'email',
        'number',
        'message'
    ];
}
