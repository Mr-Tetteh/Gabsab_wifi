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
        Schema::create('customer_issues', function (Blueprint $table) {
            $table->id();
            $table->string('customer_issue');

            $table->string('engineer_report')->nullable();
            $table->string('engineer_solution')->nullable();

            $table->string('engineer_first_name')->nullable();
            $table->string('user_id')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customer_issues');
    }
};
