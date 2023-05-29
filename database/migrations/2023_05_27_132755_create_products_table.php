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
            $table->integer('product_id')->autoIncrement();
            $table->string('product_image');
            $table->string('product_name');
            $table->integer('category_id')->index();
            $table->text('product_description');
            $table->double('product_price');
            $table->integer('stock');
            $table->timestamps();

            $table->foreign('category_id')->references('category_id')->on('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product');
    }
};
