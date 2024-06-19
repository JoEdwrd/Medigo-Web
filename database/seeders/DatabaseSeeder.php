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
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
        // Headache
        Category::create([
            "name" => "Headache",
            "slug" => "headache",
            "description" => "Medicine for Headache"
        ]);

        // Vitamin
        Category::create([
            "name" => "Vitamin",
            "slug" => "vitamin",
            "description" => "Medicine for Vitamin"
        ]);

        // Ingestion
        Category::create([
            "name" => "Ingestion",
            "slug" => "ingestion",
            "description" => "Medicine for Ingestion"
        ]);

        // Allergy
        Category::create([
            "name" => "Allergy",
            "slug" => "allergy",
            "description" => "Medicine for Allergy"
        ]);

        // Neck Pain
        Category::create([
            "name" => "Neck Pain",
            "slug" => "neck-pain",
            "description" => "Medicine for Neck Pain"
        ]);

        // Liver
        Category::create([
            "name" => "Liver",
            "slug" => "liver",
            "description" => "Medicine for Liver"
        ]);

        // Hearing
        Category::create([
            "name" => "Hearing",
            "slug" => "hearing",
            "description" => "Medicine for Hearing"
        ]);

        // Dental
        Category::create([
            "name" => "Dental",
            "slug" => "dental",
            "description" => "Medicine for Dental"
        ]);

        // Flu
        Category::create([
            "name" => "Flu",
            "slug" => "flu",
            "description" => "Medicine for Flu"
        ]);

        // Eyesight
        Category::create([
            "name" => "Eyesight",
            "slug" => "eyesight",
            "description" => "Medicine for Eyesight"
        ]);


        Product::create([
            "category_id"=>1,
            "name"=>"Obat Batuk",
            "patent"=>1,
            "slug"=>"obat-batuk",
            "stock"=>100,
            "price"=>10000,
            "shortdesc" => "Per Botol",
            "description"=>"Obat batuk yang sangat ampuh"
        ]);
        Product::create([
            "category_id"=>1,
            "name"=>"Obat Pilek",
            "patent"=>0,
            "slug"=>"obat-pilek",
            "stock"=>100,
            "price"=>10000,
            "shortdesc"=>"Per Strip",
            "description"=>"Obat pilek yang sangat ampuh"
        ]);
        Product::create([
            "category_id"=>1,
            "name"=>"Obat Flu",
            "patent"=>1,
            "slug"=>"obat-flu",
            "stock"=>100,
            "price"=>10000,
            "shortdesc" => "Per Strip",
            "description"=>"Obat flu yang sangat ampuh"
        ]);


        Promotion::create([
            'name' => 'Flash Sale - Up to 50% Off!',
            'slug' => 'flash-sale-50',
            'code' => '50FSOF',
            'shortdecs'=>'Up to 10 users only',
            'startdate'=>'2024-11-27',
            'enddate'=>'2024-11-30',
            'discount' => 0.5,
            'terms' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat minus sint rem obcaecati culpa saepe expedita porro tempore facere, sequi sapiente mollitia incidunt, corrupti vero in inventore adipisci corporis voluptates sed et aliquam quam laboriosam recusandae! Aspernatur laborum, dolorem reprehenderit ipsum voluptatibus dolore, nemo officia minima distinctio sit accusamus quo blanditiis quod inventore exercitationem, sunt dolores sed beatae cumque. Hic architecto officiis provident ipsum sint necessitatibus iure ab nostrum iusto porro eveniet minus error possimus fugiat, laborum dignissimos vero at aliquam. Rem eveniet magnam suscipit sequi earum repellat perspiciatis eius saepe est sint deleniti, facere architecto ex sapiente tenetur quam!',
        ]);
        Promotion::create([
            'name' => 'Welcome Offer - 10% Off First Purchase',
            'slug' => 'welcome-offer-10',
            'code' => '10WOFP',
            'shortdecs' => 'Only for new User',
            'startdate' => '2024-12-15',
            'enddate' => '2024-12-30',
            'discount' => 0.1,
            'terms' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat minus sint rem obcaecati culpa saepe expedita porro tempore facere, sequi sapiente mollitia incidunt, corrupti vero in inventore adipisci corporis voluptates sed et aliquam quam laboriosam recusandae! Aspernatur laborum, dolorem reprehenderit ipsum voluptatibus dolore, nemo officia minima distinctio sit accusamus quo blanditiis quod inventore exercitationem, sunt dolores sed beatae cumque. Hic architecto officiis provident ipsum sint necessitatibus iure ab nostrum iusto porro eveniet minus error possimus fugiat, laborum dignissimos vero at aliquam. Rem eveniet magnam suscipit sequi earum repellat perspiciatis eius saepe est sint deleniti, facere architecto ex sapiente tenetur quam!',
        ]);
        Promotion::create([
            'name' => 'Buy One Get One (BOGO) Sale!',
            'slug' => 'buy-one-get-one',
            'code' => 'BOGO05',
            'shortdecs' => 'Only for Jabodetabek user',
            'startdate' => '2024-10-26',
            'enddate' => '2024-11-26',
            'discount' => 0.5,
            'terms' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat minus sint rem obcaecati culpa saepe expedita porro tempore facere, sequi sapiente mollitia incidunt, corrupti vero in inventore adipisci corporis voluptates sed et aliquam quam laboriosam recusandae! Aspernatur laborum, dolorem reprehenderit ipsum voluptatibus dolore, nemo officia minima distinctio sit accusamus quo blanditiis quod inventore exercitationem, sunt dolores sed beatae cumque. Hic architecto officiis provident ipsum sint necessitatibus iure ab nostrum iusto porro eveniet minus error possimus fugiat, laborum dignissimos vero at aliquam. Rem eveniet magnam suscipit sequi earum repellat perspiciatis eius saepe est sint deleniti, facere architecto ex sapiente tenetur quam!',
        ]);
        Promotion::create([
            'name' => 'Summer Clearance Sale - Up to 70% Off!',
            'slug' => 'summer-clearance-sale',
            'code' => 'SUMMER70',
            'shortdecs' => 'Limited time offer!',
            'startdate' => '2024-07-01',
            'enddate' => '2024-07-15',
            'discount' => 0.7,
            'terms' => 'Hurry up and grab your favorite summer items at unbeatable prices! This offer is valid only until July 15th. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed ut quam ut enim aliquet tempus. Aliquam nec justo a metus fringilla luctus. Vivamus ac neque odio. Nullam pulvinar metus non eros faucibus laoreet. Proin sed nunc eu enim finibus feugiat. Donec id bibendum mauris, sit amet elementum urna. Nulla ut lectus auctor, hendrerit magna non, pellentesque elit. Integer non vehicula lacus. Morbi eu tortor vel turpis tincidunt condimentum. Nulla facilisi. Sed consectetur tempus sem a mattis. Fusce sit amet purus felis. Curabitur euismod justo et nibh fermentum, a finibus nisi placerat.',
        ]);

        // Promotion 2
        Promotion::create([
            'name' => 'Back-to-School Special - Buy One Get One Free!',
            'slug' => 'back-to-school-bogo',
            'code' => 'BTSBOGO',
            'shortdecs' => 'Limited time offer for students!',
            'startdate' => '2024-08-15',
            'enddate' => '2024-09-15',
            'discount' => 0.5, // Representing Buy One Get One Free as 50% discount
            'terms' => 'Gear up for the new school year with our special Buy One Get One Free offer! Simply use code BTSBOGO at checkout to avail of this deal. Offer valid from August 15th to September 15th, 2024. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla vitae consequat lorem. Cras quis vestibulum neque. Phasellus in dui ut orci fringilla euismod. Nullam quis ultrices elit. Fusce consectetur, sapien nec congue eleifend, nisl magna congue turpis, nec auctor nisi risus a libero. In laoreet magna ac dolor scelerisque vehicula. Aliquam non fermentum ligula, ut malesuada purus. Vestibulum dictum nec quam id vulputate. Morbi malesuada erat in metus varius feugiat.',
        ]);

        // Promotion 3
        Promotion::create([
            'name' => 'Winter Warm-up Sale - 25% Off Jackets!',
            'slug' => 'winter-warmup-jackets',
            'code' => 'WINTER25',
            'shortdecs' => 'Stay cozy and save!',
            'startdate' => '2024-11-01',
            'enddate' => '2024-11-30',
            'discount' => 0.25, // 25% off
            'terms' => 'Get ready for the cold weather with our Winter Warm-up Sale! Enjoy a 25% discount on all jackets throughout November. Use code WINTER25 at checkout. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed dignissim feugiat tortor, ut facilisis mi ultricies non. Nullam vehicula, orci vel tincidunt malesuada, risus libero fermentum nulla, sit amet sodales felis est non magna. Donec euismod libero vel tortor dictum, a tempus nisi tincidunt. Phasellus malesuada, sapien eget tincidunt commodo, felis odio accumsan ante, ut ullamcorper sem nisi nec mauris. Sed vitae orci non elit suscipit pharetra. Phasellus at mauris et elit efficitur venenatis. Vivamus vel nulla non metus faucibus tempus. Morbi et lorem in velit mollis interdum. Cras ac elit mauris.',
        ]);

        // Promotion 4
        Promotion::create([
            'name' => 'Holiday Gift Bonanza - 20% Off Everything!',
            'slug' => 'holiday-gift-bonanza',
            'code' => 'HOLIDAY20',
            'shortdecs' => 'Spread joy and savings this holiday season!',
            'startdate' => '2024-12-10',
            'enddate' => '2024-12-25',
            'discount' => 0.2, // 20% off
            'terms' => 'Make your holiday shopping merrier with our Holiday Gift Bonanza! Enjoy a 20% discount on all products from December 10th to December 25th. Use code HOLIDAY20 at checkout. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean bibendum, dui nec tincidunt blandit, ex mauris pulvinar velit, nec fermentum lorem justo et nisi. Cras volutpat diam id sapien dapibus, nec posuere leo lacinia. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur pretium mauris velit, eu feugiat nulla lobortis non. Nam nec orci ut sapien efficitur mattis id ac justo. Ut gravida convallis diam, vel tincidunt velit dictum ac. Integer vel velit leo. Suspendisse potenti.',
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
            'slug' => 'transac2023',
            'user_id' => 2,
            'status' => 'In progress',
            'promo_id' => 1,
            'payment_method' => 'BCA',
        ]);
        Transaction::create([
            "transaction_date" => '2023-02-09',
            'slug' => 'transac2024',
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
        Cart::create([
            'id'=>1,
            'user_id'=>1,
            'promotion_id'=>2
        ]);
        Cart::create([
            'id'=>2,
            'user_id'=>2,
            'promotion_id'=>1
        ]);
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
