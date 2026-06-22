<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ServiceAppointment extends Model
{
    protected $fillable = [
        'service_type_id',
        'full_name',
        'email',
        'phone',
        'brand',
        'appointment_date',
        'notes',
        'status',
    ];

    protected $casts = [
        'appointment_date' => 'date',
    ];

    public function serviceType(): BelongsTo
    {
        return $this->belongsTo(ServiceType::class);
    }
}