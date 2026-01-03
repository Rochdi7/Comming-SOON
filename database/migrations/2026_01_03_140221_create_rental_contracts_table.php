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
        Schema::create('rental_contracts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained('agencies')->cascadeOnDelete();
            $table->string('contract_number', 50)->nullable()->unique();
            $table->foreignId('vehicle_id')->constrained('vehicles')->cascadeOnDelete();
            $table->foreignId('primary_client_id')->constrained('clients')->cascadeOnDelete();
            $table->foreignId('secondary_client_id')->nullable()
                ->constrained('clients')->nullOnDelete();

            $table->date('start_date');
            $table->time('start_time');
            $table->date('end_date');
            $table->time('end_time')->nullable();

            $table->string('pickup_location', 255);
            $table->string('dropoff_location', 255);

            $table->unsignedInteger('planned_days');
            $table->decimal('daily_rate', 10, 2);
            $table->decimal('discount_amount', 10, 2)->default(0);
            $table->decimal('total_amount', 10, 2);
            $table->decimal('deposit_amount', 10, 2)->nullable();

            $table->enum('status', [
                'draft',
                'pending',
                'accepted',
                'in_progress',
                'completed',
                'cancelled'
            ])->default('pending');

            $table->enum('acceptance_status', ['pending', 'accepted', 'rejected'])
                ->default('pending');

            $table->enum('source', ['backoffice', 'website', 'mobile', 'other'])->default('backoffice');
            $table->text('observations')->nullable();

            $table->foreignId('created_by')->nullable()->constrained('users')->nullOnDelete();
            $table->foreignId('updated_by')->nullable()->constrained('users')->nullOnDelete();

            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rental_contracts');
    }
};
