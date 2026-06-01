<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;
use App\Models\CarBrand;

class NewCarsPage extends Component
{
    public $brand = '';

    public function render()
    {
        $cars = Car::query()
            ->where('type', 'new')
            ->when($this->brand, function ($query) {
                $query->where('car_brand_id', $this->brand);
            })
            ->latest()
            ->get();

        return view('livewire.new-cars-page', [
            'cars' => $cars,
            'brands' => CarBrand::all(),
        ])->layout('components.layouts.app');
    }
}