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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_title')->nullable();
            $table->string('image')->nullable();
            $table->integer('cost_price')->nullable();
            $table->integer('sales_price')->nullable();
            $table->float('discount_price')->nullable();
            $table->string('brand_name')->nullable();
            $table->string('rating')->nullable();
            $table->integer('quantity')->nullable();
            $table->integer('minimum_quantity')->nullable();
            $table->string('sizes')->nullable();
            $table->string('weight')->nullable();
            $table->string('material')->nullable();
            $table->string('color_family')->nullable();
            $table->string('warranty')->nullable();
            $table->integer('shipping_cost')->nullable();
            $table->string('product_location')->nullable();
            $table->text('descriptions')->nullable();   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
