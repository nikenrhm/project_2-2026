<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('contact_settings', function (Blueprint $table) {
            $table->id();
            $table->string('whatsapp_label')->nullable();
            $table->string('whatsapp_number')->nullable();
            $table->string('instagram_username')->nullable();
            $table->string('instagram_url')->nullable();
            $table->string('email')->nullable();
            $table->text('address')->nullable();
            $table->string('map_url')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });

        DB::table('contact_settings')->insert([
            'whatsapp_label' => '0896-1273-3775',
            'whatsapp_number' => '6289612733775',
            'instagram_username' => '@dreamculture.id',
            'instagram_url' => 'https://instagram.com/dreamculture.id',
            'email' => 'info@dreamculture.com',
            'address' => "Jl. Dream Culture No. 88\nMedan, Sumatera Utara\nIndonesia",
            'map_url' => null,
            'is_active' => true,
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }

    public function down(): void
    {
        Schema::dropIfExists('contact_settings');
    }
};