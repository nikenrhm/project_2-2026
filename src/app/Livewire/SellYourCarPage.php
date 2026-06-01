<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Models\SellCarRequest;

class SellYourCarPage extends Component
{
    use WithFileUploads;

    public $full_name;
    public $email;
    public $phone;

    public $brand;
    public $model;
    public $year;

    public $mileage;
    public $expected_price;

    public $description;

    public $photos = [];

    public function submit()
    {
        $this->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'brand' => 'required',
            'model' => 'required',
            'year' => 'required',
            'expected_price' => 'required',
        ]);

        $uploadedPhotos = [];

        foreach ($this->photos as $photo) {

            $uploadedPhotos[] = $photo->store(
                'sell-cars',
                'public'
            );
        }

        SellCarRequest::create([
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,

            'brand' => $this->brand,
            'model' => $this->model,
            'year' => $this->year,

            'mileage' => $this->mileage,
            'expected_price' => $this->expected_price,

            'description' => $this->description,

            'photos' => $uploadedPhotos,
        ]);

        $this->reset();

        session()->flash(
            'success',
            'Data berhasil dikirim.'
        );
    }

    public function render()
    {
        return view('livewire.sell-your-car-page')
            ->layout('components.layouts.app');
    }
}