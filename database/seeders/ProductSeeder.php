<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Headache
// Product::create([
//     "category_id" => 1,
//     "name" => "Panadol Extra",
//     "patent" => 1,
//     "slug" => "panadol-extra",
//     "stock" => 1000,
//     "price" => 15500,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// PANADOL EXTRA merupakan obat dengan kandungan Paracetamol dan Caffeine. Obat ini dapat digunakan untuk meringankan sakit kepala dan sakit gigi. Paracetamol sebagai analgetik, bekerja dengan meningkatkan ambang rasa sakit dan Caffeine bekerja dengan menghambat kerja reseptor adenosin sehingga mengurangi rasa nyeri.
// <br>
// <strong>Indikasi Umum</strong><br>
// Obat ini digunakan untuk meringankan sakit kepala dan sakit gigi.
// <br>
// <strong>Komposisi</strong><br>
// Tiap kaplet mengandung Paracetamol 500 mg dan Caffeine 65 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa dan anak-anak lebih dari 12 tahun : 1 Kaplet, ditelan dengan segelas air, 3-4 kali sehari bila gejala memburuk. Tidak melebihi 8 kaplet dalam 24 jam. Minimum interval penggunaan dosis adalah 4 jam.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sebelum atau sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati penggunaan obat ini pada penderita penyakit ginjal. Bila setelah 2 hari demam tidak menurun atau setelah 5 hari nyeri tidak menghilang, segera hubungi Unit Pelayanan Kesehatan. Penggunaan obat ini pada penderita yang mengkonsumsi alkohol, dapat meningkatkan risiko kerusakan fungsi hati. Kategori kehamilan : Kategori C: Mungkin berisiko. Obat digunakan dengan hati-hati apabila besarnya manfaat yang diperoleh melebihi besarnya risiko terhadap janin. Penelitian pada hewan uji menunjukkan risiko terhadap janin dan belum terdapat penelitian langsung terhadap wanita hamil.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Wanita hamil dan menyusui. Tidak dianjurkan untuk digunakan pada anak dibawah usia 12 tahun
// <br>
// <strong>Efek Samping</strong><br>
// Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Penggunaan jangka panjang dan dosis harap konsultasikan kepada tenaga medis. Penggunaan jangka panjang dan dosis besar dapat menyebabkan kerusakan hati. Efek samping lain yaitu reaksi hipersensitifitas seperti kemerahan atau gatal pada kulit, kulit terkelupas, kadang-kadang gangguan pernafasan atau bengkak pada bibir, lidah, tenggorokan, sariawan, memar-memar, pendarahan. Namun, reaksi efek samping jarang terjadi. Hentikan penggunaan obat dan segera hubungi dokter jika mengalami efek samping.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Sterling
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL9424502004A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Bodrex Migra",
//     "patent" => 1,
//     "slug" => "bodrex-migra",
//     "stock" => 500,
//     "price" => 12000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// BODREX MIGRA mengandung Paracetamol dan Caffeine. Obat ini digunakan untuk meringankan sakit kepala sebelah (migrain) dan sakit kepala lainnya.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala sebelah (migrain) dan sakit kepala lainnya.
// <br>
// <strong>Komposisi</strong><br>
// Paracetamol 500 mg dan Caffeine 50 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1-2 kaplet setiap 4 jam jika diperlukan, maksimal 8 kaplet per hari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sebelum atau sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati, ginjal, alkoholik, atau wanita hamil dan menyusui.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap kandungan obat ini.
// <br>
// <strong>Efek Samping</strong><br>
// Mual, muntah, dan reaksi alergi lainnya.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas Terbatas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Tempo Scan Pacific
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL9237404016A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Paramex",
//     "patent" => 0,
//     "slug" => "paramex",
//     "stock" => 800,
//     "price" => 11000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// PARADEX mengandung Paracetamol, Propyphenazone, Caffeine, dan Dextromethorphan HBr. Obat ini digunakan untuk meringankan sakit kepala, demam, dan sakit gigi.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala, demam, dan sakit gigi.
// <br>
// <strong>Komposisi</strong><br>
// Paracetamol 500 mg, Propyphenazone 150 mg, Caffeine 50 mg, Dextromethorphan HBr 10 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1-2 tablet 3 kali sehari, maksimal 8 tablet per hari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sebelum atau sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Tidak dianjurkan untuk penderita gangguan fungsi hati atau ginjal.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap kandungan obat ini.
// <br>
// <strong>Efek Samping</strong><br>
// Pusing, mual, muntah, dan reaksi alergi lainnya.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Konimex
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL7623404817A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Panadol Regular",
//     "patent" => 0,
//     "slug" => "panadol-regular",
//     "stock" => 700,
//     "price" => 15000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// PANADOL REGULAR mengandung Paracetamol. Obat ini digunakan untuk meringankan sakit kepala dan nyeri ringan lainnya.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala dan nyeri ringan lainnya.
// <br>
// <strong>Komposisi</strong><br>
// Paracetamol 500 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sebelum atau sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati atau ginjal.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Paracetamol.
// <br>
// <strong>Efek Samping</strong><br>
// Reaksi alergi seperti ruam kulit dan gatal-gatal.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// GlaxoSmithKline
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL1234567890A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Bodrex",
//     "patent" => 0,
//     "slug" => "bodrex",
//     "stock" => 900,
//     "price" => 12000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// BODREX mengandung Paracetamol dan Caffeine. Obat ini digunakan untuk meringankan sakit kepala, sakit gigi, dan demam.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala, sakit gigi, dan demam.
// <br>
// <strong>Komposisi</strong><br>
// Paracetamol 500 mg dan Caffeine 50 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1-2 tablet setiap 4 jam jika diperlukan, maksimal 8 tablet per hari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sebelum atau sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati atau ginjal, serta penderita yang mengkonsumsi alkohol.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Paracetamol dan Caffeine.
// <br>
// <strong>Efek Samping</strong><br>
// Reaksi alergi seperti ruam kulit dan gatal-gatal.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Tempo Scan Pacific
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL6543210987A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Dumin",
//     "patent" => 0,
//     "slug" => "dumin",
//     "stock" => 600,
//     "price" => 14000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// DUMIN mengandung Paracetamol. Obat ini digunakan untuk meringankan sakit kepala, nyeri otot, nyeri sendi, dan demam.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala, nyeri otot, nyeri sendi, dan demam.
// <br>
// <strong>Komposisi</strong><br>
// Paracetamol 500 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sebelum atau sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati atau ginjal.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Paracetamol.
// <br>
// <strong>Efek Samping</strong><br>
// Reaksi alergi seperti ruam kulit dan gatal-gatal.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Konimex
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL1122334455A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Neozep Forte",
//     "patent" => 1,
//     "slug" => "neozep-forte",
//     "stock" => 400,
//     "price" => 13000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// NEOZEP FORTE mengandung Paracetamol, Phenylehrine HCl, Chlorpheniramine Maleate, dan Caffeine. Obat ini digunakan untuk meringankan gejala flu seperti sakit kepala, hidung tersumbat, dan demam.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan gejala flu seperti sakit kepala, hidung tersumbat, dan demam.
// <br>
// <strong>Komposisi</strong><br>
// Paracetamol 500 mg, Phenylephrine HCl 5 mg, Chlorpheniramine Maleate 2 mg, Caffeine 25 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1 tablet 3 kali sehari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati atau ginjal, hipertensi, dan diabetes.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap kandungan obat ini.
// <br>
// <strong>Efek Samping</strong><br>
// Mengantuk, pusing, mual, dan reaksi alergi lainnya.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas Terbatas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Pfizer
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL3344556677A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Antalgin",
//     "patent" => 1,
//     "slug" => "antalgin",
//     "stock" => 300,
//     "price" => 16000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// ANTALGIN mengandung Metamizole Sodium. Obat ini digunakan untuk meringankan sakit kepala, sakit gigi, dan nyeri lainnya.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala, sakit gigi, dan nyeri lainnya.
// <br>
// <strong>Komposisi</strong><br>
// Metamizole Sodium 500 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1 tablet 2-3 kali sehari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati atau ginjal, serta penderita yang mengkonsumsi alkohol.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Metamizole Sodium.
// <br>
// <strong>Efek Samping</strong><br>
// Reaksi alergi seperti ruam kulit dan gatal-gatal.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Keras
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Kalbe Farma
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL7788990011A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Sanmol",
//     "patent" => 0,
//     "slug" => "sanmol",
//     "stock" => 1000,
//     "price" => 9000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// SANMOL mengandung Paracetamol. Obat ini digunakan untuk meringankan sakit kepala, nyeri ringan, dan demam.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala, nyeri ringan, dan demam.
// <br>
// <strong>Komposisi</strong><br>
// Paracetamol 500 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sebelum atau sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati atau ginjal.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Paracetamol.
// <br>
// <strong>Efek Samping</strong><br>
// Reaksi alergi seperti ruam kulit dan gatal-gatal.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Sanbe Farma
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL9988776655A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Saridon",
//     "patent" => 1,
//     "slug" => "saridon",
//     "stock" => 600,
//     "price" => 17000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// SARIDON mengandung Paracetamol, Propyphenazone, dan Caffeine. Obat ini digunakan untuk meringankan sakit kepala, sakit gigi, dan nyeri lainnya.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala, sakit gigi, dan nyeri lainnya.
// <br>
// <strong>Komposisi</strong><br>
// Paracetamol 250 mg, Propyphenazone 150 mg, Caffeine 50 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sebelum atau sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati atau ginjal, serta penderita yang mengkonsumsi alkohol.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap kandungan obat ini.
// <br>
// <strong>Efek Samping</strong><br>
// Reaksi alergi seperti ruam kulit dan gatal-gatal.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas Terbatas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Bayer
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL4455667788A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Sumagesic",
//     "patent" => 0,
//     "slug" => "sumagesic",
//     "stock" => 500,
//     "price" => 10000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// SUMAGESIC mengandung Paracetamol. Obat ini digunakan untuk meringankan sakit kepala, nyeri ringan, dan demam.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala, nyeri ringan, dan demam.
// <br>
// <strong>Komposisi</strong><br>
// Paracetamol 500 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sebelum atau sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati atau ginjal.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Paracetamol.
// <br>
// <strong>Efek Samping</strong><br>
// Reaksi alergi seperti ruam kulit dan gatal-gatal.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Mensa
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL5566778899A1"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Tensilon",
//     "patent" => 1,
//     "slug" => "tensilon",
//     "stock" => 700,
//     "price" => 18000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// TENSILON mengandung Ibuprofen. Obat ini digunakan untuk meringankan sakit kepala, nyeri ringan hingga sedang, dan nyeri haid.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala, nyeri ringan hingga sedang, dan nyeri haid.
// <br>
// <strong>Komposisi</strong><br>
// Ibuprofen 400 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1 tablet setiap 4-6 jam jika diperlukan, maksimal 3 tablet per hari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati atau ginjal, tukak lambung, dan penderita yang mengkonsumsi alkohol.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Ibuprofen.
// <br>
// <strong>Efek Samping</strong><br>
// Mual, muntah, pusing, dan reaksi alergi lainnya.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Keras
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Sanbe Farma
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL3344556677A2"
// ]);

