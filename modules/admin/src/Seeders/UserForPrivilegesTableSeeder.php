<?php

namespace Modules\Admin\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Modules\Admin\Seeders\UserPrivilegeCategoriesTableSeeder;

class UserForPrivilegesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->definePrivilegesForCategory('User',[
            'View users',
            'Add user',
            'Edit user',
            'Enable/Disable user',
            'Edit user privileges'
        ]);
        
        $this->definePrivilegesForCategory('Product Variant',[
            'Manage product variant',
            'Add product variant',
            'Edit product variant',
            'Delete product variant',
        ]);
    }
    
    private function definePrivilegesForCategory($categoryName, $privileges)
    {
        $timestamp = $this->getTimestamp();
        $category = $this->createCategory($categoryName);
        
        DB::table('privileges')->insert(collect($privileges)->map(function($privilegeName) use ($category, $timestamp) {
            return array_merge(['name'=>$privilegeName,'privilege_category_id'=>$category],$timestamp);
        })->all());
    }
    
    private function getTimestamp()
    {
        return [ 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ];
    }
    
    private function createCategory($categoryName)
    {
        DB::table('privilege_categories')->insert([array_merge(['name'=>$categoryName],$this->getTimestamp())]);
        
        return DB::table('privilege_categories')->where('name',$categoryName)->value('id');
    }
}
