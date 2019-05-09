<?php
namespace Modules\Preorder\Seeders;

use Illuminate\Database\Seeder;
use DB;

class PreOrderTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pre_orders')->truncate();
        $preorder = factory(\Modules\Preorder\PreOrder::class, 10)->create();
        DB::table('transactions')->truncate();
        $transaction = factory(\Modules\Preorder\Transaction::class, 50)->create();
        DB::table('orders')->truncate();
        $orders = factory(\Modules\Preorder\Order::class, 150)->create();
    }
}
