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
        Schema::create('returnsales', function (Blueprint $table) {
            $table->id();
            $table->string('product_name');
            $table->decimal('return_amount', 10, 2);
            $table->string('return_reason');
            $table->date('return_date');
            $table->integer('store_id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('returnsales');
    }
};
