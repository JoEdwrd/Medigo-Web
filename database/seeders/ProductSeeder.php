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
        Product::create([
    "category_id" => 1,
    "name" => "Panadol Extra",
    "patent" => 1,
    "slug" => "panadol-extra",
    "stock" => 1000,
    "price" => 15500,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
PANADOL EXTRA merupakan obat dengan kandungan Paracetamol dan Caffeine. Obat ini dapat digunakan untuk meringankan sakit kepala dan sakit gigi. Paracetamol sebagai analgetik, bekerja dengan meningkatkan ambang rasa sakit dan Caffeine bekerja dengan menghambat kerja reseptor adenosin sehingga mengurangi rasa nyeri.
<hr>
<strong>Indikasi Umum</strong>
Obat ini digunakan untuk meringankan sakit kepala dan sakit gigi.
<hr>
<strong>Komposisi</strong>
Tiap kaplet mengandung Paracetamol 500 mg dan Caffeine 65 mg.
<hr>
<strong>Dosis</strong>
Dewasa dan anak-anak lebih dari 12 tahun : 1 Kaplet, ditelan dengan segelas air, 3-4 kali sehari bila gejala memburuk. Tidak melebihi 8 kaplet dalam 24 jam. Minimum interval penggunaan dosis adalah 4 jam.
<hr>
<strong>Aturan Pakai</strong>
Sebelum atau sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati penggunaan obat ini pada penderita penyakit ginjal. Bila setelah 2 hari demam tidak menurun atau setelah 5 hari nyeri tidak menghilang, segera hubungi Unit Pelayanan Kesehatan. Penggunaan obat ini pada penderita yang mengkonsumsi alkohol, dapat meningkatkan risiko kerusakan fungsi hati. Kategori kehamilan : Kategori C: Mungkin berisiko. Obat digunakan dengan hati-hati apabila besarnya manfaat yang diperoleh melebihi besarnya risiko terhadap janin. Penelitian pada hewan uji menunjukkan risiko terhadap janin dan belum terdapat penelitian langsung terhadap wanita hamil.
<hr>
<strong>Kontra Indikasi</strong>
Wanita hamil dan menyusui. Tidak dianjurkan untuk digunakan pada anak dibawah usia 12 tahun
<hr>
<strong>Efek Samping</strong>
Pemakaian obat umumnya memiliki efek samping tertentu dan sesuai dengan masing-masing individu. Jika terjadi efek samping yang berlebih dan berbahaya, harap konsultasikan kepada tenaga medis. Penggunaan jangka panjang dan dosis harap konsultasikan kepada tenaga medis. Penggunaan jangka panjang dan dosis besar dapat menyebabkan kerusakan hati. Efek samping lain yaitu reaksi hipersensitifitas seperti kemerahan atau gatal pada kulit, kulit terkelupas, kadang-kadang gangguan pernafasan atau bengkak pada bibir, lidah, tenggorokan, sariawan, memar-memar, pendarahan. Namun, reaksi efek samping jarang terjadi. Hentikan penggunaan obat dan segera hubungi dokter jika mengalami efek samping.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Sterling
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL9424502004A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Bodrex Migra",
    "patent" => 1,
    "slug" => "bodrex-migra",
    "stock" => 500,
    "price" => 12000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
BODREX MIGRA mengandung Paracetamol dan Caffeine. Obat ini digunakan untuk meringankan sakit kepala sebelah (migrain) dan sakit kepala lainnya.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala sebelah (migrain) dan sakit kepala lainnya.
<hr>
<strong>Komposisi</strong>
Paracetamol 500 mg dan Caffeine 50 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1-2 kaplet setiap 4 jam jika diperlukan, maksimal 8 kaplet per hari.
<hr>
<strong>Aturan Pakai</strong>
Sebelum atau sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati, ginjal, alkoholik, atau wanita hamil dan menyusui.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap kandungan obat ini.
<hr>
<strong>Efek Samping</strong>
Mual, muntah, dan reaksi alergi lainnya.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas Terbatas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Tempo Scan Pacific
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL9237404016A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Paramex",
    "patent" => 0,
    "slug" => "paramex",
    "stock" => 800,
    "price" => 11000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
PARADEX mengandung Paracetamol, Propyphenazone, Caffeine, dan Dextromethorphan HBr. Obat ini digunakan untuk meringankan sakit kepala, demam, dan sakit gigi.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala, demam, dan sakit gigi.
<hr>
<strong>Komposisi</strong>
Paracetamol 500 mg, Propyphenazone 150 mg, Caffeine 50 mg, Dextromethorphan HBr 10 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1-2 tablet 3 kali sehari, maksimal 8 tablet per hari.
<hr>
<strong>Aturan Pakai</strong>
Sebelum atau sesudah makan.
<hr>
<strong>Perhatian</strong>
Tidak dianjurkan untuk penderita gangguan fungsi hati atau ginjal.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap kandungan obat ini.
<hr>
<strong>Efek Samping</strong>
Pusing, mual, muntah, dan reaksi alergi lainnya.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Konimex
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL7623404817A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Panadol Regular",
    "patent" => 0,
    "slug" => "panadol-regular",
    "stock" => 700,
    "price" => 15000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
PANADOL REGULAR mengandung Paracetamol. Obat ini digunakan untuk meringankan sakit kepala dan nyeri ringan lainnya.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala dan nyeri ringan lainnya.
<hr>
<strong>Komposisi</strong>
Paracetamol 500 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
<hr>
<strong>Aturan Pakai</strong>
Sebelum atau sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati atau ginjal.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap Paracetamol.
<hr>
<strong>Efek Samping</strong>
Reaksi alergi seperti ruam kulit dan gatal-gatal.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
GlaxoSmithKline
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL1234567890A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Bodrex",
    "patent" => 0,
    "slug" => "bodrex",
    "stock" => 900,
    "price" => 12000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
BODREX mengandung Paracetamol dan Caffeine. Obat ini digunakan untuk meringankan sakit kepala, sakit gigi, dan demam.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala, sakit gigi, dan demam.
<hr>
<strong>Komposisi</strong>
Paracetamol 500 mg dan Caffeine 50 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1-2 tablet setiap 4 jam jika diperlukan, maksimal 8 tablet per hari.
<hr>
<strong>Aturan Pakai</strong>
Sebelum atau sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati atau ginjal, serta penderita yang mengkonsumsi alkohol.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap Paracetamol dan Caffeine.
<hr>
<strong>Efek Samping</strong>
Reaksi alergi seperti ruam kulit dan gatal-gatal.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Tempo Scan Pacific
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL6543210987A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Dumin",
    "patent" => 0,
    "slug" => "dumin",
    "stock" => 600,
    "price" => 14000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
DUMIN mengandung Paracetamol. Obat ini digunakan untuk meringankan sakit kepala, nyeri otot, nyeri sendi, dan demam.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala, nyeri otot, nyeri sendi, dan demam.
<hr>
<strong>Komposisi</strong>
Paracetamol 500 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
<hr>
<strong>Aturan Pakai</strong>
Sebelum atau sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati atau ginjal.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap Paracetamol.
<hr>
<strong>Efek Samping</strong>
Reaksi alergi seperti ruam kulit dan gatal-gatal.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Konimex
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL1122334455A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Neozep Forte",
    "patent" => 1,
    "slug" => "neozep-forte",
    "stock" => 400,
    "price" => 13000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
NEOZEP FORTE mengandung Paracetamol, Phenylephrine HCl, Chlorpheniramine Maleate, dan Caffeine. Obat ini digunakan untuk meringankan gejala flu seperti sakit kepala, hidung tersumbat, dan demam.
<hr>
<strong>Indikasi Umum</strong>
Meringankan gejala flu seperti sakit kepala, hidung tersumbat, dan demam.
<hr>
<strong>Komposisi</strong>
Paracetamol 500 mg, Phenylephrine HCl 5 mg, Chlorpheniramine Maleate 2 mg, Caffeine 25 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1 tablet 3 kali sehari.
<hr>
<strong>Aturan Pakai</strong>
Sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati atau ginjal, hipertensi, dan diabetes.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap kandungan obat ini.
<hr>
<strong>Efek Samping</strong>
Mengantuk, pusing, mual, dan reaksi alergi lainnya.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas Terbatas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Pfizer
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL3344556677A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Antalgin",
    "patent" => 1,
    "slug" => "antalgin",
    "stock" => 300,
    "price" => 16000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
ANTALGIN mengandung Metamizole Sodium. Obat ini digunakan untuk meringankan sakit kepala, sakit gigi, dan nyeri lainnya.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala, sakit gigi, dan nyeri lainnya.
<hr>
<strong>Komposisi</strong>
Metamizole Sodium 500 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1 tablet 2-3 kali sehari.
<hr>
<strong>Aturan Pakai</strong>
Sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati atau ginjal, serta penderita yang mengkonsumsi alkohol.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap Metamizole Sodium.
<hr>
<strong>Efek Samping</strong>
Reaksi alergi seperti ruam kulit dan gatal-gatal.
<hr>
<strong>Golongan Produk</strong>
Obat Keras
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Kalbe Farma
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL7788990011A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Sanmol",
    "patent" => 0,
    "slug" => "sanmol",
    "stock" => 1000,
    "price" => 9000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
SANMOL mengandung Paracetamol. Obat ini digunakan untuk meringankan sakit kepala, nyeri ringan, dan demam.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala, nyeri ringan, dan demam.
<hr>
<strong>Komposisi</strong>
Paracetamol 500 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
<hr>
<strong>Aturan Pakai</strong>
Sebelum atau sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati atau ginjal.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap Paracetamol.
<hr>
<strong>Efek Samping</strong>
Reaksi alergi seperti ruam kulit dan gatal-gatal.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Sanbe Farma
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL9988776655A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Saridon",
    "patent" => 1,
    "slug" => "saridon",
    "stock" => 600,
    "price" => 17000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
SARIDON mengandung Paracetamol, Propyphenazone, dan Caffeine. Obat ini digunakan untuk meringankan sakit kepala, sakit gigi, dan nyeri lainnya.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala, sakit gigi, dan nyeri lainnya.
<hr>
<strong>Komposisi</strong>
Paracetamol 250 mg, Propyphenazone 150 mg, Caffeine 50 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
<hr>
<strong>Aturan Pakai</strong>
Sebelum atau sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati atau ginjal, serta penderita yang mengkonsumsi alkohol.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap kandungan obat ini.
<hr>
<strong>Efek Samping</strong>
Reaksi alergi seperti ruam kulit dan gatal-gatal.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas Terbatas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Bayer
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL4455667788A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Sumagesic",
    "patent" => 0,
    "slug" => "sumagesic",
    "stock" => 500,
    "price" => 10000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
SUMAGESIC mengandung Paracetamol. Obat ini digunakan untuk meringankan sakit kepala, nyeri ringan, dan demam.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala, nyeri ringan, dan demam.
<hr>
<strong>Komposisi</strong>
Paracetamol 500 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
<hr>
<strong>Aturan Pakai</strong>
Sebelum atau sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati atau ginjal.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap Paracetamol.
<hr>
<strong>Efek Samping</strong>
Reaksi alergi seperti ruam kulit dan gatal-gatal.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Mensa
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL5566778899A1"
]);

