<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateShipmentCouriersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('shipment_couriers', function (Blueprint $table) {
            $table->increments('id');
            $table->string('courier');
            $table->json('reached')->nullable();
            $table->json('unreached')->nullable();
            $table->enum('status',['true','false'])->default('true');
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
        Schema::dropIfExists('shipment_couriers');
    }
}
