<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Car extends Model
{
    protected $fillable = [
        'car_brand_id',
        'name',
        'slug',
        'type',
        'year',
        'price',
        'mileage',
        'transmission',
        'fuel_type',
        'color',
        'thumbnail',
        'description',
        'is_featured',
        'status',
    ];

    protected $casts = [
        'price' => 'decimal:2',
        'is_featured' => 'boolean',
    ];

    public function brand(): BelongsTo
    {
        return $this->belongsTo(CarBrand::class, 'car_brand_id');
    }
}