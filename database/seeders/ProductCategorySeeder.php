<?php

namespace Database\Seeders;

use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductCategorySeeder extends Seeder
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
                'category_name' => 'fruit'
            ],
            [
                'category_name' => 'vegetable'
            ],
            [
                'category_name' => 'flower'
            ],
            [
                'category_name' => 'indoor'
            ]
        ];
        ProductCategory::insert($data);
    }
}
