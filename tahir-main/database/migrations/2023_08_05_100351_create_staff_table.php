<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('full_name')->nullable();
            $table->string('department')->nullable();
            $table->date('date_of_joining')->nullable();
            $table->string('mobile_number')->nullable();
            $table->string('address')->nullable();
            $table->decimal('salary',10,2)->nullable();
            $table->time('shift_timing')->nullable();
            $table->decimal('add_incentive',5,4)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
