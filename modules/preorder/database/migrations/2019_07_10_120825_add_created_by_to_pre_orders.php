<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCreatedByToPreOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pre_orders', function (Blueprint $table) {
            //
        });
        if (Schema::hasColumn('pre_orders', 'created_by')) { } else {
            Schema::table('pre_orders', function (Blueprint $table) {
                $table->unsignedInteger('created_by')->default(1);
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
        if (Schema::hasColumn('pre_orders', 'created_by')) {
            Schema::table('pre_orders', function (Blueprint $table) {
                $table->dropColumn('created_by');
            });
        }
    }
}
