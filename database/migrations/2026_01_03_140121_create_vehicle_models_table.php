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
        Schema::create('vehicle_models', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained('agencies')->cascadeOnDelete();
            $table->foreignId('vehicle_brand_id')->constrained('vehicle_brands')->cascadeOnDelete();
            $table->string('name', 150);
            $table->tinyInteger('doors')->nullable();
            $table->tinyInteger('seats')->nullable();
            $table->enum('transmission', ['manual', 'automatic'])->nullable();
            $table->enum('fuel_type', ['diesel', 'petrol', 'hybrid', 'electric', 'other'])->nullable();
            $table->string('category', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_models');
    }
};
