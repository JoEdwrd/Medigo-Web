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
// PARAMEX mengandung Paracetamol, Propyphenazone, Caffeine, dan Dextromethorphan HBr. Obat ini digunakan untuk meringankan sakit kepala, demam, dan sakit gigi.
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

//Ingestion
Product::create([
    "category_id" => 3,
    "name" => "Promag Tablet",
    "patent" => 0,
    "slug" => "promag-tablet",
    "stock" => 1000,
    "price" => 9700,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Promag Tablet adalah obat yang digunakan untuk meredakan gejala maag dan sakit perut akibat kelebihan asam lambung.
<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala maag, sakit perut, dan kelebihan asam lambung.
<br>
<strong>Komposisi</strong><br>
Hydrotalcite 200 mg, Magnesium Hydroxide 150 mg, Simethicone 50 mg.
<br>
<strong>Dosis</strong><br>
Dewasa: 1-2 tablet, 3-4 kali sehari setelah makan.
<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.
<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.
<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen dari obat ini.
<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan konstipasi atau diare.
<br>
<strong>Golongan Produk</strong><br>
Obat Bebas
<br>
<strong>Kemasan</strong><br>
Per Strip
<br>
<strong>Manufaktur</strong><br>
Kalbe Farma
<br>
<strong>No. Registrasi</strong><br>
BPOM: SI123456789"
]);

Product::create([
    "category_id" => 3,
    "name" => "Mylanta Liquid 50ml",
    "patent" => 0,
    "slug" => "mylanta-liquid-50ml",
    "stock" => 800,
    "price" => 19000,
    "shortdesc" => "Per Botol",
    "description" => "
<strong>Deskripsi</strong><br>
Mylanta Liquid adalah obat cair yang membantu mengurangi gejala mulas dan gangguan pencernaan akibat asam lambung berlebih.
<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala mulas dan gangguan pencernaan akibat asam lambung berlebih.
<br>
<strong>Komposisi</strong><br>
Aluminium Hydroxide, Magnesium Hydroxide, Simethicone.
<br>
<strong>Dosis</strong><br>
Dewasa: 1-2 sendok makan, 3-4 kali sehari setelah makan dan sebelum tidur.
<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan dan sebelum tidur.
<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.
<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen dari obat ini.
<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan konstipasi atau diare.
<br>
<strong>Golongan Produk</strong><br>
Obat Bebas
<br>
<strong>Kemasan</strong><br>
Per Botol
<br>
<strong>Manufaktur</strong><br>
Pfizer
<br>
<strong>No. Registrasi</strong><br>
BPOM: SI234567890"
]);

Product::create([
    "category_id" => 3,
    "name" => "Polysilane Tablet",
    "patent" => 0,
    "slug" => "polysilane-tablet",
    "stock" => 1200,
    "price" => 12000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Polysilane Tablet adalah obat yang digunakan untuk mengatasi gejala kembung, perut kembung, dan kelebihan gas di saluran pencernaan.
<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala kembung dan kelebihan gas di saluran pencernaan.
<br>
<strong>Komposisi</strong><br>
Dimethicone 50 mg, Aluminium Hydroxide 200 mg, Magnesium Hydroxide 200 mg.
<br>
<strong>Dosis</strong><br>
Dewasa: 1-2 tablet, 3-4 kali sehari setelah makan.
<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.
<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.
<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen dari obat ini.
<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan konstipasi atau diare.
<br>
<strong>Golongan Produk</strong><br>
Obat Bebas
<br>
<strong>Kemasan</strong><br>
Per Strip
<br>
<strong>Manufaktur</strong><br>
Pharos
<br>
<strong>No. Registrasi</strong><br>
BPOM: SI345678901"
]);

Product::create([
    "category_id" => 3,
    "name" => "Enzyplex Tablet",
    "patent" => 0,
    "slug" => "enzyplex-tablet",
    "stock" => 900,
    "price" => 12000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Enzyplex Tablet adalah suplemen enzim yang membantu proses pencernaan makanan di dalam saluran pencernaan.
<br>
<strong>Indikasi Umum</strong><br>
Membantu proses pencernaan makanan.
<br>
<strong>Komposisi</strong><br>
Amylase, Protease, Lipase, dan enzim-enzim pencernaan lainnya.
<br>
<strong>Dosis</strong><br>
Dewasa: 1-2 tablet, 3 kali sehari setelah makan.
<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.
<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.
<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen dari obat ini.
<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan seperti mual dan diare.
<br>
<strong>Golongan Produk</strong><br>
Suplemen
<br>
<strong>Kemasan</strong><br>
Per Strip
<br>
<strong>Manufaktur</strong><br>
Meprofarm
<br>
<strong>No. Registrasi</strong><br>
BPOM: SI456789012"
]);

