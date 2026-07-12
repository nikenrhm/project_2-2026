<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\SellCarRequest;
use App\Models\ServiceAppointment;
use App\Models\ServiceType;
use App\Models\SpecialRequest;
use Illuminate\Http\Request;

class RequestApiController extends Controller
{
    public function serviceTypes()
    {
        return response()->json([
            'success' => true,
            'message' => 'Service type berhasil diambil.',
            'data' => ServiceType::latest()->get(),
        ]);
    }

    public function storeServiceAppointment(Request $request)
    {
        $validated = $request->validate([
            'service_type_id' => ['required', 'exists:service_types,id'],
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'brand' => ['nullable', 'string', 'max:255'],
            'appointment_date' => ['required', 'date'],
            'notes' => ['nullable', 'string'],
        ]);

        $appointment = ServiceAppointment::create([
            'service_type_id' => $validated['service_type_id'],
            'full_name' => $validated['full_name'],
            'email' => $validated['email'] ?? $request->user()->email,
            'phone' => $validated['phone'],
            'brand' => $validated['brand'] ?? null,
            'appointment_date' => $validated['appointment_date'],
            'notes' => $validated['notes'] ?? null,
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Booking service berhasil dikirim.',
            'data' => $appointment,
        ], 201);
    }

    public function storeSpecialRequest(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'brand' => ['nullable', 'string', 'max:255'],
            'model' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'string', 'max:50'],
            'budget' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
        ]);

        $specialRequest = SpecialRequest::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'] ?? $request->user()->email,
            'phone' => $validated['phone'],
            'brand' => $validated['brand'] ?? null,
            'model' => $validated['model'] ?? null,
            'year' => $validated['year'] ?? null,
            'budget' => $validated['budget'] ?? null,
            'description' => $validated['description'] ?? null,
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Special request berhasil dikirim.',
            'data' => $specialRequest,
        ], 201);
    }

    public function storeSellCarRequest(Request $request)
    {
        $validated = $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['nullable', 'email', 'max:255'],
            'phone' => ['required', 'string', 'max:50'],
            'brand' => ['required', 'string', 'max:255'],
            'model' => ['nullable', 'string', 'max:255'],
            'year' => ['nullable', 'string', 'max:50'],
            'mileage' => ['nullable', 'string', 'max:255'],
            'expected_price' => ['nullable', 'string', 'max:255'],
            'description' => ['nullable', 'string'],
            'photos' => ['nullable', 'array'],
            'photos.*' => ['image', 'mimes:jpg,jpeg,png,webp', 'max:10240'],
        ]);

        $uploadedPhotos = [];

        if ($request->hasFile('photos')) {
            foreach ($request->file('photos') as $photo) {
                $uploadedPhotos[] = $photo->store('sell-car-requests', 'public');
            }
        }

        $sellRequest = SellCarRequest::create([
            'full_name' => $validated['full_name'],
            'email' => $validated['email'] ?? $request->user()->email,
            'phone' => $validated['phone'],
            'brand' => $validated['brand'],
            'model' => $validated['model'] ?? null,
            'year' => $validated['year'] ?? null,
            'mileage' => $validated['mileage'] ?? null,
            'expected_price' => $validated['expected_price'] ?? null,
            'photos' => $uploadedPhotos,
            'description' => $validated['description'] ?? null,
            'status' => 'pending',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Data sell your car berhasil dikirim.',
            'data' => $sellRequest,
        ], 201);
    }
}
