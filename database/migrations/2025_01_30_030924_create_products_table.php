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
        Schema::create('products' , function(Blueprint $table){
            $table -> id();
            $table -> string('name');
            $table -> string('description')->nullable();
            $table -> bigInteger('category_id')->unsigned();
            $table -> decimal('whole_sale_price', 8,2);
            $table -> decimal('retail_price' , 8 , 2);
            $table -> string('image');
            $table -> timestamps();
            $table -> foreign('category_id')->references('id')->on('categories');
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
