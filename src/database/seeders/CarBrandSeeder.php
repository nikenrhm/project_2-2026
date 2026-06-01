<?php

namespace Database\Seeders;

use App\Models\CarBrand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CarBrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        CarBrand::insert([
    ['name' => 'Toyota'],
    ['name' => 'Honda'],
    ['name' => 'Mitsubishi'],
    ['name' => 'Suzuki'],
    ['name' => 'Hyundai'],
    ['name' => 'Wuling'],
]);
    }
}
