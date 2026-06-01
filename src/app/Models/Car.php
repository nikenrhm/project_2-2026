<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Car extends Model
{
    protected $guarded = ['id'];

    protected static function booted(): void
    {
        static::creating(function ($car) {
            $car->slug = Str::slug($car->name . '-' . uniqid());
        });
    }

    public function brand()
    {
        return $this->belongsTo(CarBrand::class, 'car_brand_id');
    }
}