<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductCategoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 150);
            $table->unsignedInteger('image_id')->nullable();
            $table->unsignedInteger('parent_id')->nullable();
            $table->timestamps();
            
            $table->unique(['name','parent_id']);
            
        });
        
        Schema::table('product_categories', function (Blueprint $table) {
            $table->foreign('image_id')
                    ->references('id')->on('media')
                    ->onDelete('set null');
            
            $table->foreign('parent_id')
                    ->references('id')->on('product_categories')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('product_categories');
    }
}
