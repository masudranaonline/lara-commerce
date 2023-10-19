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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->bigint('category_id');
            $table->bigint('author_id');
            $table->bigint('publisher_id');
            $table->string('name')->nullable();
            $table->text('description')->nullable();
            $table->string('image', 500)->nullable();
            $table->float('cost_price')->nullable();
            $table->float('sales_price')->nullable();
            $table->float('discount_price')->nullable();
            $table->float('rating')->nullable();
            $table->float('quantity')->nullable();
            $table->float('minimum_quantity')->nullable();
            $table->string('pages')->nullable();
            $table->string('edition')->nullable();
            $table->string('origin')->nullable();
            $table->string('language')->nullable();
            $table->boolean('is_ebook')->nullable();
            $table->string('pdf', 500)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
