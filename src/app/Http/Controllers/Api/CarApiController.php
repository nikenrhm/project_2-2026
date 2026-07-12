<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\CarApiResource;
use App\Models\Car;
use Illuminate\Http\Request;

class CarApiController extends Controller
{
    public function index(Request $request)
    {
        $query = Car::query()
            ->with('brand')
            ->where('status', 'available')
            ->latest();

        if ($request->filled('type')) {
            $query->where('type', $request->query('type'));
        }

        if ($request->boolean('featured')) {
            $query->where('is_featured', true);
        }

        if ($request->filled('search')) {
            $search = $request->query('search');

            $query->where(function ($q) use ($search) {
                $q->where('name', 'like', "%{$search}%")
                    ->orWhere('year', 'like', "%{$search}%")
                    ->orWhere('color', 'like', "%{$search}%")
                    ->orWhereHas('brand', function ($brandQuery) use ($search) {
                        $brandQuery->where('name', 'like', "%{$search}%");
                    });
            });
        }

        $cars = $query->paginate(10);

        return CarApiResource::collection($cars)
            ->additional([
                'success' => true,
                'message' => 'Data mobil berhasil diambil.',
            ]);
    }

    public function show(string $slug)
    {
        $car = Car::query()
            ->with('brand')
            ->where('slug', $slug)
            ->firstOrFail();

        return response()->json([
            'success' => true,
            'message' => 'Detail mobil berhasil diambil.',
            'data' => new CarApiResource($car),
        ]);
    }
}