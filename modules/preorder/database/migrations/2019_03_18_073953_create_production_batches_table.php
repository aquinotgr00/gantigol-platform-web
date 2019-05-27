<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductionBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('production_batches', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pre_order_id');
            $table->enum('status', ['pending','proceed','completed','shipped','archived'])->default('pending');
            $table->string('batch_name')->nullable();
            $table->integer('batch_qty')->nullable();
            $table->date('start_production_date')->nullable();
            $table->date('end_production_date')->nullable();
            $table->text('notes')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('production_batches');
    }
}
