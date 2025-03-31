<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'email',
        'tour',
        'people',
        'start_date',
        'phone',
        'requirements',
        'status'
    ];
}
