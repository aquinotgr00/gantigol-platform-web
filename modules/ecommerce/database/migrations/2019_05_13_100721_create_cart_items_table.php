<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCartItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cart_items', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('cart_id')->nullable();
            $table->unsignedInteger('product_id')->nullable();
            $table->string('size_code',10)->nullable();
            $table->unsignedInteger('qty');
            $table->unsignedInteger('price')->nullable();
            $table->unsignedInteger('subtotal')->nullable();
            $table->enum('wishlist',['true','false'])->default('false');
            $table->enum('checked',['true','false'])->default('true');
            $table->text('notes')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('cart_items');
    }
}
