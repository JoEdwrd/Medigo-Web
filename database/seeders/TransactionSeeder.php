<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Transaction;
class TransactionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Transaction::create([
            // "transaction_date" => '2024-04-01',
            'slug' => 'transac2023',
            'user_id' => 2,
            'status' => 'In progress',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            // "transaction_date" => '2023-02-09',
            'slug' => 'transac2024',
            'user_id' => 1,
            'status' => 'In progress',
            'promotion_id' => 2,
            'payment_method' => 'BRI',
        ]);
        Transaction::create([
            // "transaction_date" => '2024-05-03',
            'slug' => 'transaction#3',
            'user_id' => 2,
            'status' => 'Waiting for verification',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            // "transaction_date" => '2023-04-10',
            'slug' => 'transaction#4',
            'user_id' => 1,
            'status' => 'Waiting for verification',
            'promotion_id' => 2,
            'payment_method' => 'BRI',
        ]);
        Transaction::create([
            // "transaction_date" => '2024-05-08',
            'slug' => 'transaction#5',
            'user_id' => 2,
            'status' => 'Completed',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            // "transaction_date" => '2024-10-03',
            'slug' => 'transaction#6',
            'user_id' => 1,
            'status' => 'Completed',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            // "transaction_date" => '2024-06-03',
            'slug' => 'transaction#7',
            'user_id' => 2,
            'status' => 'Canceled',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);
         Transaction::create([
            // "transaction_date" => '2024-07-03',
            'id' => 847821,
            'slug' => 'transaction#847821',
            'user_id' => 2,
            'status' => 'Waiting for payment',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);

        // Payment Dummy -Shamgar
         Transaction::create([
            'id' => 99999,
            'slug' => 'transaction#99999',
            'user_id' => 1,
            'status' => 'Waiting for payment',
            'promotion_id' => 2,
            'payment_method' => 'BCA',
        ]);
    }
}
