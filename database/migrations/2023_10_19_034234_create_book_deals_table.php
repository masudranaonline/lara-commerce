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
        Schema::create('book_deals', function (Blueprint $table) {
            $table->id();
<<<<<<< HEAD
            $table->bigInteger('book_id');
=======
            $table->unsignedBigInteger('book_id');
>>>>>>> 15f5bb9 (- Installed Breeze)
            $table->datetime('offer_end')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_deals');
    }
};
