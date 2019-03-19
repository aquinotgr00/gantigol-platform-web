<?php

namespace Modules\Admin\Seeders;
use Illuminate\Database\Seeder;

class FactoryTestForAdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Admin::class, 50)->create();
    }
}
