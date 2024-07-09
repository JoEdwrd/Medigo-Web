<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
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
            "name" => "Pain Releiver",
            "slug" => "pain-releiver",
            "description" => "Medicine for Pain Releiver"
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

    }
}
