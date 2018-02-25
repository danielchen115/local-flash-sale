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
        DB::table('products')->insert([
            [
                'shop_id' => 1,
                'name' => 'Lean Beef',
                'price' => 8.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 1,
                'name' => 'Sweet Potatoes',
                'price' => 1.29,
                'unit' => 'per pound',
            ]
        ]);

        DB::table('products')->insert([
            [
                'shop_id' => 2,
                'name' => 'Chicken Breast',
                'price' => 3.39,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 2,
                'name' => 'Recycled Scotties Kleenex',
                'price' => 2.99,
                'unit' => '',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 3,
                'name' => 'Spring Onions',
                'price' => 0.29,
                'unit' => 'per pound',
            ]
        ]);

        DB::table('products')->insert([
            [
                'shop_id' => 3,
                'name' => 'Fresh Strawberries',
                'price' => 0.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 4,
                'name' => 'Large Canteloupes',
                'price' => 1.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 4,
                'name' => 'Ataulfo Mangoes',
                'price' => 0.89,
                'unit' => 'per pound',
            ]
        ]);


        DB::table('products')->insert([
            [
                'shop_id' => 5,
                'name' => 'Minneola Oranges',
                'price' => 1.29,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'shop_id' => 5,
                'name' => 'Squash',
                'price' => 0.59,
                'unit' => 'per pound',
            ]
        ]);
    }
}
