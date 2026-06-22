<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellCarRequest extends Model
{
    protected $fillable = [
        'full_name',
        'email',
        'phone',
        'brand',
        'model',
        'year',
        'mileage',
        'expected_price',
        'photos',
        'description',
        'status',
    ];

    protected $casts = [
        'photos' => 'array',
    ];
}