Product::create([
    "category_id" => 3,
    "name" => "Lansoprazole Capsule",
    "patent" => 1,
    "slug" => "lansoprazole-capsule",
    "stock" => 700,
    "price" => 15000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Lansoprazole Capsule adalah obat yang digunakan untuk mengurangi produksi asam lambung dan mengobati tukak lambung serta gastroesophageal reflux disease (GERD).
<br>
<strong>Indikasi Umum</strong><br>
Mengobati tukak lambung dan gastroesophageal reflux disease (GERD).
<br>
<strong>Komposisi</strong><br>
Lansoprazole 30 mg.
<br>
<strong>Dosis</strong><br>
Dewasa: 1 kapsul sehari sebelum makan.
<br>
<strong>Aturan Pakai</strong><br>
Diminum sebelum makan.
<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.
<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen dari obat ini.
<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan sakit kepala, diare, dan gangguan pencernaan.
<br>
<strong>Golongan Produk</strong><br>
Obat Keras
<br>
<strong>Kemasan</strong><br>
Per Strip
<br>
<strong>Manufaktur</strong><br>
Hexpharm Jaya Laboratories
<br>
<strong>No. Registrasi</strong><br>
BPOM: GKL 0308508603A1"
]);

//allergy
Product::create([
    "category_id" => 4,
    "name" => "Cetirizine Tablet",
    "patent" => 0,
    "slug" => "cetirizine-tablet",
    "stock" => 2000,
    "price" => 25000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Cetirizine Tablet adalah antihistamin yang digunakan untuk meredakan gejala alergi seperti bersin, gatal, mata berair, dan pilek.<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala alergi seperti bersin, gatal, mata berair, dan pilek.<br>
<strong>Komposisi</strong><br>
Cetirizine HCl 10 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet sehari.<br>
<strong>Aturan Pakai</strong><br>
Diminum sebelum atau sesudah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen dari obat ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan kantuk, mulut kering, dan sakit kepala.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Hexpharm Jaya<br>
<strong>No. Registrasi</strong><br>
BPOM: GTL 0408511617A1"
]);

Product::create([
    "category_id" => 4,
    "name" => "Loratadine Syrup",
    "patent" => 0,
    "slug" => "loratadine-syrup",
    "stock" => 1500,
    "price" => 35000,
    "shortdesc" => "Per Botol",
    "description" => "
<strong>Deskripsi</strong><br>
Loratadine Syrup adalah antihistamin yang digunakan untuk meredakan gejala alergi pada anak-anak seperti bersin, gatal, mata berair, dan pilek.<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala alergi pada anak-anak seperti bersin, gatal, mata berair, dan pilek.<br>
<strong>Komposisi</strong><br>
Loratadine 5 mg/5 mL.<br>
<strong>Dosis</strong><br>
Anak-anak: 1-2 sendok teh (5-10 mL) sehari.<br>
<strong>Aturan Pakai</strong><br>
Diminum sebelum atau sesudah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen dari obat ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan kantuk, mulut kering, dan sakit kepala.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Botol<br>
<strong>Manufaktur</strong><br>
Sanbe Farma<br>
<strong>No. Registrasi</strong><br>
BPOM: SI789012345"
]);

Product::create([
    "category_id" => 4,
    "name" => "Chlorpheniramine Maleate Tablet",
    "patent" => 0,
    "slug" => "chlorpheniramine-maleate-tablet",
    "stock" => 3000,
    "price" => 10000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Chlorpheniramine Maleate Tablet adalah antihistamin yang digunakan untuk meredakan gejala alergi seperti bersin, gatal, dan mata berair.<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala alergi seperti bersin, gatal, dan mata berair.<br>
<strong>Komposisi</strong><br>
Chlorpheniramine Maleate 4 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet, 3-4 kali sehari.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen dari obat ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan kantuk, mulut kering, dan sakit kepala.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Kimia Farma<br>
<strong>No. Registrasi</strong><br>
BPOM: SI890123456"
]);

Product::create([
    "category_id" => 4,
    "name" => "Fexofenadine Tablet",
    "patent" => 1,
    "slug" => "fexofenadine-tablet",
    "stock" => 1200,
    "price" => 45000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Fexofenadine Tablet adalah antihistamin yang digunakan untuk meredakan gejala alergi seperti urtikaria (biduran) dan rinitis alergi.<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala urtikaria (biduran) dan rinitis alergi.<br>
<strong>Komposisi</strong><br>
Fexofenadine HCl 180 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet sehari.<br>
<strong>Aturan Pakai</strong><br>
Diminum sebelum atau sesudah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen dari obat ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan sakit kepala, mual, dan pusing.<br>
<strong>Golongan Produk</strong><br>
Obat Keras<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Merck Sharp & Dohme<br>
<strong>No. Registrasi</strong><br>
BPOM: SI901234567"
]);

