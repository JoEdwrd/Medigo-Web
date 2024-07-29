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
            'slug' => 'transaction1',
            'user_id' => 2,
            'status' => 'In progress',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            // "transaction_date" => '2023-02-09',
            'slug' => 'transaction2',
            'user_id' => 1,
            'status' => 'In progress',
            'promotion_id' => 2,
            'payment_method' => 'BRI',
        ]);
        Transaction::create([
            // "transaction_date" => '2024-05-03',
            'slug' => 'transaction3',
            'user_id' => 2,
            'status' => 'Waiting for verification',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            // "transaction_date" => '2023-04-10',
            'slug' => 'transaction4',
            'user_id' => 1,
            'status' => 'Waiting for verification',
            'promotion_id' => 2,
            'payment_method' => 'BRI',
        ]);
        Transaction::create([
            // "transaction_date" => '2024-05-08',
            'slug' => 'transaction5',
            'user_id' => 2,
            'status' => 'Completed',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            // "transaction_date" => '2024-10-03',
            'slug' => 'transaction6',
            'user_id' => 1,
            'status' => 'Completed',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            // "transaction_date" => '2024-06-03',
            'slug' => 'transaction7',
            'user_id' => 2,
            'status' => 'Canceled',
            'promotion_id' => 1,
            'payment_method' => 'BCA',
        ]);
        
    }
}
