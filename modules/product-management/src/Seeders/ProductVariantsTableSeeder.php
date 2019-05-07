<?php

namespace Modules\ProductManagement\Seeders;

use Illuminate\Database\Seeder;

class ProductVariantsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $product_variants = array(
            array(
                "id" => 70,
                "product_id" => 1,
                "size_code" => "S",
                "sku" => "Wild delivery s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 71,
                "product_id" => 1,
                "size_code" => "M",
                "sku" => "wile delivery m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 72,
                "product_id" => 1,
                "size_code" => "XL",
                "sku" => "wild delivery xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 73,
                "product_id" => 2,
                "size_code" => "S",
                "sku" => "VAn s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 74,
                "product_id" => 2,
                "size_code" => "M",
                "sku" => "van m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 75,
                "product_id" => 2,
                "size_code" => "L",
                "sku" => "van l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 76,
                "product_id" => 2,
                "size_code" => "XL",
                "sku" => "van xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 81,
                "product_id" => 3,
                "size_code" => "M",
                "sku" => "Log box 11 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 82,
                "product_id" => 3,
                "size_code" => "L",
                "sku" => "log box 11 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 83,
                "product_id" => 3,
                "size_code" => "XL",
                "sku" => "log box 11 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 84,
                "product_id" => 4,
                "size_code" => "S",
                "sku" => "Grunge s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 85,
                "product_id" => 4,
                "size_code" => "M",
                "sku" => "grunge m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 86,
                "product_id" => 4,
                "size_code" => "XL",
                "sku" => "GRUNGE XL",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 77,
                "product_id" => 5,
                "size_code" => "S",
                "sku" => "hs 2459 s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 78,
                "product_id" => 5,
                "size_code" => "M",
                "sku" => "hs 2459 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 79,
                "product_id" => 5,
                "size_code" => "L",
                "sku" => "hs 2459 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 80,
                "product_id" => 5,
                "size_code" => "XL",
                "sku" => "hs 2459 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 44,
                "product_id" => 6,
                "size_code" => "32",
                "sku" => "sjm 363 32",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 45,
                "product_id" => 6,
                "size_code" => "34",
                "sku" => "sjm 363 34",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 46,
                "product_id" => 7,
                "size_code" => "29",
                "sku" => "scs 68 29",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 47,
                "product_id" => 7,
                "size_code" => "30",
                "sku" => "scs 68 30",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 48,
                "product_id" => 7,
                "size_code" => "34",
                "sku" => "scs 68 34",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 49,
                "product_id" => 8,
                "size_code" => "29",
                "sku" => "scp 101 29",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 50,
                "product_id" => 8,
                "size_code" => "30",
                "sku" => "scp 101 30",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 51,
                "product_id" => 8,
                "size_code" => "32",
                "sku" => "scp 101 32",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 64,
                "product_id" => 9,
                "size_code" => "30",
                "sku" => "sjj o5 30",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 65,
                "product_id" => 9,
                "size_code" => "32",
                "sku" => "sjj 05 32",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 66,
                "product_id" => 9,
                "size_code" => "34",
                "sku" => "sjj 05 34",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 67,
                "product_id" => 10,
                "size_code" => "30",
                "sku" => "test 30",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 68,
                "product_id" => 10,
                "size_code" => "32",
                "sku" => "xxx",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 87,
                "product_id" => 11,
                "size_code" => "S",
                "sku" => "sw234 S",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 88,
                "product_id" => 11,
                "size_code" => "M",
                "sku" => "sw234 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 89,
                "product_id" => 11,
                "size_code" => "L",
                "sku" => "sw234 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 90,
                "product_id" => 11,
                "size_code" => "XL",
                "sku" => "sw234 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 91,
                "product_id" => 12,
                "size_code" => "S",
                "sku" => "sw239 s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 92,
                "product_id" => 12,
                "size_code" => "M",
                "sku" => "sw239 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 93,
                "product_id" => 12,
                "size_code" => "L",
                "sku" => "sw239 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 94,
                "product_id" => 12,
                "size_code" => "XL",
                "sku" => "sw239 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 7,
                "product_id" => 13,
                "size_code" => "M",
                "sku" => "js 755 M",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 8,
                "product_id" => 13,
                "size_code" => "L",
                "sku" => "js 755 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 9,
                "product_id" => 13,
                "size_code" => "XL",
                "sku" => "js 755 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 10,
                "product_id" => 14,
                "size_code" => "S",
                "sku" => "js 761 s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 11,
                "product_id" => 14,
                "size_code" => "M",
                "sku" => "js 761 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 12,
                "product_id" => 14,
                "size_code" => "L",
                "sku" => "js 761 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 13,
                "product_id" => 14,
                "size_code" => "XL",
                "sku" => "js 761 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 14,
                "product_id" => 15,
                "size_code" => "M",
                "sku" => "js 782 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 15,
                "product_id" => 15,
                "size_code" => "L",
                "sku" => "js 782 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 16,
                "product_id" => 15,
                "size_code" => "XL",
                "sku" => "js 782 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 17,
                "product_id" => 16,
                "size_code" => "S",
                "sku" => "js 765 s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 18,
                "product_id" => 16,
                "size_code" => "M",
                "sku" => "js 765 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 19,
                "product_id" => 16,
                "size_code" => "L",
                "sku" => "js 765 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 20,
                "product_id" => 16,
                "size_code" => "XL",
                "sku" => "js 765 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 41,
                "product_id" => 17,
                "size_code" => "S",
                "sku" => "js 728 s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 42,
                "product_id" => 17,
                "size_code" => "M",
                "sku" => "js 728 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 43,
                "product_id" => 17,
                "size_code" => "L",
                "sku" => "js 728 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 1,
                "product_id" => 18,
                "size_code" => "ALL SIZE",
                "sku" => "hts 405",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 2,
                "product_id" => 19,
                "size_code" => "ALL SIZE",
                "sku" => "hts 396",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 3,
                "product_id" => 20,
                "size_code" => "ALL SIZE",
                "sku" => "hts 394",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 4,
                "product_id" => 21,
                "size_code" => "ALL SIZE",
                "sku" => "hts 403",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 5,
                "product_id" => 22,
                "size_code" => "ALL SIZE",
                "sku" => "hts 390",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 6,
                "product_id" => 23,
                "size_code" => "ALL SIZE",
                "sku" => "bhs 23",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 69,
                "product_id" => 24,
                "size_code" => "ALL SIZE",
                "sku" => "wms 293",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 52,
                "product_id" => 25,
                "size_code" => "S",
                "sku" => "sds 252 s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 53,
                "product_id" => 25,
                "size_code" => "M",
                "sku" => "sds 252 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 54,
                "product_id" => 25,
                "size_code" => "L",
                "sku" => "sds 252 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 55,
                "product_id" => 25,
                "size_code" => "XL",
                "sku" => "sds 252 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 56,
                "product_id" => 26,
                "size_code" => "S",
                "sku" => "sds 250 s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 57,
                "product_id" => 26,
                "size_code" => "M",
                "sku" => "sds 250 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 58,
                "product_id" => 26,
                "size_code" => "L",
                "sku" => "sds 250 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 59,
                "product_id" => 26,
                "size_code" => "XL",
                "sku" => "sds 250 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 25,
                "product_id" => 27,
                "size_code" => "ALL SIZE",
                "sku" => "bps 321",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 26,
                "product_id" => 28,
                "size_code" => "ALL SIZE",
                "sku" => "bps 314",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 27,
                "product_id" => 29,
                "size_code" => "ALL SIZE",
                "sku" => "BPS 313",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 28,
                "product_id" => 30,
                "size_code" => "ALL SIZE",
                "sku" => "bps 310",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 37,
                "product_id" => 31,
                "size_code" => "ALL SIZE",
                "sku" => "sbs 24",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 95,
                "product_id" => 32,
                "size_code" => "ALL SIZE",
                "sku" => "sbs 28",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 21,
                "product_id" => 33,
                "size_code" => "S",
                "sku" => "camo basic s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 22,
                "product_id" => 33,
                "size_code" => "M",
                "sku" => "camo basic m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 23,
                "product_id" => 33,
                "size_code" => "L",
                "sku" => "camo basic l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 24,
                "product_id" => 33,
                "size_code" => "XL",
                "sku" => "Camo basic xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 60,
                "product_id" => 34,
                "size_code" => "ALL SIZE",
                "sku" => "hcs 03",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 61,
                "product_id" => 35,
                "size_code" => "ALL SIZE",
                "sku" => "hcs 01",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 62,
                "product_id" => 36,
                "size_code" => "ALL SIZE",
                "sku" => "ews 07",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 63,
                "product_id" => 37,
                "size_code" => "ALL SIZE",
                "sku" => "eps 02",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 29,
                "product_id" => 38,
                "size_code" => "S",
                "sku" => "Js 784 s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 30,
                "product_id" => 38,
                "size_code" => "M",
                "sku" => "js 784 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 31,
                "product_id" => 38,
                "size_code" => "L",
                "sku" => "js 784 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 32,
                "product_id" => 38,
                "size_code" => "XL",
                "sku" => "js 784 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 33,
                "product_id" => 39,
                "size_code" => "S",
                "sku" => "js 772 s",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 34,
                "product_id" => 39,
                "size_code" => "M",
                "sku" => "js 772 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 35,
                "product_id" => 39,
                "size_code" => "L",
                "sku" => "js 772 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 36,
                "product_id" => 39,
                "size_code" => "XL",
                "sku" => "js 772 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 38,
                "product_id" => 40,
                "size_code" => "M",
                "sku" => "js 743 m",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 39,
                "product_id" => 40,
                "size_code" => "L",
                "sku" => "js 743 l",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
            array(
                "id" => 40,
                "product_id" => 40,
                "size_code" => "XL",
                "sku" => "js 743 xl",
                "initial_balance" => 10,
                "quantity_on_hand" => 10,
            ),
        );
        
        foreach($product_variants as $variant) {
            \App\ProductVariant::create($variant);
        }
    }
}
