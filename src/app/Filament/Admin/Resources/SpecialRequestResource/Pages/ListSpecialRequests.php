<?php

namespace App\Filament\Admin\Resources\SpecialRequestResource\Pages;

use App\Filament\Admin\Resources\SpecialRequestResource;
use Filament\Resources\Pages\ListRecords;

class ListSpecialRequests extends ListRecords
{
    protected static string $resource = SpecialRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}