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
            $table->increments('id')->unique()->comment('The id is aouto increment and unique .');
            $table->text('image_url')->comment('The image product .') ;
            $table->string('name')->comment('The product name .') ;
            $table->string('price')->comment('The product price .') ;
            $table->string('slug')->unique()->comment('This is unique product address .') ;
            $table->string('number_of_price')->comment('The number my poducts .') ;
            $table->string('category_id')->comment('The product categoty .') ;
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
