<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SpecialRequest extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'brand',
        'model',
        'year',
        'budget',
        'description',
        'status',
    ];
}