<?php

use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('contents')->delete();
        DB::table('contents')->insert([
            'title' => 'Pictures of otters',
            'description' => 'A lot of cute otters.',
        ]);
    }
}
