<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingShippingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('setting_shippings', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('width');
            $table->unsignedInteger('height');
            $table->text('courier')->nullable();
            $table->enum('delimiter', [';',',','|','-'])->default(';');
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
        Schema::dropIfExists('setting_shippings');
    }
}