// Product::create([
//     "category_id" => 1,
//     "name" => "Pamol",
//     "patent" => 0,
//     "slug" => "pamol",
//     "stock" => 800,
//     "price" => 9000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// PAMOL mengandung Paracetamol. Obat ini digunakan untuk meringankan sakit kepala, nyeri ringan, dan demam.
// <br>
// <strong>Indikasi Umum</strong><br>
// Meringankan sakit kepala, nyeri ringan, dan demam.
// <br>
// <strong>Komposisi</strong><br>
// Paracetamol 500 mg.
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
// <br>
// <strong>Aturan Pakai</strong><br>
// Sebelum atau sesudah makan.
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati atau ginjal.
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Paracetamol.
// <br>
// <strong>Efek Samping</strong><br>
// Reaksi alergi seperti ruam kulit dan gatal-gatal.
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas
// <br>
// <strong>Kemasan</strong><br>
// Per Strip
// <br>
// <strong>Manufaktur</strong><br>
// Sanbe Farma
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: DBL2233445566A1"
// ]);

// Product::create([
//     "category_id" => 2,
//     "name" => "Hevit-C 1000mg",
//     "patent" => 0,
//     "slug" => "hevit-c-1000mg",
//     "stock" => 800,
//     "price" => 89900,
//     "shortdesc" => "Per Kotak",
//     "description" => "
// <strong>Deskripsi</strong><br>
// Hevit-C merupakan suplemen yang mengandung Vitamin C dosis tinggi yang membantu menjaga daya tahan tubuh dan sebagai antioksidan.<br>
// <br>
// <strong>Indikasi Umum</strong><br>
// Membantu menjaga daya tahan tubuh dan sebagai antioksidan.<br>
// <br>
// <strong>Komposisi</strong><br>
// Vitamin C 1000 mg.<br>
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1 tablet sekali sehari.<br>
// <br>
// <strong>Aturan Pakai</strong><br>
// Sesudah makan.<br>
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi ginjal.<br>
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Vitamin C.<br>
// <br>
// <strong>Efek Samping</strong><br>
// Mual, muntah, dan gangguan pencernaan.<br>
// <br>
// <strong>Golongan Produk</strong><br>
// Obat Bebas<br>
// <br>
// <strong>Kemasan</strong><br>
// Per Kotak<br>
// <br>
// <strong>Manufaktur</strong><br>
// Kalbe Farma<br>
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: D1234567890A1"
// ]);