Product::create([
    "category_id" => 1,
    "name" => "Tensilon",
    "patent" => 1,
    "slug" => "tensilon",
    "stock" => 700,
    "price" => 18000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
TENSILON mengandung Ibuprofen. Obat ini digunakan untuk meringankan sakit kepala, nyeri ringan hingga sedang, dan nyeri haid.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala, nyeri ringan hingga sedang, dan nyeri haid.
<hr>
<strong>Komposisi</strong>
Ibuprofen 400 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1 tablet setiap 4-6 jam jika diperlukan, maksimal 3 tablet per hari.
<hr>
<strong>Aturan Pakai</strong>
Sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati atau ginjal, tukak lambung, dan penderita yang mengkonsumsi alkohol.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap Ibuprofen.
<hr>
<strong>Efek Samping</strong>
Mual, muntah, pusing, dan reaksi alergi lainnya.
<hr>
<strong>Golongan Produk</strong>
Obat Keras
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Sanbe Farma
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL3344556677A2"
]);

Product::create([
    "category_id" => 1,
    "name" => "Pamol",
    "patent" => 0,
    "slug" => "pamol",
    "stock" => 800,
    "price" => 9000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Deskripsi</strong>
PAMOL mengandung Paracetamol. Obat ini digunakan untuk meringankan sakit kepala, nyeri ringan, dan demam.
<hr>
<strong>Indikasi Umum</strong>
Meringankan sakit kepala, nyeri ringan, dan demam.
<hr>
<strong>Komposisi</strong>
Paracetamol 500 mg.
<hr>
<strong>Dosis</strong>
Dewasa : 1-2 tablet setiap 4-6 jam, maksimal 8 tablet per hari.
<hr>
<strong>Aturan Pakai</strong>
Sebelum atau sesudah makan.
<hr>
<strong>Perhatian</strong>
Hati-hati pada penderita gangguan fungsi hati atau ginjal.
<hr>
<strong>Kontra Indikasi</strong>
Penderita hipersensitif terhadap Paracetamol.
<hr>
<strong>Efek Samping</strong>
Reaksi alergi seperti ruam kulit dan gatal-gatal.
<hr>
<strong>Golongan Produk</strong>
Obat Bebas
<hr>
<strong>Kemasan</strong>
Per Strip
<hr>
<strong>Manufaktur</strong>
Sanbe Farma
<hr>
<strong>No. Registrasi</strong>
BPOM: DBL2233445566A1"
]);

    
    }
}
