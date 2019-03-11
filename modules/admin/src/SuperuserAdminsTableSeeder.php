<?php

namespace Modules\Admin;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SuperuserAdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
            'name'=>'Admin',
            'email'=>'admin@mail.com',
            'password'=>bcrypt('Open1234'),
            'active'=>true
        ]);
    }
}