// Product::create([
//     "category_id" => 2,
//     "name" => "Vitamin D3 1000 IU",
//     "patent" => 0,
//     "slug" => "vitamin-d3-1000-iu",
//     "stock" => 600,
//     "price" => 320000,
//     "shortdesc" => "Per Botol",
//     "description" => "
// <strong>Deskripsi</strong><br>
// Vitamin D3 1000 IU membantu menjaga kesehatan tulang dan mendukung sistem kekebalan tubuh.<br>
// <br>
// <strong>Indikasi Umum</strong><br>
// Membantu menjaga kesehatan tulang dan mendukung sistem kekebalan tubuh.<br>
// <br>
// <strong>Komposisi</strong><br>
// Vitamin D3 1000 IU.<br>
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1 tablet sekali sehari.<br>
// <br>
// <strong>Aturan Pakai</strong><br>
// Sesudah makan.<br>
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita hiperkalsemia.<br>
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Vitamin D.<br>
// <br>
// <strong>Efek Samping</strong><br>
// Mual, muntah, dan gangguan pencernaan.<br>
// <br>
// <strong>Golongan Produk</strong><br>
// Suplemen Makanan<br>
// <br>
// <strong>Kemasan</strong><br>
// Per Botol<br>
// <br>
// <strong>Manufaktur</strong><br>
// Radiant Sentral Nutrindo<br>
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: SI114303141"
// ]);

