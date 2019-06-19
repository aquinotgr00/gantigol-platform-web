<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDiscountOrders extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('orders', 'discount')) { } else {
            Schema::table('orders', function (Blueprint $table) {
                $table->unsignedInteger('discount')->nullable();
            });
        }

        if (Schema::hasColumn('transactions', 'discount')) { } else {
            Schema::table('transactions', function (Blueprint $table) {
                $table->unsignedInteger('discount')->nullable();
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
        if (Schema::hasColumn('orders', 'discount')) {
            Schema::table('orders', function (Blueprint $table) {
                $table->dropColumn('discount');
            });
        }
        
        if (Schema::hasColumn('transactions', 'discount')) {
            Schema::table('transactions', function (Blueprint $table) {
                $table->dropColumn('discount');
            });
        }
        
    }
}
