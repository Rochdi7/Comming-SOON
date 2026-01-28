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
        Schema::create('vehicles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained('agencies')->cascadeOnDelete();
            $table->foreignId('vehicle_model_id')->constrained('vehicle_models')->cascadeOnDelete();
            $table->string('registration_number', 50);
            $table->string('registration_city', 100)->nullable();
            $table->year('year')->nullable();
            $table->string('color', 50)->nullable();
            $table->unsignedInteger('current_mileage')->default(0);
            $table->enum('status', ['available', 'unavailable', 'maintenance', 'sold'])->default('available');
            $table->decimal('daily_rate', 10, 2)->nullable();
            $table->decimal('deposit_amount', 10, 2)->nullable();
            $table->boolean('has_gps')->default(false);
            $table->boolean('has_air_conditioning')->default(true);
            $table->text('notes')->nullable();
            $table->string('vin', 50)->nullable();
            $table->enum('fuel_policy', ['full_to_full', 'same_to_same', 'other'])->default('full_to_full');
            $table->tinyInteger('fuel_level_out')->nullable();
            $table->tinyInteger('fuel_level_in')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->unique(['agency_id', 'registration_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicles');
    }
};