Product::create([
    "category_id" => 4,
    "name" => "Desloratadine Tablet",
    "patent" => 1,
    "slug" => "desloratadine-tablet",
    "stock" => 1000,
    "price" => 40000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Desloratadine Tablet adalah antihistamin yang digunakan untuk meredakan gejala alergi seperti urtikaria (biduran) dan rinitis alergi.<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala urtikaria (biduran) dan rinitis alergi.<br>
<strong>Komposisi</strong><br>
Desloratadine 5 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet sehari.<br>
<strong>Aturan Pakai</strong><br>
Diminum sebelum atau sesudah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen dari obat ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan sakit kepala, mulut kering, dan kelelahan.<br>
<strong>Golongan Produk</strong><br>
Obat Keras<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Bayer<br>
<strong>No. Registrasi</strong><br>
BPOM: SI012345678"
]);

//pain releaver
Product::create([
    "category_id" => 5,
    "name" => "Paracetamol Tablet",
    "patent" => 0,
    "slug" => "paracetamol-tablet",
    "stock" => 5000,
    "price" => 10000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Paracetamol Tablet adalah obat yang digunakan untuk meredakan nyeri ringan hingga sedang.<br>
<strong>Indikasi Umum</strong><br>
Meredakan nyeri ringan hingga sedang.<br>
<strong>Komposisi</strong><br>
Paracetamol 500 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1-2 tablet, 3-4 kali sehari.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap paracetamol.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan mual dan ruam kulit.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Kimia Farma<br>
<strong>No. Registrasi</strong><br>
BPOM: SI123456789"
]);

Product::create([
    "category_id" => 5,
    "name" => "Ibuprofen Tablet",
    "patent" => 0,
    "slug" => "ibuprofen-tablet",
    "stock" => 4000,
    "price" => 20000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Ibuprofen Tablet adalah obat antiinflamasi nonsteroid (NSAID) yang digunakan untuk meredakan nyeri dan peradangan.<br>
<strong>Indikasi Umum</strong><br>
Meredakan nyeri dan peradangan.<br>
<strong>Komposisi</strong><br>
Ibuprofen 400 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet, 3 kali sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap ibuprofen.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan dan mual.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Phapros<br>
<strong>No. Registrasi</strong><br>
BPOM: SI234567890"
]);

Product::create([
    "category_id" => 5,
    "name" => "Naproxen Tablet",
    "patent" => 1,
    "slug" => "naproxen-tablet",
    "stock" => 2500,
    "price" => 30000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Naproxen Tablet adalah obat antiinflamasi nonsteroid (NSAID) yang digunakan untuk mengurangi nyeri dan peradangan.<br>
<strong>Indikasi Umum</strong><br>
Mengurangi nyeri dan peradangan.<br>
<strong>Komposisi</strong><br>
Naproxen 500 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet, 2 kali sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap naproxen.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan dan sakit kepala.<br>
<strong>Golongan Produk</strong><br>
Obat Keras<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Pfizer<br>
<strong>No. Registrasi</strong><br>
BPOM: SI345678901"
]);

Product::create([
    "category_id" => 5,
    "name" => "Aspirin Tablet",
    "patent" => 1,
    "slug" => "aspirin-tablet",
    "stock" => 3500,
    "price" => 15000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Aspirin Tablet adalah obat antiinflamasi nonsteroid (NSAID) yang digunakan untuk meredakan nyeri ringan hingga sedang.<br>
<strong>Indikasi Umum</strong><br>
Meredakan nyeri ringan hingga sedang.<br>
<strong>Komposisi</strong><br>
Aspirin 500 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1-2 tablet, 3-4 kali sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap aspirin.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan dan perdarahan lambung.<br>
<strong>Golongan Produk</strong><br>
Obat Keras<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Bayer<br>
<strong>No. Registrasi</strong><br>
BPOM: SI456789012"
]);

Product::create([
    "category_id" => 5,
    "name" => "Diclofenac Sodium Tablet",
    "patent" => 1,
    "slug" => "diclofenac-sodium-tablet",
    "stock" => 1800,
    "price" => 40000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Diclofenac Sodium Tablet adalah obat antiinflamasi nonsteroid (NSAID) yang digunakan untuk mengurangi nyeri dan peradangan.<br>
<strong>Indikasi Umum</strong><br>
Mengurangi nyeri dan peradangan.<br>
<strong>Komposisi</strong><br>
Diclofenac Sodium 50 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet, 2-3 kali sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap diclofenac sodium.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan dan sakit kepala.<br>
<strong>Golongan Produk</strong><br>
Obat Keras<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Novartis<br>
<strong>No. Registrasi</strong><br>
BPOM: SI567890123"
]);

//liver
Product::create([
    "category_id" => 6,
    "name" => "Hepabion Forte",
    "patent" => 0,
    "slug" => "hepabion-forte",
    "stock" => 3000,
    "price" => 50000,
    "shortdesc" => "Per Botol",
    "description" => "
<strong>Deskripsi</strong><br>
Hepabion Forte adalah suplemen yang mengandung vitamin dan mineral untuk mendukung kesehatan hati.<br>
<strong>Indikasi Umum</strong><br>
Membantu menjaga kesehatan hati dan fungsi liver.<br>
<strong>Komposisi</strong><br>
Vitamin B12, B6, Nicotinamide, dan lainnya.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen suplemen ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan ringan.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Botol<br>
<strong>Manufaktur</strong><br>
Kimia Farma<br>
<strong>No. Registrasi</strong><br>
BPOM: SI678901234"
]);

