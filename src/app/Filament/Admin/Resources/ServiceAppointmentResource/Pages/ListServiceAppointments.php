<?php

namespace App\Filament\Admin\Resources\ServiceAppointmentResource\Pages;

use App\Filament\Admin\Resources\ServiceAppointmentResource;
use Filament\Resources\Pages\ListRecords;

class ListServiceAppointments extends ListRecords
{
    protected static string $resource = ServiceAppointmentResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}