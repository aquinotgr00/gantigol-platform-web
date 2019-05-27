<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCustomerProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('customer_profiles', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id')->nullable();
            $table->unsignedInteger('member_discount_id')->nullable();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('phone',20);
            $table->enum('gender',['m', 'f'])->nullable();
            $table->text('address');
            $table->unsignedInteger('subdistrict_id')->nullable();
            $table->string('zip_code',6)->nullable();
            $table->date('birthdate');
            $table->datetime('last_login')->nullable();
            $table->timestamps();
            
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('restrict');
            //$table->foreign('subdistrict_id')->references('id')->on('subdistricts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('customer_profiles');
    }
}
