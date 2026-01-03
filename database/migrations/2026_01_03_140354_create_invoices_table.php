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
        Schema::create('invoices', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained('agencies')->cascadeOnDelete();
            $table->string('invoice_number', 50)->unique();
            $table->date('invoice_date');
            $table->foreignId('rental_contract_id')->nullable()
                ->constrained('rental_contracts')->nullOnDelete();
            $table->foreignId('client_id')->nullable()
                ->constrained('clients')->nullOnDelete();

            $table->string('company_name', 150)->nullable();
            $table->text('company_address')->nullable();
            $table->string('company_phone', 50)->nullable();
            $table->string('company_email', 150)->nullable();

            $table->decimal('vat_rate', 5, 2)->default(20.00);
            $table->decimal('total_ht', 12, 2);
            $table->decimal('total_vat', 12, 2);
            $table->decimal('total_ttc', 12, 2);

            $table->enum('status', ['draft', 'sent', 'paid', 'partially_paid', 'cancelled'])
                ->default('draft');

            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('invoices');
    }
};
