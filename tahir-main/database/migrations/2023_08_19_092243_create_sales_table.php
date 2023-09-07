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
            $table->json('product_name')->nullable();
            $table->json('no_of_pieces')->nullable();
            $table->json('cost')->nullable();
            $table->decimal('cost_price', 10,2)->nullable();
            $table->decimal('sold_price', 10,2)->nullable();
            $table->decimal('profit_loss', 10,2)->nullable();
            $table->decimal('advance_payment', 10,2)->nullable();
            $table->decimal('pending_payment', 10,2)->nullable();
            $table->json('full_name')->nullable();
            $table->json('add_incentive')->nullable();
            $table->json('percentage')->nullable();
            $table->integer('store_id');
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
