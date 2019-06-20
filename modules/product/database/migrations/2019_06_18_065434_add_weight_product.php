<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddWeightProduct extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('products', 'weight')) {

        }else{
             Schema::table('products', function (Blueprint $table) {                
                $table->float('weight', 8, 3);
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
        if (Schema::hasColumn('products', 'weight')) {
            Schema::table('products', function (Blueprint $table) {
                $table->dropColumn('weight');
            });
        }
    }
}
