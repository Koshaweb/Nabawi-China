<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class testimonial extends Model
{
    Protected $table = 'testimonial';

    Protected $fillable = [
        'name',
        'job',
        'image',
        'review',
        'status'
    ];
}
