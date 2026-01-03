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
        Schema::create('vehicle_control_items', function (Blueprint $table) {
            $table->id();
            $table->foreignId('vehicle_control_id')->constrained('vehicle_controls')->cascadeOnDelete();
            $table->string('item_key', 100);
            $table->string('label', 150)->nullable();
            $table->enum('status', ['yes', 'no', 'na']);
            $table->string('comment', 255)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_control_items');
    }
};
