<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'shop_id' => 1,
                'name' => 'Lean Beef',
                'price' => 8.99,
                'sale_price' => 4.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 1,
                'name' => '2% Plain Yogurt',
                'price' => 1.99,
                'sale_price' => 0.99,
                'unit' => '',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 2,
                'name' => 'Recycled Scotties Kleenex',
                'price' => 6.59,
                'sale_price' => 4.99,
                'unit' => '',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 3,
                'name' => 'Spring Onions',
                'price' => 0.79,
                'sale_price' => 0.25,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 3,
                'name' => 'Fresh Atlantic Salmon',
                'price' => 4.99,
                'sale_price' => 2.99,
                'unit' => 'per pound',
                'isChecked' => 1

            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 3,
                'name' => 'Fresh Strawberries',
                'price' => 1.99,
                'sale_price' => 0.99,
                'unit' => 'per pound',
                'isChecked' => 1
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 4,
                'name' => 'Large Canteloupes',
                'price' => 2.99,
                'sale_price' => 1.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 4,
                'name' => 'Baking Potatoes',
                'price' => 0.99,
                'sale_price' => 0.59,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 5,
                'name' => 'Zucchini',
                'price' => 1.49,
                'sale_price' => 0.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 5,
                'name' => 'Minneola Oranges',
                'price' => 1.69,
                'sale_price' => 0.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 5,
                'name' => 'Squash',
                'price' => 0.99,
                'sale_price' => 0.49,
                'unit' => 'per pound',
            ]
        ]);

    }
}
