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
        Product::insert([
            'product_name_nep' => 'Sayapatri',
            'product_name_eng' => 'Marigold',
            'product_price' => 30.00,
            'product_category' => 1,
            'product_desc' => 'Sayapatri also knownn as marigold, available for sale',
            'product_img' => ''
        ]);
    }
}
