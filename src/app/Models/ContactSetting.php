<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactSetting extends Model
{
    protected $fillable = [
        'whatsapp_label',
        'whatsapp_number',
        'instagram_username',
        'instagram_url',
        'email',
        'address',
        'map_url',
        'is_active',
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];
}