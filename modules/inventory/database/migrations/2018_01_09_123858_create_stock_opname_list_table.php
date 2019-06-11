<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStockOpnameListTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock_opname_list', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('stock_opname_id');
            $table->unsignedInteger('product_variants_id');
            $table->unsignedInteger('qty');
            $table->boolean('is_same')->default(false);
            $table->text('note')->nullable();
            $table->timestamps();

            $table->foreign('stock_opname_id')->references('id')->on('stock_opname')->onDelete('cascade');
            $table->foreign('product_variants_id')->references('id')->on('product_variants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('stock_opname_list');
    }
}
