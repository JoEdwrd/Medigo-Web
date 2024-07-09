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
            'already_paid' => "2024-07-09 07:22:03",
            'on_the_way' => "2024-07-09 08:18:20",
            'completed' => "2024-07-09 09:45:01"
        ]);
    }
}
