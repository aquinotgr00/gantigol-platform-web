<?php

namespace Modules\Report\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

use Modules\Admin\Seeders\UserPrivilegeCategoriesTableSeeder;

class report_priviledges extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->definePrivilegesForCategory('report', [
            'View report sales',
            'View report variants',
        ]);
    }
    
    private function definePrivilegesForCategory(string $categoryName, array $privileges): void
    {
        $timestamp = $this->getTimestamp();
        $category = $this->createCategory($categoryName);
        
        DB::table('privileges')->insert(
            collect($privileges)
                ->map(function ($privilegeName) use ($category, $timestamp) {
                    return array_merge(['name'=>$privilegeName,'privilege_category_id'=>$category], $timestamp);
                })
            ->all()
        );
    }
    
    private function getTimestamp(): array
    {
        return [ 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ];
    }
    
    private function createCategory(string $categoryName): int
    {
        DB::table('privilege_categories')->insert([array_merge(['name'=>$categoryName], $this->getTimestamp())]);
        
        return DB::table('privilege_categories')->where('name', $categoryName)->value('id');
    }
}
