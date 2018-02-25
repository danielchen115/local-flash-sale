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
                'product_name' => 'Lean Beef',
                'sale_price' => '4.99',
                'unit' => 'per pound',
            ]
        ]);
        DB::table('sales')->insert([
            [
                'product_name' => 'Sweet Potato',
                'sale_price' => '0.99',
                'unit' => 'per pound',
            ]
        ]);
        DB::table('sales')->insert([
            [
                'product_name' => '2% Plain Yogurt',
                'sale_price' => '0.99',
                'unit' => '',
            ]
        ]);
    }
}
