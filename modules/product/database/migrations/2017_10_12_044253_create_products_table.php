<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->text('description')->nullable();
            $table->string('image')->nullable();
            $table->unsignedInteger('price');
            $table->unsignedInteger('weight')->nullable();
            $table->unsignedInteger('category_id')->nullable();
            $table->text('keywords')->nullable();
            $table->boolean('status')->default(true);
            $table->boolean('visible')->default(true);
            $table->unsignedInteger('size_id')->nullable();
            $table->string('variant_id')->nullable();
            $table->timestamps();
            
            //$table->foreign('category_id')->references('id')->on('product_categories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
