<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Promotion;
class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Promotion::create([
    'name' => 'Flash Sale - Up to 50% Off!',
    'slug' => 'flash-sale-50',
    'code' => '50FSOF',
    'shortdecs' => 'Up to 10 users only',
    'startdate' => '2024-11-27',
    'enddate' => '2024-11-30',
    'discount' => 0.5,
    'terms' => 'Nikmati diskon besar hingga 50% hanya untuk 10 pengguna pertama! Segera manfaatkan kesempatan ini untuk mendapatkan produk favorit Anda dengan harga spesial. Penawaran ini berlaku mulai dari 27 November hingga 30 November 2024. Jangan sampai ketinggalan!',
]);

Promotion::create([
    'name' => 'Welcome Offer - 10% Off First Purchase',
    'slug' => 'welcome-offer-10',
    'code' => '10WOFP',
    'shortdecs' => 'Only for new User',
    'startdate' => '2024-12-15',
    'enddate' => '2024-12-30',
    'discount' => 0.1,
    'terms' => 'Selamat datang! Dapatkan diskon 10% untuk pembelian pertama Anda dengan kode promo 10WOFP. Penawaran ini hanya berlaku untuk pengguna baru dari tanggal 15 Desember hingga 30 Desember 2024. Mulailah pengalaman belanja Anda dengan hemat!',
]);

Promotion::create([
    'name' => 'Buy One Get One (BOGO) Sale!',
    'slug' => 'buy-one-get-one',
    'code' => 'BOGO05',
    'shortdecs' => 'Only for Jabodetabek user',
    'startdate' => '2024-10-26',
    'enddate' => '2024-11-26',
    'discount' => 0.5,
    'terms' => 'Dapatkan penawaran spesial Buy One Get One Free untuk pengguna di area Jabodetabek! Gunakan kode promo BOGO05 untuk menikmati penawaran ini dari 26 Oktober hingga 26 November 2024. Beli satu produk dan dapatkan satu lagi secara gratis!',
]);

Promotion::create([
    'name' => 'Summer Clearance Sale - Up to 70% Off!',
    'slug' => 'summer-clearance-sale',
    'code' => 'SUMMER70',
    'shortdecs' => 'Limited time offer!',
    'startdate' => '2024-07-01',
    'enddate' => '2024-07-15',
    'discount' => 0.7,
    'terms' => 'Jangan lewatkan kesempatan untuk mendapatkan diskon besar hingga 70% di Summer Clearance Sale kami! Penawaran ini hanya berlaku dari 1 Juli hingga 15 Juli 2024. Segera dapatkan produk musim panas favorit Anda dengan harga terbaik!',
]);

Promotion::create([
    'name' => 'Back-to-School Special - Buy One Get One Free!',
    'slug' => 'back-to-school-bogo',
    'code' => 'BTSBOGO',
    'shortdecs' => 'Limited time offer for students!',
    'startdate' => '2024-08-15',
    'enddate' => '2024-09-15',
    'discount' => 0.5,
    'terms' => 'Persiapkan diri Anda untuk tahun ajaran baru dengan penawaran spesial Buy One Get One Free! Gunakan kode promo BTSBOGO untuk mendapatkan diskon ini dari 15 Agustus hingga 15 September 2024. Penawaran ini khusus untuk siswa, jadi jangan sampai ketinggalan!',
]);

Promotion::create([
    'name' => 'Winter Warm-up Sale - 25% Off Jackets!',
    'slug' => 'winter-warmup-jackets',
    'code' => 'WINTER25',
    'shortdecs' => 'Stay cozy and save!',
    'startdate' => '2024-11-01',
    'enddate' => '2024-11-30',
    'discount' => 0.25,
    'terms' => 'Persiapkan diri Anda untuk cuaca dingin dengan diskon 25% untuk semua jaket di Winter Warm-up Sale kami! Gunakan kode promo WINTER25 di checkout untuk menikmati diskon ini sepanjang bulan November. Tetap hangat dan hemat!',
]);

Promotion::create([
    'name' => 'Holiday Gift Bonanza - 20% Off Everything!',
    'slug' => 'holiday-gift-bonanza',
    'code' => 'HOLIDAY20',
    'shortdecs' => 'Spread joy and savings this holiday season!',
    'startdate' => '2024-12-10',
    'enddate' => '2024-12-25',
    'discount' => 0.2,
    'terms' => 'Membuat belanja liburan Anda lebih meriah dengan diskon 20% untuk semua produk! Gunakan kode promo HOLIDAY20 dari tanggal 10 Desember hingga 25 Desember 2024 untuk menikmati diskon ini. Sebarkan kebahagiaan dan hemat di musim liburan ini!',
]);

    }
}
