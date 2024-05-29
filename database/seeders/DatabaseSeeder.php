<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use Illuminate\Database\Seeder;
use App\Models\Product;
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
        Product::create([
            "category_id"=>1,
            "name"=>"Obat Batuk",
            "patent"=>"abcdef",
            "slug"=>"obat-batuk",
            "stock"=>100,
            "price"=>10000,
            "description"=>"Obat batuk yang sangat ampuh"
        ]);
        Product::create([
            "category_id"=>1,
            "name"=>"Obat Pilek",
            "patent"=>"ajajajajsi",
            "slug"=>"obat-pilek",
            "stock"=>100,
            "price"=>10000,
            "description"=>"Obat pilek yang sangat ampuh"
        ]);
        Product::create([
            "category_id"=>1,
            "name"=>"Obat Flu",
            "patent"=>"akaysgas",
            "slug"=>"obat-flu",
            "stock"=>100,
            "price"=>10000,
            "description"=>"Obat flu yang sangat ampuh"
        ]);
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
    }
}
