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
        Schema::table('carts', function (Blueprint $table) {
            $table->unsignedBigInteger('user_id')->after('Id');
            $table->renameColumn('product_name', 'product_id');
            $table->renameColumn('sales_price', 'price');
            $table->renameColumn('total_amount', 'total');

            $table->dropColumn('cart_number');
            $table->dropColumn('image');
            $table->dropColumn('voucher_no');
            $table->dropColumn('color_family');
            $table->dropColumn('warranty');
            $table->dropColumn('payment_method');
            $table->dropColumn('shipping_cost');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('carts', function (Blueprint $table) {
            $table->dropColumn('user_id');
            $table->renameColumn('product_id', 'product_name');
            $table->renameColumn( 'price','sales_price');
            $table->renameColumn('total','total_amount');
            $table->string('cart_number')->uniqid();
            $table->string('image')->nullable();
            $table->string('voucher_no')->unique();
            $table->string('color_family')->nullable();
            $table->string('warranty')->nullable();
            $table->string('payment_method')->nullable();
            $table->integer('shipping_cost')->nullable();
        });

    }
};
