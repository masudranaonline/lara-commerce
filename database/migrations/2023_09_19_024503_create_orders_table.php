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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('order_number')->uniqid();
            $table->string('product_name')->nullable();
            $table->integer('quantity')->nullable();
            $table->float('tax')->nullable();
            $table->float('total_amount')->nullable();
            $table->boolean('status')->nullable();
            $table->string('image')->nullable();
            $table->date('order_date')->nullable();
            $table->date('delivary_date')->nullable();
            $table->string('payment_method');
            $table->string('customer_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('house_no')->nullable();
            $table->string('road_no')->nullable();
            $table->string('village')->nullable();
            $table->string('sub_district')->nullable();
            $table->string('district')->nullable();
            $table->string('division')->nullable();
            $table->string('country')->nullable();
            $table->text('product_details')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
