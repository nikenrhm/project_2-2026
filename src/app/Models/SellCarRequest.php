<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SellCarRequest extends Model
{
    protected $guarded = ['id'];

    protected $casts = [
        'photos' => 'array',
    ];
}