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
        Schema::create('sell_car_requests', function (Blueprint $table) {
            $table->id();
                  $table->string('full_name');
            $table->string('email');
            $table->string('phone');

            $table->string('brand');
            $table->string('model');

            $table->year('year');

            $table->integer('mileage');

            $table->decimal('expected_price', 15, 2);

            $table->json('photos')
                ->nullable();

            $table->longText('description')
                ->nullable();

            $table->enum('status', [
                'pending',
                'reviewed',
                'approved',
                'rejected'
            ])->default('pending');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sell_car_requests');
    }
};
