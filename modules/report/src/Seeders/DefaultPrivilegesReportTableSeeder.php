<?php

namespace Modules\Report\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DefaultPrivilegesReportTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        $defaultPrivilegeCategoryId = DB::table('privilege_categories')->where('name', 'default')->value('id');
        
        DB::table('privileges')->insert([
            ['name'=>'report management', 'privilege_category_id'=>$defaultPrivilegeCategoryId]
        ]);
    }
}
