<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransactionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transactions', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('pre_order_id');
            $table->unsignedInteger('subdistrict_id')->nullable();
            $table->string('invoice')->unique()->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->text('address');
            $table->integer('postal_code');
            $table->integer('quantity');
            $table->integer('amount');
            $table->text('note')->nullable();
            $table->enum('status', ['unpaid','paid','completed'])->default('unpaid');
            $table->string('courier_name')->nullable();
            $table->string('courier_type')->nullable();
            $table->string('courier_fee')->nullable();
            $table->dateTime('payment_duedate')->nullable();
            $table->unsignedInteger('payment_reminder')->default(0);
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
        Schema::dropIfExists('transactions');
    }
}
