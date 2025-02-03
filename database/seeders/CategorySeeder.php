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
            ['category_name' => 'Canned goods', 'description' => 'Various canned food items'],
            ['category_name' => 'Dairy products', 'description' => 'Milk, cheese, and other dairy products'],
            ['category_name' => 'Noodles', 'description' => 'Different types of noodles and pasta'],
            ['category_name' => 'Frozen foods', 'description' => 'Frozen meals and ingredients'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
