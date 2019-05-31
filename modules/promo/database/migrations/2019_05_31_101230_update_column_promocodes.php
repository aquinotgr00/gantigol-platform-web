<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UpdateColumnPromocodes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (Schema::hasColumn('promocodes', 'created_at')) {
            // Schema::table('promocodes', function (Blueprint $table) {
            // $table->timestamp('created_at')->default('CURRENT_TIMESTAMP')->change();
            //  });    
            DB::statement("ALTER TABLE promocodes CHANGE created_at created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP");
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasColumn('promocodes', 'created_at')) {
            $table->timestamp('created_at')->nullable()->change();
        }
    }
}
