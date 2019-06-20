<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCustomerIdTransactions extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('transactions', 'customer_id')) {

        }else{
             Schema::table('transactions', function (Blueprint $table) {                
                $table->unsignedInteger('customer_id');
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
        if (Schema::hasColumn('transactions', 'customer_id')) {
            Schema::table('transactions', function (Blueprint $table) {
                $table->dropColumn('customer_id');
            });
        }
    }
}
