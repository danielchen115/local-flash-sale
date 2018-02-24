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
                'product_id' => '1',
                'sale_price' => 4.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('sales')->insert([
            [
                'product_id' => '2',
                'sale_price' => 0.99,
                'unit' => 'per pound',
            ]
        ]);
        DB::table('sales')->insert([
            [
                'product_id' => '3',
                'sale_price' => 0.99,
                'unit' => '',
            ]
        ]);
    }
}
