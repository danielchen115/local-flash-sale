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
                'name' => 'Lean Beef',
                'price' => 8.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'name' => 'Sweet Potatoes',
                'price' => 2.59,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'name' => '2% Plain Yogurt',
                'price' => 1.99,
                'unit' => '',
            ]
        ]);
        DB::table('products')->insert([
            [
                'name' => 'Chicken Breast',
                'price' => 7.69,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'name' => 'Yukon Gold Potatoes',
                'price' => 3.49,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('products')->insert([
            [
                'name' => 'Recycled Scotties Kleenex',
                'price' => 6.59,
                'unit' => '',
            ]
        ]);
        DB::table('products')->insert([
            [
                'name' => 'Spring Onions',
                'price' => 0.79,
                'unit' => 'per pound',
            ]
        ]);
    }
}