Product::create([
    "category_id" => 6,
    "name" => "Liv 52",
    "patent" => 0,
    "slug" => "liv-52",
    "stock" => 4500,
    "price" => 30000,
    "shortdesc" => "Per Botol",
    "description" => "
<strong>Deskripsi</strong><br>
Liv 52 adalah suplemen herbal yang digunakan untuk mendukung kesehatan hati dan memperbaiki fungsi liver.<br>
<strong>Indikasi Umum</strong><br>
Mendukung kesehatan hati dan memperbaiki fungsi liver.<br>
<strong>Komposisi</strong><br>
Ekstrak herbal seperti Capparis spinosa dan Cichorium intybus.<br>
<strong>Dosis</strong><br>
Dewasa: 2 tablet dua kali sehari sebelum makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum sebelum makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen suplemen ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan reaksi alergi pada beberapa orang.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Botol<br>
<strong>Manufaktur</strong><br>
Himalaya<br>
<strong>No. Registrasi</strong><br>
BPOM: SI789012345"
]);

Product::create([
    "category_id" => 6,
    "name" => "Essentiale Forte",
    "patent" => 0,
    "slug" => "essentiale-forte",
    "stock" => 2000,
    "price" => 860000,
    "shortdesc" => "Per Kotak",
    "description" => "
<strong>Deskripsi</strong><br>
Essentiale Forte adalah suplemen yang mengandung fosfolipid esensial untuk mendukung kesehatan hati.<br>
<strong>Indikasi Umum</strong><br>
Membantu memperbaiki fungsi hati dan melindungi sel-sel hati.<br>
<strong>Komposisi</strong><br>
Fosfolipid esensial 300 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1-2 kapsul tiga kali sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen suplemen ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan ringan.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Kotak<br>
<strong>Manufaktur</strong><br>
Sanofi<br>
<strong>No. Registrasi</strong><br>
BPOM: SI890123456"
]);

Product::create([
    "category_id" => 6,
    "name" => "Silymarin Tablet",
    "patent" => 0,
    "slug" => "silymarin-tablet",
    "stock" => 3500,
    "price" => 40000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Silymarin Tablet adalah suplemen yang mengandung ekstrak Milk Thistle untuk mendukung kesehatan hati.<br>
<strong>Indikasi Umum</strong><br>
Membantu melindungi sel-sel hati dan memperbaiki fungsi hati.<br>
<strong>Komposisi</strong><br>
Silymarin 140 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet dua kali sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen suplemen ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan ringan.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Mega We Care<br>
<strong>No. Registrasi</strong><br>
BPOM: SI901234567"
]);

Product::create([
    "category_id" => 6,
    "name" => "LiverCare Capsule",
    "patent" => 0,
    "slug" => "livercare-capsule",
    "stock" => 2800,
    "price" => 45000,
    "shortdesc" => "Per Botol",
    "description" => "
<strong>Deskripsi</strong><br>
LiverCare Capsule adalah suplemen yang mengandung herbal alami untuk mendukung fungsi hati dan melindungi sel-sel hati.<br>
<strong>Indikasi Umum</strong><br>
Mendukung kesehatan hati dan memperbaiki fungsi hati.<br>
<strong>Komposisi</strong><br>
Ekstrak Milk Thistle, Dandelion, dan Artichoke.<br>
<strong>Dosis</strong><br>
Dewasa: 1 kapsul dua kali sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen suplemen ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan ringan.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Botol<br>
<strong>Manufaktur</strong><br>
Herbalife<br>
<strong>No. Registrasi</strong><br>
BPOM: SI234567890"
]);
//obat hearing
Product::create([
    "category_id" => 6,
    "name" => "Ginkgo Biloba Extract",
    "patent" => 0,
    "slug" => "ginkgo-biloba-extract",
    "stock" => 3200,
    "price" => 50000,
    "shortdesc" => "Per Botol",
    "description" => "
<strong>Deskripsi</strong><br>
Ginkgo Biloba Extract adalah suplemen yang mengandung ekstrak daun Ginkgo Biloba untuk mendukung kesehatan pendengaran dan sirkulasi darah.<br>
<strong>Indikasi Umum</strong><br>
Membantu meningkatkan sirkulasi darah ke otak dan telinga, serta mendukung fungsi pendengaran.<br>
<strong>Komposisi</strong><br>
Ekstrak Ginkgo Biloba 120 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 kapsul dua kali sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen suplemen ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan ringan dan sakit kepala.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Botol<br>
<strong>Manufaktur</strong><br>
Nature's Way<br>
<strong>No. Registrasi</strong><br>
BPOM: SI234567891"
]);

