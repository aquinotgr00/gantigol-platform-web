<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RunSeedersAdmin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Artisan::call('db:seed', [
            '--class' => Modules\Admin\Seeders\SuperuserForAdminsTableSeeder::class,
        ]);
        Artisan::call('db:seed', [
            '--class' => Modules\Admin\Seeders\DefaultPrivilegesTableSeeder::class,
        ]);
        Artisan::call('db:seed', [
            '--class' => Modules\Admin\Seeders\AdminForRolePrivilegeTableSeeder::class,
        ]);
        Artisan::call('db:seed', [
            '--class' => Modules\Admin\Seeders\UserForPrivilegesTableSeeder::class,
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
