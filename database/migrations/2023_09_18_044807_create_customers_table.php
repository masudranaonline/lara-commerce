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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('customer_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('password')->nullable();
            $table->string('image')->nullable();
            
            $table->string('mailing_country')->nullable();
            $table->string('mailing_division')->nullable();
            $table->string('mailing_district')->nullable();
            $table->string('mailing_sub_district')->nullable();
            $table->string('mailing_village')->nullable();
            $table->string('mailing_roadno')->nullable();
            $table->string('mailing_houseno')->nullable();
            $table->string('mailing_zip')->nullable();

            $table->string('present_country')->nullable();
            $table->string('present_division')->nullable();
            $table->string('present_district')->nullable();
            $table->string('present_sub_district')->nullable();
            $table->string('present_village')->nullable();
            $table->string('present_roadno')->nullable();
            $table->string('present_houseno')->nullable();
            $table->string('present_zip')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
