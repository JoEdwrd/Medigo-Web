<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\CartDetail;
class CartDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         CartDetail::create([
            'cart_id' => 1,
            'product_id' => 1,
            'quantity' => 20
        ]);
        CartDetail::create([
            'cart_id' => 1,
            'product_id' => 2,
            'quantity' => 34
        ]);
        CartDetail::create([
            'cart_id' => 2,
            'product_id' => 1,
            'quantity' => 13
        ]);
    }
}
