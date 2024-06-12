<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\OrderDetail;
use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Promotion;
use App\Models\Transaction;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        Category::create([
            "name"=>"Flu",
            "slug"=>"flu",
            "description"=>"Obat untuk penyakit flu"
        ]);
        Category::create([
            "name"=>"Kepala",
            "slug"=>"kepala",
            "description"=>"Obat untuk penyakit Kepala"
        ]);

        Product::create([
            "category_id"=>1,
            "name"=>"Obat Batuk",
            "patent"=>1,
            "slug"=>"obat-batuk",
            "stock"=>100,
            "price"=>10000,
            "description"=>"Obat batuk yang sangat ampuh"
        ]);
        Product::create([
            "category_id"=>1,
            "name"=>"Obat Pilek",
            "patent"=>0,
            "slug"=>"obat-pilek",
            "stock"=>100,
            "price"=>10000,
            "description"=>"Obat pilek yang sangat ampuh"
        ]);
        Product::create([
            "category_id"=>1,
            "name"=>"Obat Flu",
            "patent"=>1,
            "slug"=>"obat-flu",
            "stock"=>100,
            "price"=>10000,
            "description"=>"Obat flu yang sangat ampuh"
        ]);


        Promotion::create([
            'name' => 'Flash Sale - Up to 50% Off!',
            'slug' => 'flash-sale-50',
            'code' => '50FSOF',
            'discount' => 0.5,
            'terms' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat minus sint rem obcaecati culpa saepe expedita porro tempore facere, sequi sapiente mollitia incidunt, corrupti vero in inventore adipisci corporis voluptates sed et aliquam quam laboriosam recusandae! Aspernatur laborum, dolorem reprehenderit ipsum voluptatibus dolore, nemo officia minima distinctio sit accusamus quo blanditiis quod inventore exercitationem, sunt dolores sed beatae cumque. Hic architecto officiis provident ipsum sint necessitatibus iure ab nostrum iusto porro eveniet minus error possimus fugiat, laborum dignissimos vero at aliquam. Rem eveniet magnam suscipit sequi earum repellat perspiciatis eius saepe est sint deleniti, facere architecto ex sapiente tenetur quam!',
        ]);
        Promotion::create([
            'name' => 'Welcome Offer - 10% Off First Purchase',
            'slug' => 'welcome-offer-10',
            'code' => '10WOFP',
            'discount' => 0.1,
            'terms' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat minus sint rem obcaecati culpa saepe expedita porro tempore facere, sequi sapiente mollitia incidunt, corrupti vero in inventore adipisci corporis voluptates sed et aliquam quam laboriosam recusandae! Aspernatur laborum, dolorem reprehenderit ipsum voluptatibus dolore, nemo officia minima distinctio sit accusamus quo blanditiis quod inventore exercitationem, sunt dolores sed beatae cumque. Hic architecto officiis provident ipsum sint necessitatibus iure ab nostrum iusto porro eveniet minus error possimus fugiat, laborum dignissimos vero at aliquam. Rem eveniet magnam suscipit sequi earum repellat perspiciatis eius saepe est sint deleniti, facere architecto ex sapiente tenetur quam!',
        ]);
        Promotion::create([
            'name' => 'Buy One Get One (BOGO) Sale!',
            'slug' => 'buy-one-get-one',
            'code' => 'BOGO05',
            'discount' => 0.5,
            'terms' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat minus sint rem obcaecati culpa saepe expedita porro tempore facere, sequi sapiente mollitia incidunt, corrupti vero in inventore adipisci corporis voluptates sed et aliquam quam laboriosam recusandae! Aspernatur laborum, dolorem reprehenderit ipsum voluptatibus dolore, nemo officia minima distinctio sit accusamus quo blanditiis quod inventore exercitationem, sunt dolores sed beatae cumque. Hic architecto officiis provident ipsum sint necessitatibus iure ab nostrum iusto porro eveniet minus error possimus fugiat, laborum dignissimos vero at aliquam. Rem eveniet magnam suscipit sequi earum repellat perspiciatis eius saepe est sint deleniti, facere architecto ex sapiente tenetur quam!',
        ]);

        User::create([
            "name"=>"Gladys",
            "email"=>"gladys@ruslim.com",
            "password"=>"123asb",
            "phone"=>"0823333646687",
            "dob"=>"2005-12-14",
            "gender"=>"female",
            "address"=>"jl babakan madang blok b3 no.15, sentul selatan, kabupaten Bogor"
        ]);
        User::create([
            "name"=>"Shamgar",
            "email"=>"shamgar@eugene.com",
            "password"=>"123cde",
            "phone"=>"0895338676787",
            "dob"=>"2005-12-23",
            "gender"=>"male",
            "address"=>"jl tuanku imam bonjol blok B5 no.16, bekasi barat, kabupaten pejuang"
        ]);

        Transaction::create([
            "transaction_date" => '2024-04-01',
            'slug' => 'transaction#1',
            'user_id' => 2,
            'status' => 'In progress',
            'promo_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            "transaction_date" => '2023-02-09',
            'slug' => 'transaction#2',
            'user_id' => 1,
            'status' => 'In progress',
            'promo_id' => 2,
            'payment_method' => 'BRI',
        ]);
        Transaction::create([
            "transaction_date" => '2024-05-03',
            'slug' => 'transaction#3',
            'user_id' => 2,
            'status' => 'Waiting for verification',
            'promo_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            "transaction_date" => '2023-04-10',
            'slug' => 'transaction#4',
            'user_id' => 1,
            'status' => 'Waiting for verification',
            'promo_id' => 2,
            'payment_method' => 'BRI',
        ]);
        Transaction::create([
            "transaction_date" => '2024-05-08',
            'slug' => 'transaction#5',
            'user_id' => 2,
            'status' => 'Completed',
            'promo_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            "transaction_date" => '2024-10-03',
            'slug' => 'transaction#6',
            'user_id' => 1,
            'status' => 'Completed',
            'promo_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            "transaction_date" => '2024-06-03',
            'slug' => 'transaction#7',
            'user_id' => 2,
            'status' => 'Canceled',
            'promo_id' => 1,
            'payment_method' => 'BCA',
        ]);

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

        // Payment Dummy
        Transaction::create([
            "transaction_date" => '2024-07-03',
            'id' => 847820,
            'slug' => 'transaction#847820',
            'user_id' => 2,
            'status' => 'Waiting for payment',
            'promo_id' => 1,
            'payment_method' => 'BCA',
        ]);
        OrderDetail::create([
            "transaction_id" => 847820,
            "product_id" => 3,
            "quantity" => 5
        ]);
        OrderDetail::create([
            "transaction_id" => 847820,
            "product_id" => 2,
            "quantity" => 2
        ]);
        OrderDetail::create([
            "transaction_id" => 847820,
            "product_id" => 1,
            "quantity" => 2
        ]);
    } 
}
