<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;
use App\Models\CarBrand;

class UsedCarsPage extends Component
{
    public $brand = '';

    public function render()
    {
        $cars = Car::query()
            ->where('type', 'used')
            ->when($this->brand, function ($query) {
                $query->where('car_brand_id', $this->brand);
            })
            ->latest()
            ->get();

        return view('livewire.used-cars-page', [
            'cars' => $cars,
            'brands' => CarBrand::all(),
        ])->layout('components.layouts.app');
    }
}