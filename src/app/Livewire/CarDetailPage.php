<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Car;

class CarDetailPage extends Component
{
    public Car $car;

    public function mount($slug)
    {
        $this->car = Car::where('slug', $slug)->firstOrFail();
    }

    public function render()
    {
        return view('livewire.car-detail-page')
            ->layout('components.layouts.app');
    }
}