Product::create([
    "category_id" => 6,
    "name" => "Neurobion Forte",
    "patent" => 0,
    "slug" => "neurobion-forte",
    "stock" => 4100,
    "price" => 52000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Neurobion Forte adalah suplemen yang mengandung vitamin B kompleks untuk mendukung kesehatan saraf dan pendengaran.<br>
<strong>Indikasi Umum</strong><br>
Membantu menjaga kesehatan saraf dan fungsi pendengaran.<br>
<strong>Komposisi</strong><br>
Vitamin B1, B6, dan B12.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen suplemen ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan ringan.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Merck<br>
<strong>No. Registrasi</strong><br>
BPOM: SI345678912"
]);

Product::create([
    "category_id" => 6,
    "name" => "Betahistine Mesylate",
    "patent" => 1,
    "slug" => "betahistine-mesylate",
    "stock" => 2000,
    "price" => 70000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Betahistine Mesylate adalah obat yang digunakan untuk mengatasi vertigo dan masalah pendengaran terkait dengan gangguan pada telinga bagian dalam.<br>
<strong>Indikasi Umum</strong><br>
Mengatasi vertigo dan gangguan pendengaran akibat masalah pada telinga bagian dalam.<br>
<strong>Komposisi</strong><br>
Betahistine Mesylate 24 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet dua kali sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen obat ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan dan sakit kepala.<br>
<strong>Golongan Produk</strong><br>
Obat Keras<br>
<strong>Kemasan</strong><br>
Per Strip<br>
<strong>Manufaktur</strong><br>
Novartis<br>
<strong>No. Registrasi</strong><br>
BPOM: SI456789012"
]);

Product::create([
    "category_id" => 6,
    "name" => "Tanakan",
    "patent" => 0,
    "slug" => "tanakan",
    "stock" => 3200,
    "price" => 1450000,
    "shortdesc" => "Per Kotak",
    "description" => "
<strong>Deskripsi</strong><br>
Tanakan adalah suplemen yang mengandung ekstrak Ginkgo Biloba untuk mendukung kesehatan pendengaran dan fungsi kognitif.<br>
<strong>Indikasi Umum</strong><br>
Membantu meningkatkan sirkulasi darah ke otak dan telinga, serta mendukung fungsi pendengaran.<br>
<strong>Komposisi</strong><br>
Ekstrak Ginkgo Biloba 40 mg.<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet tiga kali sehari setelah makan.<br>
<strong>Aturan Pakai</strong><br>
Diminum setelah makan.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap salah satu komponen suplemen ini.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan gangguan pencernaan ringan dan sakit kepala.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Kotak<br>
<strong>Manufaktur</strong><br>
Ipsen<br>
<strong>No. Registrasi</strong><br>
BPOM: SI567890123"
]);

Product::create([
    "category_id" => 6,
    "name" => "Acustivum",
    "patent" => 0,
    "slug" => "acustivum",
    "stock" => 1500,
    "price" => 85000,
    "shortdesc" => "Per Botol",
    "description" => "
<strong>Deskripsi</strong><br>
Acustivum adalah obat spray yang membantu menghilangkan wax plug yang ada, mencegah pembentukan wax plug, dan menjaga kebersihan saluran pendengaran<br>
<strong>Indikasi Umum</strong><br>
Mendukung kesehatan pendengaran dan kebersihan telinga.<br>
<strong>Komposisi</strong><br>
Sunflower oil, sweet almond oil, liquid paraffin, olive oil, jojoba oil, polysorbate 80, PPG-8, tocopherol (vitamin E), ascorbyl palmitate (vitamin C), ascorbic acid (vitamin C) , citric acid.<br>
<strong>Aturen Pakai</strong><br>
Dewasa: 1-2 semprotan di saluran pendengaran eksternal.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
jangan gunakan jika terjadi penyakit perforasi pada membran timpani atau adanya benda asing di telinga<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Botol<br>
<strong>Manufaktur</strong><br>
Zdrovit<br>"
]);

//obat dental
Product::create([
    "category_id" => 7,
    "name" => "Parodontax",
    "patent" => 0,
    "slug" => "parodontax",
    "stock" => 4000,
    "price" => 90000,
    "shortdesc" => "Per Tube",
    "description" => "
<strong>Deskripsi</strong><br>
Parodontax adalah pasta gigi yang diformulasikan khusus untuk membantu mengatasi masalah gusi berdarah dan menjaga kesehatan gusi.<br>
<strong>Indikasi Umum</strong><br>
Membantu mengatasi gusi berdarah dan menjaga kesehatan gusi.<br>
<strong>Komposisi</strong><br>
Bicarbonate Soda, Sodium Fluoride.<br>
<strong>Dosis</strong><br>
Dewasa: Sikat gigi dua kali sehari.<br>
<strong>Aturan Pakai</strong><br>
Gunakan seperti pasta gigi biasa.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Tidak boleh digunakan oleh penderita alergi terhadap komponen produk.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan iritasi pada beberapa individu.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Tube<br>
<strong>Manufaktur</strong><br>
GlaxoSmithKline<br>
<strong>No. Registrasi</strong><br>
BPOM: SI123456789"
]);

