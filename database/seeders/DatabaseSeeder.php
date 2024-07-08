<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Cart;
use App\Models\CartDetail;
use App\Models\Category;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Prescription;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            CategorySeeder::class,
            ProductSeeder::class,
            UserSeeder::class,
            PromotionSeeder::class,
            CartSeeder::class,
            CartDetailSeeder::class,
            TransactionSeeder::class,
            OrderDetailSeeder::class,
            PrescriptionSeeder::class
        ]);

        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        

        // Product::create([
        //     "category_id" => 1,
        //     "name" => "Obat Batuk",
        //     "patent" => 1,
        //     "slug" => "obat-batuk",
        //     "stock" => 100,
        //     "price" => 10000,
        //     "shortdesc" => "Per Botol",
        //     "description" => "Obat batuk yang sangat ampuh"
        // ]);
        // Product::create([
        //     "category_id" => 1,
        //     "name" => "Obat Pilek",
        //     "patent" => 0,
        //     "slug" => "obat-pilek",
        //     "stock" => 100,
        //     "price" => 10000,
        //     "shortdesc" => "Per Strip",
        //     "description" => "Obat pilek yang sangat ampuh"
        // ]);
        // Product::create([
        //     "category_id" => 1,
        //     "name" => "Obat Flu",
        //     "patent" => 1,
        //     "slug" => "obat-flu",
        //     "stock" => 100,
        //     "price" => 10000,
        //     "shortdesc" => "Per Strip",
        //     "description" => "Obat flu yang sangat ampuh"
        // ]);


        

        

        

       

        // Payment Dummy
       
        
        
    }
}
