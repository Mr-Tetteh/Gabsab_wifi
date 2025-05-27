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
        Schema::create('prices', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('price');
            $table->string('quantity')->nullable();
            $table->string('adv_1')->nullable();
            $table->string('adv_2')->nullable();
            $table->string('adv_3')->nullable();
            $table->string('adv_4')->nullable();
            $table->string('adv_5')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prcies');
    }
};