Product::create([
    "category_id" => 7,
    "name" => "Orajel",
    "patent" => 1,
    "slug" => "orajel",
    "stock" => 2500,
    "price" => 45000,
    "shortdesc" => "Per Tube",
    "description" => "
<strong>Deskripsi</strong><br>
Orajel adalah gel anestesi topikal yang digunakan untuk meredakan nyeri gigi dan iritasi mulut.<br>
<strong>Indikasi Umum</strong><br>
Meredakan nyeri gigi dan iritasi mulut.<br>
<strong>Komposisi</strong><br>
Benzocaine 20%.<br>
<strong>Dosis</strong><br>
Oleskan secukupnya pada area yang sakit maksimal 4 kali sehari.<br>
<strong>Aturan Pakai</strong><br>
Oleskan langsung pada area yang sakit.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap benzocaine.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan reaksi alergi pada beberapa individu.<br>
<strong>Golongan Produk</strong><br>
Obat Keras<br>
<strong>Kemasan</strong><br>
Per Tube<br>
<strong>Manufaktur</strong><br>
Church & Dwight<br>
<strong>No. Registrasi</strong><br>
BPOM: SI234567890"
]);

Product::create([
    "category_id" => 7,
    "name" => "Lidocaine Viscous",
    "patent" => 1,
    "slug" => "lidocaine-viscous",
    "stock" => 1500,
    "price" => 60000,
    "shortdesc" => "Per Botol",
    "description" => "
<strong>Deskripsi</strong><br>
Lidocaine Viscous adalah larutan anestesi lokal yang digunakan untuk mengatasi nyeri mulut dan tenggorokan.<br>
<strong>Indikasi Umum</strong><br>
Mengatasi nyeri mulut dan tenggorokan.<br>
<strong>Komposisi</strong><br>
Lidocaine Hydrochloride 2%.<br>
<strong>Dosis</strong><br>
Oleskan secukupnya pada area yang sakit sesuai kebutuhan, maksimal 4 kali sehari.<br>
<strong>Aturan Pakai</strong><br>
Oleskan langsung pada area yang sakit.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap lidocaine.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan reaksi alergi pada beberapa individu.<br>
<strong>Golongan Produk</strong><br>
Obat Keras<br>
<strong>Kemasan</strong><br>
Per Botol<br>
<strong>Manufaktur</strong><br>
Pfizer<br>
<strong>No. Registrasi</strong><br>
BPOM: SI345678901"
]);

Product::create([
    "category_id" => 7,
    "name" => "Corsodyl Mouthwash",
    "patent" => 0,
    "slug" => "corsodyl-mouthwash",
    "stock" => 3500,
    "price" => 55000,
    "shortdesc" => "Per Botol",
    "description" => "
<strong>Deskripsi</strong><br>
Corsodyl Mouthwash adalah obat kumur yang mengandung Chlorhexidine untuk mengatasi infeksi mulut dan masalah gusi.<br>
<strong>Indikasi Umum</strong><br>
Mengatasi infeksi mulut dan masalah gusi.<br>
<strong>Komposisi</strong><br>
Chlorhexidine Digluconate 0.2%.<br>
<strong>Dosis</strong><br>
Berkumur 10 ml dua kali sehari.<br>
<strong>Aturan Pakai</strong><br>
Berkumur selama 30 detik lalu buang.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap chlorhexidine.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan perubahan warna gigi sementara.<br>
<strong>Golongan Produk</strong><br>
Obat Bebas<br>
<strong>Kemasan</strong><br>
Per Botol<br>
<strong>Manufaktur</strong><br>
GlaxoSmithKline<br>
<strong>No. Registrasi</strong><br>
BPOM: SI456789012"
]);

