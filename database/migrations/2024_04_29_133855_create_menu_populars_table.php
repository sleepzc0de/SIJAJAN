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
        Schema::create('menu_populars', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('drink_id');
            $table->unsignedBigInteger('category_id');
            $table->foreign('drink_id')->references('id')->on('drinks')->onDelete('cascade');
            $table->integer('order_count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('menu_populars');
    }
};
