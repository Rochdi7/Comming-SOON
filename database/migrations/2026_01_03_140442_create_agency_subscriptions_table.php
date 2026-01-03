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
        Schema::create('agency_subscriptions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained('agencies')->cascadeOnDelete();
            $table->string('plan_name', 100)->default('basic');
            $table->boolean('is_active')->default(true);
            $table->dateTime('starts_at')->nullable();
            $table->dateTime('ends_at')->nullable();
            $table->dateTime('trial_ends_at')->nullable();
            $table->enum('billing_cycle', ['monthly', 'yearly'])->nullable();
            $table->enum('provider', ['stripe', 'paypal', 'manual', 'other'])->default('manual');
            $table->string('provider_subscription_id', 150)->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();

            $table->unique('agency_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agency_subscriptions');
    }
};
