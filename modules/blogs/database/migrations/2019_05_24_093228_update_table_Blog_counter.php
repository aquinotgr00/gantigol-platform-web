<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateTableBLogCounter extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('blogs', 'counter')) {
            // do nothing
        }else{
            Schema::table('blogs', function (Blueprint $table) {
                $table->bigInteger('counter');
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
        if (Schema::hasColumn('blogs', 'counter')) {
            Schema::table('blogs', function (Blueprint $table) {
               $table->dropColumn('counter');
            });
        }
    }
}
