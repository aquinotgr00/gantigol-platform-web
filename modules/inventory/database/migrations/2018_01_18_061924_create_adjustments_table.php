<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdjustmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adjustments', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('product_variants_id');
            $table->enum('method', ['+', '-']);
            $table->integer('qty');
            $table->text('note')->nullable();
            $table->unsignedTinyInteger('type');
            $table->unsignedInteger('users_id');
            $table->timestamps();
            //$table->foreign('users_id')->references('id')->on('users')->onDelete('cascade');
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
        Schema::dropIfExists('adjustments');
    }
}
