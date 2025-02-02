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
            ['category_name' => 'Canned goods', 'description' => 'Food in cans'],
            ['category_name' => 'Beverages', 'description' => 'Soft drinks and juices'],
            ['category_name' => 'Snacks', 'description' => 'Chips and biscuits']
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
