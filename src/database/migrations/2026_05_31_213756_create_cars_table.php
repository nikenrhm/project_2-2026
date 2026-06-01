<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
                 $table->foreignId('car_brand_id')
                ->constrained()
                ->cascadeOnDelete();

            $table->string('name');
            $table->string('slug')->unique();

            $table->enum('type', [
                'new',
                'used'
            ]);

            $table->year('year');

            $table->decimal('price', 15, 2);

            $table->integer('mileage')
                ->nullable();

            $table->string('transmission')
                ->nullable();

            $table->string('fuel_type')
                ->nullable();

            $table->string('color')
                ->nullable();

            $table->string('thumbnail')
                ->nullable();

            $table->longText('description')
                ->nullable();

            $table->boolean('is_featured')
                ->default(false);

            $table->enum('status', [
                'available',
                'sold'
            ])->default('available');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cars');
    }
};
