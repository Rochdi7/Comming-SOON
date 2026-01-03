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
        Schema::create('bookings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained('agencies')->cascadeOnDelete();
            $table->foreignId('client_id')->nullable()->constrained('clients')->nullOnDelete();
            $table->foreignId('vehicle_id')->nullable()->constrained('vehicles')->nullOnDelete();
            $table->date('start_date');
            $table->date('end_date');
            $table->string('pickup_location', 255);
            $table->string('dropoff_location', 255);
            $table->unsignedInteger('booked_days');
            $table->decimal('estimated_total', 10, 2)->nullable();
            $table->enum('status', ['pending', 'confirmed', 'cancelled', 'converted'])->default('pending');
            $table->enum('source', ['website', 'mobile', 'backoffice', 'other'])->default('website');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bookings');
    }
};
