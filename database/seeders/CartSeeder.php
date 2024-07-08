<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cart;
class CartSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cart::create([
            'id' => 1,
            'user_id' => 1,
            'promotion_id' => 2
        ]);
        Cart::create([
            'id' => 2,
            'user_id' => 2,
            'promotion_id' => 1
        ]);
       
    }
}
