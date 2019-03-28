<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdminPrivilegesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin_privileges', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('admin_id');
            $table->unsignedInteger('privilege_id');
            $table->timestamps();
        });

        Schema::table('admin_privileges', function (Blueprint $table) {
            $table->foreign('admin_id')
                    ->references('id')->on('admins')
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
        Schema::dropIfExists('admin_privileges');
    }
}
