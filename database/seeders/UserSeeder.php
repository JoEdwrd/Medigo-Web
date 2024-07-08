<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            "name" => "Gladys",
            "email" => "gladys@ruslim.com",
            "password" => "123asb",
            "phone" => "0823333646687",
            "dob" => "2005-12-14",
            "gender" => "female",
            "address" => "jl babakan madang blok b3 no.15, sentul selatan, kabupaten Bogor"
        ]);
        User::create([
            "name" => "Shamgar",
            "email" => "shamgar@eugene.com",
            "password" => "123cde",
            "phone" => "0895338676787",
            "dob" => "2005-12-23",
            "gender" => "male",
            "address" => "jl tuanku imam bonjol blok B5 no.16, bekasi barat, kabupaten pejuang"
        ]);
    }
}
