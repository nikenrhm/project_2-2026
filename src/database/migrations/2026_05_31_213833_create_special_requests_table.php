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
        Schema::create('special_requests', function (Blueprint $table) {
            $table->id();

            $table->string('full_name');
            $table->string('email');
            $table->string('phone');

            $table->string('brand')
                ->nullable();

            $table->string('model')
                ->nullable();

            $table->year('year')
                ->nullable();

            $table->decimal('budget', 15, 2)
                ->nullable();

            $table->longText('description')
                ->nullable();

            $table->enum('status', [
                'pending',
                'contacted',
                'completed',
                'cancelled'
            ])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('special_requests');
    }
};
