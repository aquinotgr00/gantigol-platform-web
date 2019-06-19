<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddVendorShipment extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('setting_shippings', 'vendor')) {

        }else{
             Schema::table('setting_shippings', function (Blueprint $table) {                
                $table->string('vendor')->nullable();
                $table->string('account')->nullable();
                $table->text('api_key')->nullable();
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
        if (Schema::hasColumn('setting_shippings', 'vendor')) {
            Schema::table('setting_shippings', function (Blueprint $table) {
                $table->dropColumn('vendor');
            });
        }
        if (Schema::hasColumn('setting_shippings', 'account')) {
            Schema::table('setting_shippings', function (Blueprint $table) {
                $table->dropColumn('account');
            });
        }
        if (Schema::hasColumn('setting_shippings', 'api_key')) {
            Schema::table('setting_shippings', function (Blueprint $table) {
                $table->dropColumn('api_key');
            });
        }
    }
}
