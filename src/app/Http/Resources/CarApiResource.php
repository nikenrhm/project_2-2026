<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class CarApiResource extends JsonResource
{
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'brand' => $this->brand?->name,
            'name' => $this->name,
            'slug' => $this->slug,
            'type' => $this->type,
            'year' => $this->year,
            'price' => (float) $this->price,
            'price_formatted' => 'Rp ' . number_format((float) $this->price, 0, ',', '.'),
            'km' => (float) ($this->mileage ?? 0),
            'engine' => $this->fuel_type,
            'color' => $this->color,
            'status' => $this->status,
            'is_featured' => (bool) $this->is_featured,
            'thumbnail' => $this->thumbnail,
            'thumbnail_url' => $this->thumbnail
                ? asset('storage/' . $this->thumbnail)
                : null,
            'description' => $this->description,
            'created_at' => $this->created_at?->toDateTimeString(),
        ];
    }
}
