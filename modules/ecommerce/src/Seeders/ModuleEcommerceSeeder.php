<?php

namespace Modules\Ecommerce\Seeders;

use Illuminate\Database\Seeder;
use DB;

class ModuleEcommerceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('orders')->truncate();
        $transaction = factory(\Modules\Ecommerce\Order::class, 25)->create();
        DB::table('order_items')->truncate();
        $transaction = factory(\Modules\Ecommerce\OrderItem::class, 50)->create();
    }
}
