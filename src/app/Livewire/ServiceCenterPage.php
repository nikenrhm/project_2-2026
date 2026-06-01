<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ServiceType;
use App\Models\ServiceAppointment;

class ServiceCenterPage extends Component
{
    public $full_name;
    public $email;
    public $phone;

    public $brand;
    public $appointment_date;

    public $service_type_id;

    public $notes;

    public function submit()
    {
        $this->validate([
            'full_name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'brand' => 'required',
            'appointment_date' => 'required',
            'service_type_id' => 'required',
        ]);

        ServiceAppointment::create([
            'full_name' => $this->full_name,
            'email' => $this->email,
            'phone' => $this->phone,

            'brand' => $this->brand,
            'appointment_date' => $this->appointment_date,

            'service_type_id' => $this->service_type_id,

            'notes' => $this->notes,
        ]);

        $this->reset();

        session()->flash(
            'success',
            'Appointment berhasil dibuat.'
        );
    }

    public function render()
    {
        return view('livewire.service-center-page', [
            'serviceTypes' => ServiceType::all(),
        ])->layout('components.layouts.app');
    }
}