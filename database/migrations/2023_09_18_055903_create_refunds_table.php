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
        Schema::create('refunds', function (Blueprint $table) {
            $table->id();
            $table->string('refund_number')->unique();
            $table->string('product_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('refund_amount')->nullable();
            $table->string('image')->nullable();
            $table->string('customer_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('refund_fact')->nullable();
            $table->string('refund_date')->nullable();
            $table->string('vendor_name')->nullable();
            $table->string('company_name')->nullable();
            $table->string('phone_no')->nullable();
            $table->string('email')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('refunds');
    }
};
