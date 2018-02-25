<?php

use Illuminate\Database\Seeder;

class SalesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */

    public function run()
    {
        DB::table('sales')->insert([
            [
                'product_id' => 1,
                'product_name' => 'Lean Beef',
                'sale_price' => 5.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('sales')->insert([
            [
                'product_id' => 2,
                'product_name' => 'Sweet Potatoes',
                'sale_price' => 1.29,
                'unit' => 'per pound',
            ]
        ]);

        DB::table('sales')->insert([
            [
                'product_id' => 3,
                'product_name' => 'Chicken Breast',
                'sale_price' => 3.39,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('sales')->insert([
            [
                'product_id' => 4,
                'product_name' => 'Recycled Scotties Kleenex',
                'sale_price' => 2.99,
                'unit' => '',
            ]
        ]);
        DB::table('sales')->insert([
            [
                'product_id' => 5,
                'product_name' => 'Spring Onions',
                'sale_price' => 0.29,
                'unit' => 'per pound',
            ]
        ]);

        DB::table('sales')->insert([
            [
                'product_id' => 6,
                'product_name' => 'Fresh Strawberries',
                'sale_price' => 0.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('sales')->insert([
            [
                'product_id' => 7,
                'product_name' => 'Large Canteloupes',
                'sale_price' => 1.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('sales')->insert([
            [
                'product_id' => 8,
                'product_name' => 'Ataulfo Mangoes',
                'sale_price' => 0.89,
                'unit' => 'per pound',
            ]
        ]);


        DB::table('sales')->insert([
            [
                'product_id' => 9,
                'product_name' => 'Minneola Oranges',
                'sale_price' => 1.29,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('sales')->insert([
            [
                'product_id' => 10,
                'product_name' => 'Squash',
                'sale_price' => 0.59,
                'unit' => 'per pound',
            ]
        ]);
    }
}
