<?php
namespace Modules\Admin\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ShopAssistantForRolePrivilegeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->definePrivilegesForRole('Shop Assistant', [
            'manage product variant',
            'add product variant',
            'edit product variant'
        ]);
    }
    
    private function definePrivilegesForRole($roleName, $privileges)
    {
        $timestamp = $this->getTimestamp();
        $role = $this->createRole($roleName);
                
        DB::table('role_privilege')->insert(
                DB::table('privileges')
                ->selectRaw('? as role_id, id',[$role])
                ->whereIn('name',$privileges)
                ->get()
                ->map(function($privilege) use($timestamp) {
                    return array_merge(['role_id'=>$privilege->role_id,'privilege_id'=>$privilege->id],$timestamp);
                })->all());
    }
    
    private function getTimestamp()
    {
        return [ 'created_at'=> Carbon::now(), 'updated_at'=> Carbon::now() ];
    }
    
    private function createRole($roleName)
    {
        DB::table('roles')->insert([array_merge(['name'=>$roleName],$this->getTimestamp())]);
        
        return DB::table('roles')->where('name',$roleName)->value('id');
    }
}
