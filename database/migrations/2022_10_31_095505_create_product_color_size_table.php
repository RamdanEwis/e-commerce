<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_color_size', function (Blueprint $table) {
            $table->id();
            $table->string('stock');
            $table->decimal('price',8,2);
            $table->decimal('discount_price',8,2)->nullable();
            $table->foreignId('product_color_id')->references('id')->on('product_colors');
            $table->foreignId('product_size_id')->references('id')->on('product_sizes');
            $table->string('status')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_color_size');
    }
};
