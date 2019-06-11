<?php

use Illuminate\Database\Seeder;

class BannerCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('banner_category')->insert([
            'name' => 'Home'
        ]);
         DB::table('banner_category')->insert([
            'name' => 'Shop'
        ]);
    }
}
