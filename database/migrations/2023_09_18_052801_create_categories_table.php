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
        Schema::create('categories', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('category_name')->nullable();
            $table->string('image')->nullable();
            $table->integer('cost_price')->nullable();
            $table->integer('sales_price')->nullable();
            $table->float('discount')->nullable();
            $table->string('brand_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->string('color_family')->nullable();
            $table->string('warranty')->nullable();
            $table->string('shipping_cost')->nullable();
            $table->string('product_location')->nullable();
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categories');
    }
};
