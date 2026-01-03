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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('agency_id')->constrained('agencies')->cascadeOnDelete();
            $table->foreignId('invoice_id')->nullable()
                ->constrained('invoices')->nullOnDelete();
            $table->foreignId('rental_contract_id')->nullable()
                ->constrained('rental_contracts')->nullOnDelete();
            $table->foreignId('financial_transaction_id')->nullable()
                ->constrained('financial_transactions')->nullOnDelete();
            $table->foreignId('financial_account_id')->constrained('financial_accounts')->cascadeOnDelete();
            $table->date('payment_date');
            $table->decimal('amount', 12, 2);
            $table->enum('method', ['cash', 'card', 'bank_transfer', 'cheque', 'other']);
            $table->enum('status', ['pending', 'confirmed', 'refunded'])->default('confirmed');
            $table->string('reference', 100)->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
