<?php

namespace App\Filament\Admin\Resources\SellCarRequestResource\Pages;

use App\Filament\Admin\Resources\SellCarRequestResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListSellCarRequests extends ListRecords
{
    protected static string $resource = SellCarRequestResource::class;

    protected function getHeaderActions(): array
    {
        return [];
    }
}
