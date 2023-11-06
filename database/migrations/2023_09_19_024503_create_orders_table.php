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
            $table->unsignedBigInteger('user_id');
            $table->float('tax_parcent')->nullable();
            $table->float('tax_total')->nullable();
            $table->float('discount')->nullable();
            $table->float('total_amount')->nullable();
            $table->boolean('status')->nullable();
            $table->date('order_date')->nullable();
            $table->date('delivary_date')->nullable();
            $table->string('payment_method');

            $table->string('customer_name')->nullable();
            $table->string('mobile_no')->nullable();
            $table->string('email')->nullable();
            $table->string('country')->nullable();
            $table->string('division')->nullable();
            $table->string('district')->nullable();
            $table->string('upazilla')->nullable();
            $table->string('union')->nullable();
            $table->string('address')->nullable();

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