Product::create([
    "category_id" => 7,
    "name" => "Difflam Spray",
    "patent" => 1,
    "slug" => "difflam-spray",
    "stock" => 1800,
    "price" => 70000,
    "shortdesc" => "Per Botol",
    "description" => "
<strong>Deskripsi</strong><br>
Difflam Spray adalah semprotan mulut yang mengandung Benzydamine untuk meredakan nyeri dan iritasi di mulut dan tenggorokan.<br>
<strong>Indikasi Umum</strong><br>
Meredakan nyeri dan iritasi di mulut dan tenggorokan.<br>
<strong>Komposisi</strong><br>
Benzydamine Hydrochloride 0.15%.<br>
<strong>Dosis</strong><br>
Semprotkan 4-8 kali pada area yang sakit setiap 1.5-3 jam.<br>
<strong>Aturan Pakai</strong><br>
Semprotkan langsung pada area yang sakit.<br>
<strong>Perhatian</strong><br>
Simpan di tempat yang sejuk dan kering, jauhkan dari jangkauan anak-anak.<br>
<strong>Kontra Indikasi</strong><br>
Penderita hipersensitif terhadap benzydamine.<br>
<strong>Efek Samping</strong><br>
Pemakaian dapat menyebabkan rasa terbakar atau kesemutan sementara.<br>
<strong>Golongan Produk</strong><br>
Obat Keras<br>
<strong>Kemasan</strong><br>
Per Botol<br>
<strong>Manufaktur</strong><br>
Meda Pharmaceuticals<br>
<strong>No. Registrasi</strong><br>
BPOM: SI567890123"
]);
//obat flu
Product::create([
    "category_id" => 8,
    "name" => "Decolgen",
    "patent" => 0,
    "slug" => "decolgen",
    "stock" => 800,
    "price" => 2500,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Decolgen adalah obat flu yang mengandung parasetamol, phenylpropanolamine HCl, dan chlorpheniramine maleate. Obat ini membantu meredakan gejala flu seperti demam, pilek, bersin, dan hidung tersumbat.
<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala flu seperti demam, pilek, bersin, dan hidung tersumbat.
<br>
<strong>Komposisi</strong><br>
Setiap tablet mengandung parasetamol 500 mg, phenylpropanolamine HCl 12.5 mg, dan chlorpheniramine maleate 2 mg.
<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet setiap 4-6 jam sesuai kebutuhan, maksimal 4 tablet dalam 24 jam.
<br>
<strong>Aturan Pakai</strong><br>
Tablet ditelan utuh dengan segelas air.
<br>
<strong>Perhatian</strong><br>
Tidak dianjurkan untuk digunakan lebih dari 7 hari berturut-turut. Tidak boleh digunakan oleh anak di bawah 12 tahun kecuali atas petunjuk dokter.
<br>
<strong>Kontra Indikasi</strong><br>
Tidak boleh digunakan oleh individu yang memiliki hipersensitivitas terhadap salah satu komponen dalam produk ini.
<br>
<strong>Efek Samping</strong><br>
Dapat menyebabkan efek samping seperti kantuk, mulut kering, atau gangguan tidur.
<br>
<strong>Golongan Produk</strong><br>
Obat Bebas
<br>
<strong>Kemasan</strong><br>
Per Strip
<br>
<strong>Manufaktur</strong><br>
Decolgen
<br>
<strong>No. Registrasi</strong><br>
BPOM: SI234567890"
]);

Product::create([
    "category_id" => 8,
    "name" => "Antangin Junior",
    "patent" => 0,
    "slug" => "antangin-junior",
    "stock" => 1200,
    "price" => 15000,
    "shortdesc" => "Per Kotak",
    "description" => "
<strong>Deskripsi</strong><br>
Antangin Junior adalah obat flu untuk anak-anak yang mengandung kombinasi antara parasetamol, pseudoephedrine HCl, dan chlorpheniramine maleate. Obat ini membantu meredakan gejala flu seperti demam, pilek, bersin, dan hidung tersumbat pada anak-anak.
<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala flu seperti demam, pilek, bersin, dan hidung tersumbat pada anak-anak.
<br>
<strong>Komposisi</strong><br>
Setiap tablet mengandung parasetamol 120 mg, pseudoephedrine HCl 15 mg, dan chlorpheniramine maleate 1 mg.
<br>
<strong>Dosis</strong><br>
Anak-anak 6-12 tahun: 1 tablet setiap 6-8 jam sesuai kebutuhan, maksimal 4 tablet dalam 24 jam.
<br>
<strong>Aturan Pakai</strong><br>
Tablet ditelan utuh dengan segelas air.
<br>
<strong>Perhatian</strong><br>
Hindari penggunaan bersamaan dengan obat batuk lain yang mengandung antihistamin atau dekongestan. Tidak dianjurkan untuk anak di bawah 6 tahun kecuali atas petunjuk dokter.
<br>
<strong>Kontra Indikasi</strong><br>
Tidak boleh digunakan oleh individu yang memiliki hipersensitivitas terhadap salah satu komponen dalam produk ini.
<br>
<strong>Efek Samping</strong><br>
Dapat menyebabkan efek samping seperti kantuk, mulut kering, atau gangguan tidur.
<br>
<strong>Golongan Produk</strong><br>
Obat Bebas
<br>
<strong>Kemasan</strong><br>
Per Kotak
<br>
<strong>Manufaktur</strong><br>
Antangin
<br>
<strong>No. Registrasi</strong><br>
BPOM: SI345678901"
]);

