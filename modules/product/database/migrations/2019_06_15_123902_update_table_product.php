<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {   
        if (Schema::hasColumn('products', 'visible')) {

        }else{
             Schema::table('products', function (Blueprint $table) {
                $table->boolean('visible')->default(true);
            });
        }
       
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('products', 'visible')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('visible');
            });
        }
    }
}
