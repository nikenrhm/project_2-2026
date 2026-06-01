<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\SpecialRequest;

class SpecialRequestPage extends Component
{
    public $full_name = '';
    public $email = '';
    public $phone = '';
    public $brand = '';
    public $model = '';
    public $year = '';
    public $budget = '';
    public $description = '';

    public function submit()
    {
        $this->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
        ]);

        SpecialRequest::create([
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,
            'brand' => $this->brand,
            'model' => $this->model,
            'year' => $this->year,
            'budget' => $this->budget,
            'description' => $this->description,
        ]);

        $this->reset();

        session()->flash(
            'success',
            'Request berhasil dikirim.'
        );
    }

    public function render()
    {
        return view('livewire.special-request-page')
            ->layout('components.layouts.app');
    }
}