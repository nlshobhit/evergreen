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
        Schema::create('sales', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable();
            $table->string('customer_number')->nullable();
            $table->string('customer_location')->nullable();
            $table->string('product_name')->nullable();
            $table->string('no_of_pieces')->nullable();
            $table->decimal('cost',10,2)->nullable();
            $table->decimal('cost_price', 10,2)->nullable();
            $table->decimal('sold_price', 10,2)->nullable();
            $table->decimal('profit_loss', 10,2)->nullable();
            $table->decimal('advance_payment', 10,2)->nullable();
            $table->decimal('pending_payment', 10,2)->nullable();
            $table->string('full_name')->nullable();
            $table->string('add_incentive')->nullable();
            $table->decimal('percentage',10,2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales');
    }
};