// Product::create([
//     "category_id" => 2,
//     "name" => "Vitamin B Complex",
//     "patent" => 0,
//     "slug" => "vitamin-b-complex",
//     "stock" => 700,
//     "price" => 18000,
//     "shortdesc" => "Per Botol",
//     "description" => "
// <strong>Deskripsi</strong><br>
// Vitamin B Complex mengandung berbagai jenis Vitamin B yang membantu menjaga kesehatan saraf dan meningkatkan energi.<br>
// <br>
// <strong>Indikasi Umum</strong><br>
// Membantu menjaga kesehatan saraf dan meningkatkan energi.<br>
// <br>
// <strong>Komposisi</strong><br>
// Vitamin B1 100 mg, Vitamin B6 100 mg, Vitamin B12 100 mcg.<br>
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1 tablet sekali sehari.<br>
// <br>
// <strong>Aturan Pakai</strong><br>
// Sesudah makan.<br>
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi hati.<br>
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Vitamin B.<br>
// <br>
// <strong>Efek Samping</strong><br>
// Reaksi alergi seperti ruam kulit dan gatal-gatal.<br>
// <br>
// <strong>Golongan Produk</strong><br>
// Suplemen Makanan<br>
// <br>
// <strong>Kemasan</strong><br>
// Per Botol<br>
// <br>
// <strong>Manufaktur</strong><br>
// Sanbe Farma<br>
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: D1122334455A1"
// ]);

