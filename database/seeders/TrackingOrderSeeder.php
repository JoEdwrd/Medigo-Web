<?php

namespace Database\Seeders;

use App\Models\TrackingOrder;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrackingOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        TrackingOrder::create([
            "transaction_id" => 847821,
            'waiting_for_verification'=> "2024-07-09 05:37:01",
            'waiting_for_payment' => "2024-07-09 06:54:07",
            'in_progress' => "2024-07-09 07:22:03",
            'completed' => "2024-07-09 09:45:01"
        ]);

        TrackingOrder::create([
            "transaction_id" => 1
        ]);

        TrackingOrder::create([
            "transaction_id" => 2
        ]);

        TrackingOrder::create([
            "transaction_id" => 3
        ]);

        TrackingOrder::create([
            "transaction_id" => 4
        ]);

        TrackingOrder::create([
            "transaction_id" => 5
        ]);


        TrackingOrder::create([
            "transaction_id" => 6
        ]);

        TrackingOrder::create([
            "transaction_id" => 7
        ]);
    }
}
