<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Product;
use App\Models\MarkupHistory;
use Carbon\Carbon;

class SetMarkup extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'markup:set {rate}';

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

        if ($rate <= 0) {
            $this->error('Markup rate must be a positive number.');
            return;
        }

        Product::all()->each(function ($product) use ($rate) {
            $product->retail_price = $product->purchase_price * (1 + $rate);
            $product->save();
        });


        
        MarkupHistory::create([
            'date' => Carbon::now(),
            'mark_up_rate' => $rate
        ]);

        $this->info("Retail prices updated successfully with a markup rate of {$rate}.");
    }
}
