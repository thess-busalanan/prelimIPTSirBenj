<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\Category;
use App\Models\MarkupHistory;
use Carbon\Carbon;

class SetCategoryMarkup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'markup:set-category {rate} {category}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $rate = floatval($this->argument('rate'));
        $categoryName = $this->argument('category');

        $category = Category::where('category_name', $categoryName)->first();

        if (!$category) {
            $this->error("Category '{$categoryName}' not found.");
            return;
        }

        if ($rate <= 0) {
            $this->error('Markup rate must be a positive number.');
            return;
        }


        
        $category->products->each(function ($product) use ($rate) {
            $product->retail_price = $product->purchase_price * (1 + $rate);
            $product->save();
        });

        MarkupHistory::create([
            'date' => Carbon::now(),
            'mark_up_rate' => $rate
        ]);

        $this->info("Retail prices updated for category '{$categoryName}' with a markup rate of {$rate}.");
    }
}
