<?php

namespace Modules\Customers\Seeders;

use Illuminate\Database\Seeder;
use DB;

class CustomerProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('customer_profiles')->truncate();
        factory(\Modules\Customers\CustomerProfile::class, 50)->create();
    }
}
