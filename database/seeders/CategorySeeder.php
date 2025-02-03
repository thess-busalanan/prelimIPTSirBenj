<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['category_name' => 'Canned Goods', 'description' => 'Various canned food items'],
            ['category_name' => 'Dairy Products', 'description' => 'Milk, cheese, and other dairy products'],
            ['category_name' => 'Noodles', 'description' => 'Different types of noodles and pasta'],
            ['category_name' => 'Frozen Foods', 'description' => 'Frozen meals and ingredients'],
            ['category_name' => 'Beverages', 'description' => 'Drinks including sodas, juices, and water'],
            ['category_name' => 'Liquor', 'description' => 'Alcoholic beverages'],
            ['category_name' => 'Snacks', 'description' => 'Chips, cookies, and other snack items'],
            ['category_name' => 'Cleaning Products', 'description' => 'Household cleaning supplies'],
            ['category_name' => 'School and Office Supplies', 'description' => 'Stationery and office essentials'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
