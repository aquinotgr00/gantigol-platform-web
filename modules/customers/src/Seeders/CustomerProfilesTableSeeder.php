<?php

use Illuminate\Database\Seeder;

class CustomerProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(\Modules\Customers\CustomerProfile::class, 50)->create();
    }
}
