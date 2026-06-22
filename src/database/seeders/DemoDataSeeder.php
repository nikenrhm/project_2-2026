<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarBrand;
use App\Models\Car;
use App\Models\ServiceType;
use App\Models\Banner;

class DemoDataSeeder extends Seeder
{
    public function run(): void
    {
        // Brands
        $bmw = CarBrand::create([
            'name' => 'BMW',
        ]);

        $mercedes = CarBrand::create([
            'name' => 'Mercedes-Benz',
        ]);

        $audi = CarBrand::create([
            'name' => 'Audi',
        ]);

        $porsche = CarBrand::create([
            'name' => 'Porsche',
        ]);

        // Banner
        Banner::create([
            'title' => 'Dream Culture',
            'subtitle' => 'Premium Luxury Car Dealer',
            'image' => 'banner/default.jpg',
            'button_text' => 'Explore Cars',
            'button_link' => '/cars/new',
            'is_active' => true,
        ]);

        // Cars
        Car::create([
            'car_brand_id' => $bmw->id,
            'name' => 'BMW 320i M Sport',
            'type' => 'used',
            'year' => 2021,
            'price' => 685000000,
            'mileage' => 25000,
            'transmission' => 'Automatic',
            'fuel_type' => 'Gasoline',
            'color' => 'Black',
            'description' => 'Well maintained premium sedan.',
            'is_featured' => true,
            'status' => 'available',
        ]);

        Car::create([
            'car_brand_id' => $mercedes->id,
            'name' => 'Mercedes C200 AMG',
            'type' => 'used',
            'year' => 2022,
            'price' => 850000000,
            'mileage' => 18000,
            'transmission' => 'Automatic',
            'fuel_type' => 'Gasoline',
            'color' => 'White',
            'description' => 'Luxury sedan with AMG package.',
            'is_featured' => true,
            'status' => 'available',
        ]);

        Car::create([
            'car_brand_id' => $audi->id,
            'name' => 'Audi A4 TFSI',
            'type' => 'new',
            'year' => 2025,
            'price' => 950000000,
            'transmission' => 'Automatic',
            'fuel_type' => 'Gasoline',
            'color' => 'Gray',
            'description' => 'Brand new Audi A4.',
            'is_featured' => true,
            'status' => 'available',
        ]);

        Car::create([
            'car_brand_id' => $porsche->id,
            'name' => 'Porsche Cayenne',
            'type' => 'new',
            'year' => 2025,
            'price' => 2500000000,
            'transmission' => 'Automatic',
            'fuel_type' => 'Gasoline',
            'color' => 'Black',
            'description' => 'Luxury performance SUV.',
            'is_featured' => true,
            'status' => 'available',
        ]);

        // Service Types
        ServiceType::create([
            'name' => 'General Service',
            'description' => 'Complete vehicle maintenance and inspection performed by experienced technicians.',
        ]);

        ServiceType::create([
            'name' => 'Oil Change',
            'description' => 'Premium oil replacement service to maintain engine efficiency and longevity.',
        ]);

        ServiceType::create([
            'name' => 'Engine Tune Up',
            'description' => 'Professional engine tuning to restore performance and fuel efficiency.',
        ]);

        ServiceType::create([
            'name' => 'Brake Service',
            'description' => 'Thorough brake system inspection and maintenance for enhanced safety.',
        ]);

        ServiceType::create([
            'name' => 'AC Service',
            'description' => 'Air conditioning maintenance to ensure maximum comfort and cooling performance.',
        ]);

        ServiceType::create([
            'name' => 'Transmission Service',
            'description' => 'Expert transmission care for smooth operation and long-term reliability.',
        ]);
    }
}