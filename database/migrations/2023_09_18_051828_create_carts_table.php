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
        Schema::create('carts', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('cart_number')->uniqid();
            $table->string('image')->nullable();
            $table->integer('sales_price')->nullable();
            $table->string('voucher_no')->unique();
            $table->string('total_amount')->nullable();
            $table->string('color_family')->nullable();
            $table->string('warranty')->nullable();
            $table->string('payment_method')->nullable();
            $table->integer('shipping_cost')->nullable();
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
