<?php

namespace Modules\ProductManagement\Seeders;

use Illuminate\Database\Seeder;
use Modules\ProductCategory\ProductCategory;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     * based on data snapshot 2018-02-12 19:00
     * @return void
     */
    public function run()
    {
        $product_categories = array(
            array(
                "name" => "Men",
                "image" => "images/product-categories/XMqdc45Yiu70RRh4rOGguCHWnWo2xoJ4l7bJw3zW.jpeg",
                "parent_id" => NULL,
            ),
            array(
                "name" => "Women",
                "image" => "images/product-categories/Xc7kwgwGG12Rr30QBHfDeDci6y7JjaZRGLqsMOSv.jpeg",
                "parent_id" => NULL,
            ),
            array(
                "name" => "Kids",
                "image" => "images/product-categories/m3hABaVz1HhN5M5N7oLtXAOicdOflutcz4C6aeV5.jpeg",
                "parent_id" => NULL,
            ),
            array(
                "name" => "Accessories",
                "image" => "images/product-categories/amzOMggu9IFfu5yIFs5h9UTN1iScknwWcfyCSBbU.jpeg",
                "parent_id" => NULL,
            ),
            array(
                "name" => "Tees",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Shirt",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Pants",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Sweater",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Jacket",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Hat",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Wallet",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Sandals",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Bag",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Watch",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Hoodies",
                "image" => NULL,
                "parent_id" => 1,
            ),
            array(
                "name" => "Tees",
                "image" => NULL,
                "parent_id" => 2,
            ),
            array(
                "name" => "Purse",
                "image" => NULL,
                "parent_id" => 2,
            ),
            array(
                "name" => "Bag",
                "image" => NULL,
                "parent_id" => 2,
            ),
            array(
                "name" => "Sandals",
                "image" => NULL,
                "parent_id" => 2,
            ),
            array(
                "name" => "Watch",
                "image" => NULL,
                "parent_id" => 2,
            ),
            array(
                "name" => "Tees",
                "image" => NULL,
                "parent_id" => 3,
            ),
            array(
                "name" => "Hardcase",
                "image" => NULL,
                "parent_id" => 4,
            ),
            array(
                "name" => "Eyewear",
                "image" => NULL,
                "parent_id" => 4,
            ),
            array(
                "name" => "Earphones",
                "image" => NULL,
                "parent_id" => 4,
            ),
        );
        
        foreach($product_categories as $product_category) {
            ProductCategory::create($product_category);
        }
        
    }
}
