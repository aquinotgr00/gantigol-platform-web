<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRolePrivilegeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('role_privilege', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('privilege_id');
            $table->timestamps();
        });
        
        Schema::table('role_privilege', function (Blueprint $table) {
            $table->foreign('role_id')
                    ->references('id')->on('roles')
                    ->onDelete('cascade');
            
            $table->foreign('privilege_id')
                    ->references('id')->on('privileges')
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
        Schema::dropIfExists('role_privilege');
    }
}
