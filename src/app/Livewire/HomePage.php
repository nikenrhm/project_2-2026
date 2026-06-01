<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Banner;
use App\Models\Car;
use App\Models\CarBrand;

class HomePage extends Component
{
    public function render()
    {
        return view('livewire.home-page', [
            'banners' => Banner::where('is_active', true)->get(),
            'featuredCars' => Car::latest()->take(8)->get(),
            'brands' => CarBrand::all(),
        ])->layout('components.layouts.app');
    }
}