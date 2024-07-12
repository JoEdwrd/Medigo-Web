<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\OrderDetail;
class OrderDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         OrderDetail::create([
            "transaction_id" => 1,
            "product_id" => 1,
            "quantity" => 12
        ]);
        OrderDetail::create([
            "transaction_id" => 2,
            "product_id" => 3,
            "quantity" => 2
        ]);
        OrderDetail::create([
            "transaction_id" => 3,
            "product_id" => 2,
            "quantity" => 10
        ]);
        OrderDetail::create([
            "transaction_id" => 4,
            "product_id" => 1,
            "quantity" => 12
        ]);
        OrderDetail::create([
            "transaction_id" => 5,
            "product_id" => 3,
            "quantity" => 2
        ]);
        OrderDetail::create([
            "transaction_id" => 6,
            "product_id" => 2,
            "quantity" => 10
        ]);
        OrderDetail::create([
            "transaction_id" => 7,
            "product_id" => 2,
            "quantity" => 10
        ]);
        OrderDetail::create([
            "transaction_id" => 847821,
            "product_id" => 3,
            "quantity" => 5
        ]);
        OrderDetail::create([
            "transaction_id" => 847821,
            "product_id" => 2,
            "quantity" => 2
        ]);
        OrderDetail::create([
            "transaction_id" => 847821,
            "product_id" => 1,
            "quantity" => 2
        ]);

        // Payment Dummy -Shamgar
        OrderDetail::create([
            "transaction_id" => 99999,
            "product_id" => 1,
            "quantity" => 2
        ]);
        OrderDetail::create([
            "transaction_id" => 99999,
            "product_id" => 3,
            "quantity" => 5
        ]);

    }
}