// Product::create([
//     "category_id" => 2,
//     "name" => "Nutrimax Vitamin E 400 IU",
//     "patent" => 0,
//     "slug" => "vitamin-e-400-iu",
//     "stock" => 900,
//     "price" => 30000,
//     "shortdesc" => "Per Botol",
//     "description" => "
// <strong>Deskripsi</strong><br>
// Nutrimax Vitamin E 400 IU adalah suplemen antioksidan yang membantu menjaga kesehatan kulit dan sel tubuh.<br>
// <br>
// <strong>Indikasi Umum</strong><br>
// Membantu menjaga kesehatan kulit dan sel tubuh.<br>
// <br>
// <strong>Komposisi</strong><br>
// Vitamin E 400 IU.<br>
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1 kapsul sekali sehari.<br>
// <br>
// <strong>Aturan Pakai</strong><br>
// Sesudah makan.<br>
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan pencernaan.<br>
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap Vitamin E.<br>
// <br>
// <strong>Efek Samping</strong><br>
// Reaksi alergi seperti ruam kulit dan gatal-gatal.<br>
// <br>
// <strong>Golongan Produk</strong><br>
// Suplemen Makanan<br>
// <br>
// <strong>Kemasan</strong><br>
// Per Botol<br>
// <br>
// <strong>Manufaktur</strong><br>
// Suryaprana Nutrisindo<br>
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: SI184309721"
// ]);

// Product::create([
//     "category_id" => 2,
//     "name" => "Zegafit",
//     "patent" => 0,
//     "slug" => "zegafit",
//     "stock" => 850,
//     "price" => 22000,
//     "shortdesc" => "Per Strip",
//     "description" => "
// <strong>Deskripsi</strong><br>
// Zegafit adalah suplemen yang mengandung berbagai vitamin dan mineral yang membantu meningkatkan daya tahan tubuh dan kesehatan secara umum.<br>
// <br>
// <strong>Indikasi Umum</strong><br>
// Membantu meningkatkan daya tahan tubuh dan kesehatan secara umum.<br>
// <br>
// <strong>Komposisi</strong><br>
// Vitamin A 5000 IU, Vitamin B1 1.5 mg, Vitamin B2 1.7 mg, Vitamin B6 2 mg, Vitamin B12 6 mcg, Vitamin C 60 mg, Vitamin D 400 IU, Vitamin E 30 IU, Zinc 11 mg.<br>
// <br>
// <strong>Dosis</strong><br>
// Dewasa : 1 tablet sekali sehari.<br>
// <br>
// <strong>Aturan Pakai</strong><br>
// Sesudah makan.<br>
// <br>
// <strong>Perhatian</strong><br>
// Hati-hati pada penderita gangguan fungsi ginjal.<br>
// <br>
// <strong>Kontra Indikasi</strong><br>
// Penderita hipersensitif terhadap komposisi vitamin dan mineral dalam produk ini.<br>
// <br>
// <strong>Efek Samping</strong><br>
// Mual, muntah, dan gangguan pencernaan.<br>
// <br>
// <strong>Golongan Produk</strong><br>
// Suplemen Makanan<br>
// <br>
// <strong>Kemasan</strong><br>
// Per Strip<br>
// <br>
// <strong>Manufaktur</strong><br>
// Kalbe Farma<br>
// <br>
// <strong>No. Registrasi</strong><br>
// BPOM: SD151546531"
// ]);
    }
}