Product::create([
    "category_id" => 8,
    "name" => "Theraflu",
    "patent" => 0,
    "slug" => "theraflu",
    "stock" => 600,
    "price" => 250000,
    "shortdesc" => "Per Kotak",
    "description" => "
<strong>Deskripsi</strong><br>
Theraflu adalah obat flu yang mengandung kombinasi antara parasetamol, phenylephrine HCl, dan diphenhydramine HCl. Obat ini membantu meredakan gejala flu seperti demam, pilek, bersin, dan hidung tersumbat.
<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala flu seperti demam, pilek, bersin, dan hidung tersumbat.
<br>
<strong>Komposisi</strong><br>
Setiap sachet mengandung parasetamol 500 mg, phenylephrine HCl 10 mg, dan diphenhydramine HCl 12.5 mg.
<br>
<strong>Dosis</strong><br>
Dewasa: 1 sachet setiap 4-6 jam sesuai kebutuhan, maksimal 4 sachet dalam 24 jam.
<br>
<strong>Aturan Pakai</strong><br>
Larutkan isi sachet dalam segelas air panas dan aduk hingga larut.
<br>
<strong>Perhatian</strong><br>
Hindari penggunaan bersamaan dengan obat batuk lain yang mengandung antihistamin atau dekongestan. Tidak dianjurkan untuk anak di bawah 12 tahun kecuali atas petunjuk dokter.
<br>
<strong>Kontra Indikasi</strong><br>
Tidak boleh digunakan oleh individu yang memiliki hipersensitivitas terhadap salah satu komponen dalam produk ini.
<br>
<strong>Efek Samping</strong><br>
Dapat menyebabkan efek samping seperti kantuk, mulut kering, atau gangguan tidur.
<br>
<strong>Golongan Produk</strong><br>
Obat Bebas
<br>
<strong>Kemasan</strong><br>
Per Kotak
<br>
<strong>Manufaktur</strong><br>
Theraflu
<br>
<strong>No. Registrasi</strong><br>
BPOM: SI456789012"
]);

Product::create([
"category_id" => 8,
"name" => "Sinarest",
"patent" => 0,
"slug" => "sinarest",
"stock" => 500,
"price" => 32000,
"shortdesc" => "Per Strip",
"description" => "
<strong>Deskripsi</strong><br>
Sinarest adalah obat flu yang mengandung kombinasi antara parasetamol, phenylephrine HCl, dan caffeine. Obat ini membantu meredakan gejala flu seperti demam, pilek, bersin, dan hidung tersumbat.
<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala flu seperti demam, pilek, bersin, dan hidung tersumbat.
<br>
<strong>Komposisi</strong><br>
Setiap tablet mengandung parasetamol 500 mg, phenylephrine HCl 5 mg, dan caffeine 30 mg.
<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet setiap 4-6 jam sesuai kebutuhan, maksimal 4 tablet dalam 24 jam.
<br>
<strong>Aturan Pakai</strong><br>
Tablet ditelan utuh dengan segelas air.
<br>
<strong>Perhatian</strong><br>
Hindari penggunaan bersamaan dengan minuman beralkohol atau obat lain yang mengandung kafein. Tidak dianjurkan untuk anak di bawah 12 tahun kecuali atas petunjuk dokter.
<br>
<strong>Kontra Indikasi</strong><br>
Tidak boleh digunakan oleh individu yang memiliki hipersensitivitas terhadap salah satu komponen dalam produk ini.
<br>
<strong>Efek Samping</strong><br>
Dapat menyebabkan efek samping seperti kantuk, mulut kering, atau gangguan tidur.
<br>
<strong>Golongan Produk</strong><br>
Obat Bebas
<br>
<strong>Kemasan</strong><br>
Per Strip
<br>
<strong>Manufaktur</strong><br>
Sinarest
<br>
<strong>No. Registrasi</strong><br>
BPOM: SI567890123"
]);
Product::create([
    "category_id" => 8,
    "name" => "Decolgen Cold and Flu",
    "patent" => 0,
    "slug" => "decolgen-cold-and-flu",
    "stock" => 700,
    "price" => 28000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong><br>
Decolgen Cold and Flu adalah obat flu yang mengandung kombinasi antara parasetamol, phenylephrine HCl, dan dextromethorphan HBr. Obat ini membantu meredakan gejala flu seperti demam, pilek, batuk, bersin, dan hidung tersumbat.
<br>
<strong>Indikasi Umum</strong><br>
Meredakan gejala flu seperti demam, pilek, batuk, bersin, dan hidung tersumbat.
<br>
<strong>Komposisi</strong><br>
Setiap tablet mengandung parasetamol 500 mg, phenylephrine HCl 5 mg, dan dextromethorphan HBr 15 mg.
<br>
<strong>Dosis</strong><br>
Dewasa: 1 tablet setiap 4-6 jam sesuai kebutuhan, maksimal 4 tablet dalam 24 jam.
<br>
<strong>Aturan Pakai</strong><br>
Tablet ditelan utuh dengan segelas air.
<br>
<strong>Perhatian</strong><br>
Hindari penggunaan bersamaan dengan obat batuk lain yang mengandung dextromethorphan. Tidak dianjurkan untuk anak di bawah 12 tahun kecuali atas petunjuk dokter.
<br>
<strong>Kontra Indikasi</strong><br>
Tidak boleh digunakan oleh individu yang memiliki hipersensitivitas terhadap salah satu komponen dalam produk ini.
<br>
<strong>Efek Samping</strong><br>
Dapat menyebabkan efek samping seperti kantuk, mulut kering, atau gangguan tidur.
<br>
<strong>Golongan Produk</strong><br>
Obat Bebas
<br>
<strong>Kemasan</strong><br>
Per Strip
<br>
<strong>Manufaktur</strong><br>
Decolgen
<br>
<strong>No. Registrasi</strong><br>
BPOM: SI678901234"
]);
//obat mata
    }
}
