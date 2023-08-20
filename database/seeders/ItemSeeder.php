<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $item = new Item();
        $item->product_name = 'สีทาบ้าน';
        $item->budget_id = 1;    
        $item->quantity = 5;
        $item->price_per_one = 300;
        $item->save();

        $item = new Item();
        $item->product_name = 'Rice';
        $item->budget_id = 1;    
        $item->quantity = 10;
        $item->price_per_one = 500;
        $item->save();

        $item = new Item();
        $item->product_name = 'Water';
        $item->budget_id = 1;    
        $item->quantity = 200;
        $item->price_per_one = 5;
        $item->save();
    }
}
