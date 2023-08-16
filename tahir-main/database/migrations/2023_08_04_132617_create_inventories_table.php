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
        Schema::create('inventories', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_type')->nullable();
            $table->string('manufacturer')->nullable();
            $table->string('vendor_name')->nullable();
            $table->integer('no_of_pieces')->nullable();
            $table->decimal('product_dimension', 10, 2)->nullable();
            $table->string('store_name')->nullable();
            $table->decimal('per_piece_price', 10, 2)->nullable();
            $table->decimal('total_value', 10, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventories');
    }
};
