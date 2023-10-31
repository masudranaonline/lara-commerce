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
            $table->bigInteger('category_id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('image', 500)->nullable();
            $table->float('cost_price')->nullable();
            $table->float('sales_price')->nullable();
            $table->float('discount_price')->nullable();
            $table->string('brand')->nullable();
            $table->float('rating')->nullable();
            $table->float('quantity')->nullable();
            $table->float('minimum_quantity')->nullable();
            $table->string('sizes')->nullable();
            $table->string('materials')->nullable();
            $table->string('color')->nullable();
            $table->string('weight')->nullable();
            $table->string('warranty')->nullable();
            $table->string('origin')->nullable();
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
