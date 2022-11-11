<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $data = [
            [
                'product_name_nep' => 'gulab',
                'product_name_eng' => 'rose',
                'product_price' => 30.00,
                'product_category' => 3,
                'product_desc' => 'Gulab also known as Rose plant available for sale'
            ],
            [
                'product_name_nep' => 'Coffee',
                'product_name_eng' => 'rose',
                'product_price' => 30.00,
                'product_category' => 3,
                'product_desc' => 'Coffee available for sale'
            ],
            [
                'product_name_nep' => 'Kera',
                'product_name_eng' => 'Banana',
                'product_price' => 30.00,
                'product_category' => 1,
                'product_desc' => 'Banana plant available for sale'
            ],
        ];
        Product::insert($data);
    }
}
