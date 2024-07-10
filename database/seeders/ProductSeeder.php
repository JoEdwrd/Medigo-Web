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
<strong>Description</strong><br>
PANADOL EXTRA contains Paracetamol and Caffeine. This medicine can be used to relieve headaches and toothaches. Paracetamol, as an analgesic, works by increasing the pain threshold, while Caffeine works by inhibiting the action of adenosine receptors, thereby reducing pain.
<br>
<strong>General Indication</strong><br>
This medicine is used to relieve headaches and toothaches.
<br>
<strong>Composition</strong><br>
Each caplet contains Paracetamol 500 mg and Caffeine 65 mg.
<br>
<strong>Dosage</strong><br>
Adults and children over 12 years: 1 caplet, taken with a glass of water, 3-4 times a day if symptoms worsen. Do not exceed 8 caplets in 24 hours. The minimum interval between doses is 4 hours.
<br>
<strong>Usage Instructions</strong><br>
Before or after meals.
<br>
<strong>Precautions</strong><br>
Use this medicine with caution in patients with kidney disease. If fever does not subside after 2 days or pain does not go away after 5 days, immediately contact a healthcare provider. Use of this medicine in patients who consume alcohol can increase the risk of liver damage. Pregnancy Category: Category C: May be at risk. The drug should be used with caution if the benefits outweigh the risks to the fetus. Animal studies have shown risk to the fetus and there are no direct studies in pregnant women.
<br>
<strong>Contraindications</strong><br>
Pregnant and breastfeeding women. Not recommended for use in children under 12 years of age.
<br>
<strong>Side Effects</strong><br>
The use of medication generally has certain side effects, depending on the individual. If excessive and dangerous side effects occur, please consult medical personnel. Long-term use and dosage should be consulted with medical personnel. Long-term use and high doses can cause liver damage. Other side effects include hypersensitivity reactions such as redness or itching of the skin, peeling skin, occasional breathing difficulties or swelling of the lips, tongue, throat, sores in the mouth, bruising, bleeding. However, side effect reactions are rare. Stop using the medicine and immediately contact a doctor if side effects occur.
<br>
<strong>Product Category</strong><br>
Over-the-counter Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Sterling
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
BODREX MIGRA contains Paracetamol and Caffeine. This medicine is used to relieve migraines and other headaches.
<br>
<strong>General Indication</strong><br>
To relieve migraines and other headaches.
<br>
<strong>Composition</strong><br>
Paracetamol 500 mg and Caffeine 50 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1-2 caplets every 4 hours as needed, with a maximum of 8 caplets per day.
<br>
<strong>Usage Instructions</strong><br>
Before or after meals.
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney impairment, alcoholics, or pregnant and breastfeeding women.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to the ingredients of this medicine.
<br>
<strong>Side Effects</strong><br>
Nausea, vomiting, and other allergic reactions.
<br>
<strong>Product Category</strong><br>
Over-the-counter Limited Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Tempo Scan Pacific
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
PARAMEX contains Paracetamol, Propyphenazone, Caffeine, and Dextromethorphan HBr. This medicine is used to relieve headaches, fever, and toothaches.
<br>
<strong>General Indication</strong><br>
To relieve headaches, fever, and toothaches.
<br>
<strong>Composition</strong><br>
Paracetamol 500 mg, Propyphenazone 150 mg, Caffeine 50 mg, Dextromethorphan HBr 10 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets 3 times a day, with a maximum of 8 tablets per day.
<br>
<strong>Usage Instructions</strong><br>
Before or after meals.
<br>
<strong>Precautions</strong><br>
Not recommended for patients with liver or kidney impairment.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to the ingredients of this medicine.
<br>
<strong>Side Effects</strong><br>
Dizziness, nausea, vomiting, and other allergic reactions.
<br>
<strong>Product Category</strong><br>
Over-the-counter Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Konimex
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
PANADOL REGULAR contains Paracetamol. This medicine is used to relieve headaches and other mild pain.
<br>
<strong>General Indication</strong><br>
To relieve headaches and other mild pain.
<br>
<strong>Composition</strong><br>
Paracetamol 500 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets every 4-6 hours, with a maximum of 8 tablets per day.
<br>
<strong>Usage Instructions</strong><br>
Before or after meals.
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney impairment.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to Paracetamol.
<br>
<strong>Side Effects</strong><br>
Allergic reactions such as skin rash and itching.
<br>
<strong>Product Category</strong><br>
Over-the-counter Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
GlaxoSmithKline
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
BODREX contains Paracetamol and Caffeine. This medicine is used to relieve headaches, toothaches, and fever.
<br>
<strong>General Indication</strong><br>
To relieve headaches, toothaches, and fever.
<br>
<strong>Composition</strong><br>
Paracetamol 500 mg and Caffeine 50 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets every 4 hours as needed, with a maximum of 8 tablets per day.
<br>
<strong>Usage Instructions</strong><br>
Before or after meals.
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney impairment, and in those who consume alcohol.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to Paracetamol and Caffeine.
<br>
<strong>Side Effects</strong><br>
Allergic reactions such as skin rash and itching.
<br>
<strong>Product Category</strong><br>
Over-the-counter Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Tempo Scan Pacific
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
DUMIN contains Paracetamol. This medicine is used to relieve headaches, muscle pain, joint pain, and fever.
<br>
<strong>General Indication</strong><br>
To relieve headaches, muscle pain, joint pain, and fever.
<br>
<strong>Composition</strong><br>
Paracetamol 500 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets every 4-6 hours, with a maximum of 8 tablets per day.
<br>
<strong>Usage Instructions</strong><br>
Before or after meals.
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney impairment.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to Paracetamol.
<br>
<strong>Side Effects</strong><br>
Allergic reactions such as skin rash and itching.
<br>
<strong>Product Category</strong><br>
Over-the-counter Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Konimex
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
NEOZEP FORTE contains Paracetamol, Phenylephrine HCl, Chlorpheniramine Maleate, and Caffeine. This medicine is used to relieve flu symptoms such as headaches, nasal congestion, and fever.
<br>
<strong>General Indication</strong><br>
To relieve flu symptoms such as headaches, nasal congestion, and fever.
<br>
<strong>Composition</strong><br>
Paracetamol 500 mg, Phenylephrine HCl 5 mg, Chlorpheniramine Maleate 2 mg, Caffeine 25 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet 3 times a day.
<br>
<strong>Usage Instructions</strong><br>
After meals.
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney impairment, hypertension, and diabetes.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to the ingredients of this medicine.
<br>
<strong>Side Effects</strong><br>
Drowsiness, dizziness, nausea, and other allergic reactions.
<br>
<strong>Product Category</strong><br>
Over-the-counter Limited Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Pfizer
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
ANTALGIN contains Metamizole Sodium. This medicine is used to relieve headaches, toothaches, and other pain.
<br>
<strong>General Indication</strong><br>
To relieve headaches, toothaches, and other pain.
<br>
<strong>Composition</strong><br>
Metamizole Sodium 500 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet 2-3 times a day.
<br>
<strong>Usage Instructions</strong><br>
After meals.
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney impairment, and in those who consume alcohol.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to Metamizole Sodium.
<br>
<strong>Side Effects</strong><br>
Allergic reactions such as skin rash and itching.
<br>
<strong>Product Category</strong><br>
Prescription Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Kalbe Farma
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
SANMOL contains Paracetamol. This medicine is used to relieve headaches, mild pain, and fever.
<br>
<strong>General Indication</strong><br>
To relieve headaches, mild pain, and fever.
<br>
<strong>Composition</strong><br>
Paracetamol 500 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets every 4-6 hours, with a maximum of 8 tablets per day.
<br>
<strong>Usage Instructions</strong><br>
Before or after meals.
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney impairment.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to Paracetamol.
<br>
<strong>Side Effects</strong><br>
Allergic reactions such as skin rash and itching.
<br>
<strong>Product Category</strong><br>
Over-the-counter Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Sanbe Farma
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
SARIDON contains Paracetamol, Propyphenazone, and Caffeine. This medicine is used to relieve headaches, toothaches, and other pain.
<br>
<strong>General Indication</strong><br>
To relieve headaches, toothaches, and other pain.
<br>
<strong>Composition</strong><br>
Paracetamol 250 mg, Propyphenazone 150 mg, Caffeine 50 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets every 4-6 hours, with a maximum of 8 tablets per day.
<br>
<strong>Usage Instructions</strong><br>
Before or after meals.
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney impairment, and in those who consume alcohol.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to the ingredients of this medicine.
<br>
<strong>Side Effects</strong><br>
Allergic reactions such as skin rash and itching.
<br>
<strong>Product Category</strong><br>
Prescription Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Bayer
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
SUMAGESIC contains Paracetamol. This medicine is used to relieve headaches, mild pain, and fever.
<br>
<strong>General Indication</strong><br>
To relieve headaches, mild pain, and fever.
<br>
<strong>Composition</strong><br>
Paracetamol 500 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets every 4-6 hours, with a maximum of 8 tablets per day.
<br>
<strong>Usage Instructions</strong><br>
Before or after meals.
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney impairment.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to Paracetamol.
<br>
<strong>Side Effects</strong><br>
Allergic reactions such as skin rash and itching.
<br>
<strong>Product Category</strong><br>
Over-the-counter Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Mensa
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
TENSILON contains Ibuprofen. This medicine is used to relieve headaches, mild to moderate pain, and menstrual pain.
<br>
<strong>General Indication</strong><br>
To relieve headaches, mild to moderate pain, and menstrual pain.
<br>
<strong>Composition</strong><br>
Ibuprofen 400 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet every 4-6 hours as needed, with a maximum of 3 tablets per day.
<br>
<strong>Usage Instructions</strong><br>
After meals.
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney impairment, peptic ulcer disease, and in those who consume alcohol.
<br>
<strong>Contraindications</strong><br>
Patients with hypersensitivity to Ibuprofen.
<br>
<strong>Side Effects</strong><br>
Nausea, vomiting, dizziness, and other allergic reactions.
<br>
<strong>Product Category</strong><br>
Prescription Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Sanbe Farma
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
PAMOL contains <strong>Paracetamol</strong>. This medicine is used to alleviate headaches, mild pain, and fever.<br>
<br>
<strong>General Indications</strong><br>
Alleviates headaches, mild pain, and fever.<br>
<br>
<strong>Composition</strong><br>
Paracetamol 500 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets every 4-6 hours, maximum 8 tablets per day.<br>
<br>
<strong>Administration</strong><br>
Before or after meals.<br>
<br>
<strong>Precautions</strong><br>
Use with caution in patients with liver or kidney dysfunction.<br>
<br>
<strong>Contraindications</strong><br>
Hypersensitive to <strong>Paracetamol</strong>.<br>
<br>
<strong>Side Effects</strong><br>
Allergic reactions such as skin rash and itching.<br>
<br>
<strong>Product Category</strong><br>
Over-the-counter medicine.<br>
<br>
<strong>Packaging</strong><br>
Per strip.<br>
<br>
<strong>Manufacturer</strong><br>
Sanbe Farma<br>
<br>
<strong>Registration Number</strong><br>
BPOM: DBL2233445566A1"
]);

//Vitamin
Product::create([
    "category_id" => 2,
    "name" => "Hevit-C 1000mg",
    "patent" => 0,
    "slug" => "hevit-c-1000mg",
    "stock" => 800,
    "price" => 89900,
    "shortdesc" => "Per Box",
    "description" => "
<strong>Description</strong><br>
Hevit-C is a supplement containing <strong>high-dose Vitamin C</strong> that helps maintain <strong>immune function</strong> and acts as an <strong>antioxidant</strong>.<br><br>
<strong>General Indications</strong><br>
Helps maintain <strong>immune function</strong> and acts as an <strong>antioxidant</strong>.<br><br>
<strong>Composition</strong><br>
Vitamin C 1000 mg.<br><br>
<strong>Dosage</strong><br>
Adults: 1 tablet once daily.<br><br>
<strong>Administration</strong><br>
After meals.<br><br>
<strong>Caution</strong><br>
Use with caution in patients with kidney function disorders.<br><br>
<strong>Contraindications</strong><br>
Patients hypersensitive to Vitamin C.<br><br>
<strong>Side Effects</strong><br>
Nausea, vomiting, and digestive disturbances.<br><br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br><br>
<strong>Packaging</strong><br>
Per Box<br><br>
<strong>Manufacturer</strong><br>
Kalbe Farma<br><br>
<strong>Registration Number</strong><br>
BPOM: D1234567890A1"
]);

Product::create([
    "category_id" => 2,
    "name" => "Vitamin D3 1000 IU",
    "patent" => 0,
    "slug" => "vitamin-d3-1000-iu",
    "stock" => 600,
    "price" => 320000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Vitamin D3 1000 IU helps maintain bone health and supports the immune system.<br><br>
<strong>General Indications</strong><br>
Helps maintain bone health and supports the immune system.<br><br>
<strong>Composition</strong><br>
Vitamin D3 1000 IU.<br><br>
<strong>Dosage</strong><br>
Adults: 1 tablet once daily.<br><br>
<strong>Administration</strong><br>
After meals.<br><br>
<strong>Caution</strong><br>
Use with caution in patients with hypercalcemia.<br><br>
<strong>Contraindications</strong><br>
Patients hypersensitive to Vitamin D.<br><br>
<strong>Side Effects</strong><br>
Nausea, vomiting, and digestive disturbances.<br><br>
<strong>Product Category</strong><br>
Food Supplement<br><br>
<strong>Packaging</strong><br>
Per Bottle<br><br>
<strong>Manufacturer</strong><br>
Radiant Sentral Nutrindo<br><br>
<strong>Registration Number</strong><br>
BPOM: SI114303141"
]);

Product::create([
    "category_id" => 2,
    "name" => "Vitamin B Complex",
    "patent" => 0,
    "slug" => "vitamin-b-complex",
    "stock" => 700,
    "price" => 18000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Vitamin B Complex contains various types of Vitamin B that help maintain nerve health and increase energy.<br><br>
<strong>General Indications</strong><br>
Helps maintain nerve health and increase energy.<br><br>
<strong>Composition</strong><br>
Vitamin B1 100 mg, Vitamin B6 100 mg, Vitamin B12 100 mcg.<br><br>
<strong>Dosage</strong><br>
Adults: 1 tablet once daily.<br><br>
<strong>Administration</strong><br>
After meals.<br><br>
<strong>Caution</strong><br>
Use with caution in patients with liver function disorders.<br><br>
<strong>Contraindications</strong><br>
Patients hypersensitive to Vitamin B.<br><br>
<strong>Side Effects</strong><br>
Allergic reactions such as skin rash and itching.<br><br>
<strong>Product Category</strong><br>
Food Supplement<br><br>
<strong>Packaging</strong><br>
Per Bottle<br><br>
<strong>Manufacturer</strong><br>
Sanbe Farma<br><br>
<strong>Registration Number</strong><br>
BPOM: D1122334455A1"
]);

Product::create([
    "category_id" => 2,
    "name" => "Nutrimax Vitamin E 400 IU",
    "patent" => 0,
    "slug" => "vitamin-e-400-iu",
    "stock" => 900,
    "price" => 30000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Nutrimax Vitamin E 400 IU is an antioxidant supplement that helps maintain skin health and cell integrity.<br><br>
<strong>General Indications</strong><br>
Helps maintain skin health and cell integrity.<br><br>
<strong>Composition</strong><br>
Vitamin E 400 IU.<br><br>
<strong>Dosage</strong><br>
Adults: 1 capsule once daily.<br><br>
<strong>Administration</strong><br>
After meals.<br><br>
<strong>Caution</strong><br>
Use with caution in patients with digestive disorders.<br><br>
<strong>Contraindications</strong><br>
Patients hypersensitive to Vitamin E.<br><br>
<strong>Side Effects</strong><br>
Allergic reactions such as skin rash and itching.<br><br>
<strong>Product Category</strong><br>
Food Supplement<br><br>
<strong>Packaging</strong><br>
Per Bottle<br><br>
<strong>Manufacturer</strong><br>
Suryaprana Nutrisindo<br><br>
<strong>Registration Number</strong><br>
BPOM: SI184309721"
]);

Product::create([
    "category_id" => 2,
    "name" => "Zegafit",
    "patent" => 0,
    "slug" => "zegafit",
    "stock" => 850,
    "price" => 22000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Description</strong><br>
Zegafit is a supplement containing various vitamins and minerals that help boost immune function and overall health.<br><br>
<strong>General Indications</strong><br>
Helps boost immune function and overall health.<br><br>
<strong>Composition</strong><br>
Vitamin A 5000 IU, Vitamin B1 1.5 mg, Vitamin B2 1.7 mg, Vitamin B6 2 mg, Vitamin B12 6 mcg, Vitamin C 60 mg, Vitamin D 400 IU, Vitamin E 30 IU, Zinc 11 mg.<br><br>
<strong>Dosage</strong><br>
Adults: 1 tablet once daily.<br><br>
<strong>Administration</strong><br>
After meals.<br><br>
<strong>Caution</strong><br>
Use with caution in patients with kidney function disorders.<br><br>
<strong>Contraindications</strong><br>
Patients hypersensitive to the composition of vitamins and minerals in this product.<br><br>
<strong>Side Effects</strong><br>
Nausea, vomiting, and digestive disturbances.<br><br>
<strong>Product Category</strong><br>
Food Supplement<br><br>
<strong>Packaging</strong><br>
Per Strip<br><br>
<strong>Manufacturer</strong><br>
Kalbe Farma<br><br>
<strong>Registration Number</strong><br>
BPOM: SD151546531"
]);

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
<strong>Description</strong><br>
Promag Tablet is a medicine used to relieve symptoms of gastritis and stomach pain due to excess stomach acid.<br>
<br>
<strong>General Indications</strong><br>
Relieves symptoms of gastritis, stomach pain, and excess stomach acid.<br>
<br>
<strong>Composition</strong><br>
Hydrotalcite 200 mg, Magnesium Hydroxide 150 mg, Simethicone 50 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets, 3-4 times a day after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medicine.<br>
<br>
<strong>Side Effects</strong><br>
May cause constipation or diarrhea.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Kalbe Farma<br>
<br>
<strong>Registration Number</strong><br>
BPOM: SI123456789"
]);

Product::create([
    "category_id" => 3,
    "name" => "Mylanta Liquid 50ml",
    "patent" => 0,
    "slug" => "mylanta-liquid-50ml",
    "stock" => 800,
    "price" => 19000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Mylanta Liquid is a liquid medicine that helps reduce symptoms of heartburn and digestive disturbances due to excess stomach acid.<br>
<br>
<strong>General Indications</strong><br>
Relieves symptoms of heartburn and digestive disturbances due to excess stomach acid.<br>
<br>
<strong>Composition</strong><br>
Aluminium Hydroxide, Magnesium Hydroxide, Simethicone.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablespoons, 3-4 times a day after meals and before bedtime.<br>
<br>
<strong>Administration</strong><br>
Take after meals and before bedtime.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medicine.<br>
<br>
<strong>Side Effects</strong><br>
May cause constipation or diarrhea.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Bottle<br>
<br>
<strong>Manufacturer</strong><br>
Pfizer<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Polysilane Tablet is a medicine used to relieve symptoms of bloating, abdominal distension, and excess gas in the digestive tract.<br>
<br>
<strong>General Indications</strong><br>
Relieves symptoms of bloating and excess gas in the digestive tract.<br>
<br>
<strong>Composition</strong><br>
Dimethicone 50 mg, Aluminium Hydroxide 200 mg, Magnesium Hydroxide 200 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets, 3-4 times a day after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medicine.<br>
<br>
<strong>Side Effects</strong><br>
May cause constipation or diarrhea.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Pharos<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Enzyplex Tablet is an enzyme supplement that aids in the digestion of food in the digestive tract.<br>
<br>
<strong>General Indications</strong><br>
Aids in the digestion of food.<br>
<br>
<strong>Composition</strong><br>
Amylase, Protease, Lipase, and other digestive enzymes.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets, 3 times a day after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medicine.<br>
<br>
<strong>Side Effects</strong><br>
May cause digestive disturbances such as nausea and diarrhea.<br>
<br>
<strong>Product Category</strong><br>
Supplement<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Meprofarm<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Lansoprazole Capsule is a medicine used to reduce stomach acid production and treat gastric ulcers and gastroesophageal reflux disease (GERD).<br>
<br>
<strong>General Indications</strong><br>
Treats gastric ulcers and gastroesophageal reflux disease (GERD).<br>
<br>
<strong>Composition</strong><br>
Lansoprazole 30 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 capsule daily before meals.<br>
<br>
<strong>Administration</strong><br>
Take before meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medicine.<br>
<br>
<strong>Side Effects</strong><br>
May cause headache, diarrhea, and digestive disturbances.<br>
<br>
<strong>Product Category</strong><br>
Prescription Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Hexpharm Jaya Laboratories<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Cetirizine Tablet is an antihistamine used to relieve allergy symptoms such as sneezing, itching, watery eyes, and runny nose.<br>
<br>
<strong>General Indications</strong><br>
Relieves allergy symptoms such as sneezing, itching, watery eyes, and runny nose.<br>
<br>
<strong>Composition</strong><br>
Cetirizine HCl 10 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet daily.<br>
<br>
<strong>Administration</strong><br>
Take before or after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medicine.<br>
<br>
<strong>Side Effects</strong><br>
May cause drowsiness, dry mouth, and headache.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Hexpharm Jaya<br>
<br>
<strong>Registration Number</strong><br>
BPOM: GTL 0408511617A1"
]);

Product::create([
    "category_id" => 4,
    "name" => "Loratadine Syrup",
    "patent" => 0,
    "slug" => "loratadine-syrup",
    "stock" => 1500,
    "price" => 35000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Loratadine Syrup is an antihistamine used to relieve allergy symptoms in children such as sneezing, itching, watery eyes, and runny nose.<br>
<br>
<strong>General Indications</strong><br>
Relieves allergy symptoms in children such as sneezing, itching, watery eyes, and runny nose.<br>
<br>
<strong>Composition</strong><br>
Loratadine 5 mg/5 mL.<br>
<br>
<strong>Dosage</strong><br>
Children: 1-2 teaspoons (5-10 mL) daily.<br>
<br>
<strong>Administration</strong><br>
Take before or after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medicine.<br>
<br>
<strong>Side Effects</strong><br>
May cause drowsiness, dry mouth, and headache.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Bottle<br>
<br>
<strong>Manufacturer</strong><br>
Sanbe Farma<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Chlorpheniramine Maleate Tablet is an antihistamine used to relieve allergy symptoms such as sneezing, itching, and watery eyes.<br>
<br>
<strong>General Indications</strong><br>
Relieves allergy symptoms such as sneezing, itching, and watery eyes.<br>
<br>
<strong>Composition</strong><br>
Chlorpheniramine Maleate 4 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet, 3-4 times a day.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medicine.<br>
<br>
<strong>Side Effects</strong><br>
May cause drowsiness, dry mouth, and headache.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Kimia Farma<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Fexofenadine Tablet is an antihistamine used to relieve allergy symptoms such as urticaria (hives) and allergic rhinitis.<br>
<br>
<strong>General Indications</strong><br>
Relieves symptoms of urticaria (hives) and allergic rhinitis.<br>
<br>
<strong>Composition</strong><br>
Fexofenadine HCl 180 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet daily.<br>
<br>
<strong>Administration</strong><br>
Take before or after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medicine.<br>
<br>
<strong>Side Effects</strong><br>
May cause headache, nausea, and dizziness.<br>
<br>
<strong>Product Category</strong><br>
Prescription Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Merck Sharp & Dohme<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Desloratadine Tablet is an antihistamine used to relieve allergy symptoms such as urticaria (hives) and allergic rhinitis.<br>
<br>
<strong>General Indications</strong><br>
Relieves symptoms of urticaria (hives) and allergic rhinitis.<br>
<br>
<strong>Composition</strong><br>
Desloratadine 5 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet daily.<br>
<br>
<strong>Administration</strong><br>
Take before or after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medicine.<br>
<br>
<strong>Side Effects</strong><br>
May cause headache, dry mouth, and fatigue.<br>
<br>
<strong>Product Category</strong><br>
Prescription Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Bayer<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Paracetamol Tablet is a medication used to relieve mild to moderate pain.<br>
<br>
<strong>General Indications</strong><br>
Relieves mild to moderate pain.<br>
<br>
<strong>Composition</strong><br>
Paracetamol 500 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets, 3-4 times a day.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to paracetamol.<br>
<br>
<strong>Side Effects</strong><br>
May cause nausea and skin rash.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Kimia Farma<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Ibuprofen Tablet is a nonsteroidal anti-inflammatory drug (NSAID) used to relieve pain and inflammation.<br>
<br>
<strong>General Indications</strong><br>
Relieves pain and inflammation.<br>
<br>
<strong>Composition</strong><br>
Ibuprofen 400 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet, 3 times a day after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to ibuprofen.<br>
<br>
<strong>Side Effects</strong><br>
May cause digestive disorders and nausea.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Phapros<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Naproxen Tablet is a nonsteroidal anti-inflammatory drug (NSAID) used to reduce pain and inflammation.<br>
<br>
<strong>General Indications</strong><br>
Reduces pain and inflammation.<br>
<br>
<strong>Composition</strong><br>
Naproxen 500 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet, twice a day after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to naproxen.<br>
<br>
<strong>Side Effects</strong><br>
May cause digestive disorders and headache.<br>
<br>
<strong>Product Category</strong><br>
Prescription Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Pfizer<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Aspirin Tablet is a nonsteroidal anti-inflammatory drug (NSAID) used to relieve mild to moderate pain.<br>
<br>
<strong>General Indications</strong><br>
Relieves mild to moderate pain.<br>
<br>
<strong>Composition</strong><br>
Aspirin 500 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1-2 tablets, 3-4 times a day after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to aspirin.<br>
<br>
<strong>Side Effects</strong><br>
May cause digestive disorders and gastric bleeding.<br>
<br>
<strong>Product Category</strong><br>
Prescription Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Bayer<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Diclofenac Sodium Tablet is a nonsteroidal anti-inflammatory drug (NSAID) used to reduce pain and inflammation.<br>
<br>
<strong>General Indications</strong><br>
Reduces pain and inflammation.<br>
<br>
<strong>Composition</strong><br>
Diclofenac Sodium 50 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet, 2-3 times a day after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to diclofenac sodium.<br>
<br>
<strong>Side Effects</strong><br>
May cause digestive disorders and headache.<br>
<br>
<strong>Product Category</strong><br>
Prescription Medicine<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Novartis<br>
<br>
<strong>Registration Number</strong><br>
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
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Hepabion Forte is a supplement containing vitamins and minerals to support liver health.<br>
<br>
<strong>General Indications</strong><br>
Helps maintain liver health and function.<br>
<br>
<strong>Composition</strong><br>
Vitamin B12, B6, Nicotinamide, and others.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet daily after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this supplement.<br>
<br>
<strong>Side Effects</strong><br>
May cause mild digestive disturbances.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Supplement<br>
<br>
<strong>Packaging</strong><br>
Per Bottle<br>
<br>
<strong>Manufacturer</strong><br>
Kimia Farma<br>
<br>
<strong>Registration Number</strong><br>
BPOM: SI678901234"
]);

Product::create([
    "category_id" => 6,
    "name" => "Liv 52",
    "patent" => 0,
    "slug" => "liv-52",
    "stock" => 4500,
    "price" => 30000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Liv 52 is an herbal supplement used to support liver health and improve liver function.<br>
<br>
<strong>General Indications</strong><br>
Supports liver health and improves liver function.<br>
<br>
<strong>Composition</strong><br>
Herbal extracts such as Capparis spinosa and Cichorium intybus.<br>
<br>
<strong>Dosage</strong><br>
Adults: 2 tablets twice daily before meals.<br>
<br>
<strong>Administration</strong><br>
Take before meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this supplement.<br>
<br>
<strong>Side Effects</strong><br>
May cause allergic reactions in some individuals.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Supplement<br>
<br>
<strong>Packaging</strong><br>
Per Bottle<br>
<br>
<strong>Manufacturer</strong><br>
Himalaya<br>
<br>
<strong>Registration Number</strong><br>
BPOM: SI789012345"
]);

Product::create([
    "category_id" => 6,
    "name" => "Essentiale Forte",
    "patent" => 0,
    "slug" => "essentiale-forte",
    "stock" => 2000,
    "price" => 860000,
    "shortdesc" => "Per Box",
    "description" => "
<strong>Description</strong><br>
Essentiale Forte is a supplement containing essential phospholipids to support liver health.<br>
<br>
<strong>General Indications</strong><br>
Helps improve liver function and protect liver cells.<br>
<br>
<strong>Composition</strong><br>
Essential phospholipids 300 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1-2 capsules three times daily after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this supplement.<br>
<br>
<strong>Side Effects</strong><br>
May cause mild digestive disturbances.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Supplement<br>
<br>
<strong>Packaging</strong><br>
Per Box<br>
<br>
<strong>Manufacturer</strong><br>
Sanofi<br>
<br>
<strong>Registration Number</strong><br>
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
<strong>Description</strong><br>
Silymarin Tablet is a supplement containing Milk Thistle extract to support liver health.<br>
<br>
<strong>General Indications</strong><br>
Helps protect liver cells and improve liver function.<br>
<br>
<strong>Composition</strong><br>
Silymarin 140 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet twice daily after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this supplement.<br>
<br>
<strong>Side Effects</strong><br>
May cause mild digestive disturbances.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Supplement<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Mega We Care<br>
<br>
<strong>Registration Number</strong><br>
BPOM: SI901234567"
]);

Product::create([
    "category_id" => 6,
    "name" => "LiverCare Capsule",
    "patent" => 0,
    "slug" => "livercare-capsule",
    "stock" => 2800,
    "price" => 45000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
LiverCare Capsule is a supplement containing natural herbs to support liver function and protect liver cells.<br>
<br>
<strong>General Indications</strong><br>
Supports liver health and improves liver function.<br>
<br>
<strong>Composition</strong><br>
Milk Thistle Extract, Dandelion, and Artichoke.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 capsule twice daily after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this supplement.<br>
<br>
<strong>Side Effects</strong><br>
May cause mild digestive disturbances.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Supplement<br>
<br>
<strong>Packaging</strong><br>
Per Bottle<br>
<br>
<strong>Manufacturer</strong><br>
Herbalife<br>
<br>
<strong>Registration Number</strong><br>
BPOM: SI234567890"
]);
//obat hearing
Product::create([
    "category_id" => 7,
    "name" => "Ginkgo Biloba Extract",
    "patent" => 0,
    "slug" => "ginkgo-biloba-extract",
    "stock" => 3200,
    "price" => 50000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Ginkgo Biloba Extract is a supplement containing Ginkgo Biloba leaf extract to support hearing health and blood circulation.<br>
<br>
<strong>General Indications</strong><br>
Helps improve blood circulation to the brain and ears, and supports hearing function.<br>
<br>
<strong>Composition</strong><br>
Ginkgo Biloba Extract 120 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 capsule twice daily after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this supplement.<br>
<br>
<strong>Side Effects</strong><br>
May cause mild digestive disturbances and headaches.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Supplement<br>
<br>
<strong>Packaging</strong><br>
Per Bottle<br>
<br>
<strong>Manufacturer</strong><br>
Nature's Way<br>
<br>
<strong>Registration Number</strong><br>
BPOM: SI234567891"
]);

Product::create([
    "category_id" => 7,
    "name" => "Neurobion Forte",
    "patent" => 0,
    "slug" => "neurobion-forte",
    "stock" => 4100,
    "price" => 52000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Description</strong><br>
Neurobion Forte is a supplement containing vitamin B complex to support nerve health and hearing.<br>
<br>
<strong>General Indications</strong><br>
Helps maintain nerve health and hearing function.<br>
<br>
<strong>Composition</strong><br>
Vitamin B1, B6, and B12.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet daily after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this supplement.<br>
<br>
<strong>Side Effects</strong><br>
May cause mild digestive disturbances.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Supplement<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Merck<br>
<br>
<strong>Registration Number</strong><br>
BPOM: SI345678912"
]);

Product::create([
    "category_id" => 7,
    "name" => "Betahistine Mesylate",
    "patent" => 1,
    "slug" => "betahistine-mesylate",
    "stock" => 2000,
    "price" => 70000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Description</strong><br>
Betahistine Mesylate is a medication used to treat vertigo and hearing problems associated with disorders of the inner ear.<br>
<br>
<strong>General Indications</strong><br>
To alleviate vertigo and hearing disorders caused by issues in the inner ear.<br>
<br>
<strong>Composition</strong><br>
Betahistine Mesylate 24 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet twice daily after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this medication.<br>
<br>
<strong>Side Effects</strong><br>
May cause digestive disturbances and headaches.<br>
<br>
<strong>Product Category</strong><br>
Prescription Medication<br>
<br>
<strong>Packaging</strong><br>
Per Strip<br>
<br>
<strong>Manufacturer</strong><br>
Novartis<br>
<br>
<strong>Registration Number</strong><br>
BPOM: SI456789012"
]);

Product::create([
    "category_id" => 7,
    "name" => "Tanakan",
    "patent" => 0,
    "slug" => "tanakan",
    "stock" => 3200,
    "price" => 1450000,
    "shortdesc" => "Per Box",
    "description" => "
<strong>Description</strong><br>
Tanakan is a supplement containing Ginkgo Biloba extract to support auditory health and cognitive function.<br>
<br>
<strong>General Indications</strong><br>
To help improve blood circulation to the brain and ears, and support auditory function.<br>
<br>
<strong>Composition</strong><br>
Ginkgo Biloba Extract 40 mg.<br>
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet three times a day after meals.<br>
<br>
<strong>Administration</strong><br>
Take after meals.<br>
<br>
<strong>Caution</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<br>
<strong>Contraindications</strong><br>
Patients hypersensitive to any component of this supplement.<br>
<br>
<strong>Side Effects</strong><br>
May cause mild digestive disturbances and headaches.<br>
<br>
<strong>Product Category</strong><br>
Over-the-Counter Supplement<br>
<br>
<strong>Packaging</strong><br>
Per Box<br>
<br>
<strong>Manufacturer</strong><br>
Ipsen<br>
<br>
<strong>Registration Number</strong><br>
BPOM: SI567890123"
]);

Product::create([
    "category_id" => 7,
    "name" => "Acustivum",
    "patent" => 0,
    "slug" => "acustivum",
    "stock" => 1500,
    "price" => 85000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Acustivum is a spray medication that helps remove existing wax plugs, prevents the formation of wax plugs, and maintains ear hygiene.<br>
<strong>General Indication</strong><br>
Supports ear health and cleanliness.<br>
<strong>Composition</strong><br>
Sunflower oil, sweet almond oil, liquid paraffin, olive oil, jojoba oil, polysorbate 80, PPG-8, tocopherol (vitamin E), ascorbyl palmitate (vitamin C), ascorbic acid (vitamin C), citric acid.<br>
<strong>Directions for Use</strong><br>
Adults: 1-2 sprays into the external auditory canal.<br>
<strong>Precautions</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<strong>Contraindications</strong><br>
Do not use in case of perforation of the tympanic membrane or presence of a foreign body in the ear.<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<strong>Packaging</strong><br>
Per Bottle<br>
<strong>Manufacturer</strong><br>
Zdrovit<br>"
]);

//obat dental
Product::create([
    "category_id" => 8,
    "name" => "Parodontax",
    "patent" => 0,
    "slug" => "parodontax",
    "stock" => 4000,
    "price" => 90000,
    "shortdesc" => "Per Tube",
    "description" => "
<strong>Description</strong><br>
Parodontax is a toothpaste specially formulated to help address bleeding gums and maintain gum health.<br>
<strong>General Indication</strong><br>
Helps alleviate bleeding gums and maintain gum health.<br>
<strong>Composition</strong><br>
Bicarbonate Soda, Sodium Fluoride.<br>
<strong>Dosage</strong><br>
Adults: Brush teeth twice a day.<br>
<strong>Directions for Use</strong><br>
Use like regular toothpaste.<br>
<strong>Precautions</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<strong>Contraindications</strong><br>
Not suitable for individuals allergic to any of the product components.<br>
<strong>Side Effects</strong><br>
May cause irritation in some individuals.<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<strong>Packaging</strong><br>
Per Tube<br>
<strong>Manufacturer</strong><br>
GlaxoSmithKline<br>
<strong>Registration Number</strong><br>
BPOM: SI123456789"
]);

Product::create([
    "category_id" => 8,
    "name" => "Orajel",
    "patent" => 1,
    "slug" => "orajel",
    "stock" => 2500,
    "price" => 45000,
    "shortdesc" => "Per Tube",
    "description" => "
<strong>Description</strong><br>
Orajel is a topical anesthetic gel used to relieve toothache and mouth irritation.<br>
<strong>General Indication</strong><br>
Relieves toothache and mouth irritation.<br>
<strong>Composition</strong><br>
Benzocaine 20%.<br>
<strong>Dosage</strong><br>
Apply a sufficient amount to the affected area up to 4 times daily.<br>
<strong>Directions for Use</strong><br>
Apply directly to the affected area.<br>
<strong>Precautions</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<strong>Contraindications</strong><br>
Not suitable for individuals hypersensitive to benzocaine.<br>
<strong>Side Effects</strong><br>
May cause allergic reactions in some individuals.<br>
<strong>Product Category</strong><br>
Prescription Medicine<br>
<strong>Packaging</strong><br>
Per Tube<br>
<strong>Manufacturer</strong><br>
Church & Dwight<br>
<strong>Registration Number</strong><br>
BPOM: SI234567890"
]);

Product::create([
    "category_id" => 8,
    "name" => "Lidocaine Viscous",
    "patent" => 1,
    "slug" => "lidocaine-viscous",
    "stock" => 1500,
    "price" => 60000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Lidocaine Viscous is a local anesthetic solution used to relieve mouth and throat pain.<br>
<strong>General Indication</strong><br>
Relieves mouth and throat pain.<br>
<strong>Composition</strong><br>
Lidocaine Hydrochloride 2%.<br>
<strong>Dosage</strong><br>
Apply a sufficient amount to the affected area as needed, up to 4 times daily.<br>
<strong>Directions for Use</strong><br>
Apply directly to the affected area.<br>
<strong>Precautions</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<strong>Contraindications</strong><br>
Not suitable for individuals hypersensitive to lidocaine.<br>
<strong>Side Effects</strong><br>
May cause allergic reactions in some individuals.<br>
<strong>Product Category</strong><br>
Prescription Medicine<br>
<strong>Packaging</strong><br>
Per Bottle<br>
<strong>Manufacturer</strong><br>
Pfizer<br>
<strong>Registration Number</strong><br>
BPOM: SI345678901"
]);

Product::create([
    "category_id" => 8,
    "name" => "Corsodyl Mouthwash",
    "patent" => 0,
    "slug" => "corsodyl-mouthwash",
    "stock" => 3500,
    "price" => 55000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Corsodyl Mouthwash is a mouthwash containing Chlorhexidine to treat oral infections and gum problems.<br>
<strong>General Indication</strong><br>
Treats oral infections and gum problems.<br>
<strong>Composition</strong><br>
Chlorhexidine Digluconate 0.2%.<br>
<strong>Dosage</strong><br>
Rinse with 10 ml twice a day.<br>
<strong>Directions for Use</strong><br>
Rinse for 30 seconds and then spit out.<br>
<strong>Precautions</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<strong>Contraindications</strong><br>
Not suitable for individuals hypersensitive to chlorhexidine.<br>
<strong>Side Effects</strong><br>
May cause temporary discoloration of teeth.<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine<br>
<strong>Packaging</strong><br>
Per Bottle<br>
<strong>Manufacturer</strong><br>
GlaxoSmithKline<br>
<strong>Registration Number</strong><br>
BPOM: SI456789012"
]);

Product::create([
    "category_id" => 8,
    "name" => "Difflam Spray",
    "patent" => 1,
    "slug" => "difflam-spray",
    "stock" => 1800,
    "price" => 70000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong><br>
Difflam Spray is a mouth spray containing Benzydamine to relieve pain and irritation in the mouth and throat.<br>
<strong>General Indication</strong><br>
Relieves pain and irritation in the mouth and throat.<br>
<strong>Composition</strong><br>
Benzydamine Hydrochloride 0.15%.<br>
<strong>Dosage</strong><br>
Spray 4-8 times onto the affected area every 1.5-3 hours.<br>
<strong>Directions for Use</strong><br>
Spray directly onto the affected area.<br>
<strong>Precautions</strong><br>
Store in a cool, dry place, out of reach of children.<br>
<strong>Contraindications</strong><br>
Not suitable for individuals hypersensitive to benzydamine.<br>
<strong>Side Effects</strong><br>
May cause temporary burning sensation or numbness.<br>
<strong>Product Category</strong><br>
Prescription Medicine<br>
<strong>Packaging</strong><br>
Per Bottle<br>
<strong>Manufacturer</strong><br>
Meda Pharmaceuticals<br>
<strong>Registration Number</strong><br>
BPOM: SI567890123"
]);
//obat flu
Product::create([
    "category_id" => 9,
    "name" => "Decolgen",
    "patent" => 0,
    "slug" => "decolgen",
    "stock" => 800,
    "price" => 2500,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Description</strong><br>
Decolgen is a flu medicine containing paracetamol, phenylpropanolamine HCl, and chlorpheniramine maleate. This medication helps relieve flu symptoms such as fever, cold, sneezing, and nasal congestion.
<br>
<strong>General Indication</strong><br>
Relieves flu symptoms such as fever, cold, sneezing, and nasal congestion.
<br>
<strong>Composition</strong><br>
Each tablet contains paracetamol 500 mg, phenylpropanolamine HCl 12.5 mg, and chlorpheniramine maleate 2 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet every 4-6 hours as needed, maximum 4 tablets in 24 hours.
<br>
<strong>Directions for Use</strong><br>
Swallow the tablet whole with a glass of water.
<br>
<strong>Precautions</strong><br>
Not recommended for use for more than 7 consecutive days. Not to be used in children under 12 years old unless directed by a doctor.
<br>
<strong>Contraindications</strong><br>
Not suitable for individuals hypersensitive to any component of this product.
<br>
<strong>Side Effects</strong><br>
May cause side effects such as drowsiness, dry mouth, or sleep disturbances.
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Decolgen
<br>
<strong>Registration Number</strong><br>
BPOM: SI234567890"
]);

Product::create([
    "category_id" => 9,
    "name" => "Antangin Junior",
    "patent" => 0,
    "slug" => "antangin-junior",
    "stock" => 1200,
    "price" => 15000,
    "shortdesc" => "Per Box",
    "description" => "
<strong>Description</strong><br>
Antangin Junior is a flu medicine for children containing a combination of paracetamol, pseudoephedrine HCl, and chlorpheniramine maleate. This medication helps relieve flu symptoms such as fever, cold, sneezing, and nasal congestion in children.
<br>
<strong>General Indication</strong><br>
Relieves flu symptoms such as fever, cold, sneezing, and nasal congestion in children.
<br>
<strong>Composition</strong><br>
Each tablet contains paracetamol 120 mg, pseudoephedrine HCl 15 mg, and chlorpheniramine maleate 1 mg.
<br>
<strong>Dosage</strong><br>
Children aged 6-12 years: 1 tablet every 6-8 hours as needed, maximum 4 tablets in 24 hours.
<br>
<strong>Directions for Use</strong><br>
Swallow the tablet whole with a glass of water.
<br>
<strong>Precautions</strong><br>
Avoid simultaneous use with other cough medicines containing antihistamines or decongestants. Not recommended for children under 6 years old unless directed by a doctor.
<br>
<strong>Contraindications</strong><br>
Not suitable for individuals hypersensitive to any component of this product.
<br>
<strong>Side Effects</strong><br>
May cause side effects such as drowsiness, dry mouth, or sleep disturbances.
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine
<br>
<strong>Packaging</strong><br>
Per Box
<br>
<strong>Manufacturer</strong><br>
Antangin
<br>
<strong>Registration Number</strong><br>
BPOM: SI345678901"
]);

Product::create([
    "category_id" => 9,
    "name" => "Theraflu",
    "patent" => 0,
    "slug" => "theraflu",
    "stock" => 600,
    "price" => 250000,
    "shortdesc" => "Per Box",
    "description" => "
<strong>Description</strong><br>
Theraflu is a flu medication containing a combination of paracetamol, phenylephrine HCl, and diphenhydramine HCl. This medication helps relieve flu symptoms such as fever, cold, sneezing, and nasal congestion.
<br>
<strong>General Indication</strong><br>
Relieves flu symptoms such as fever, cold, sneezing, and nasal congestion.
<br>
<strong>Composition</strong><br>
Each sachet contains paracetamol 500 mg, phenylephrine HCl 10 mg, and diphenhydramine HCl 12.5 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1 sachet every 4-6 hours as needed, maximum 4 sachets in 24 hours.
<br>
<strong>Directions for Use</strong><br>
Dissolve the contents of one sachet in a glass of hot water and stir until dissolved.
<br>
<strong>Precautions</strong><br>
Avoid simultaneous use with other cough medicines containing antihistamines or decongestants. Not recommended for children under 12 years old unless directed by a doctor.
<br>
<strong>Contraindications</strong><br>
Not suitable for individuals hypersensitive to any component of this product.
<br>
<strong>Side Effects</strong><br>
May cause side effects such as drowsiness, dry mouth, or sleep disturbances.
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine
<br>
<strong>Packaging</strong><br>
Per Box
<br>
<strong>Manufacturer</strong><br>
Theraflu
<br>
<strong>Registration Number</strong><br>
BPOM: SI456789012"
]);

Product::create([
"category_id" => 9,
"name" => "Sinarest",
"patent" => 0,
"slug" => "sinarest",
"stock" => 500,
"price" => 32000,
"shortdesc" => "Per Strip",
"description" => "
<strong>Description</strong><br>
Sinarest is a flu medication containing a combination of paracetamol, phenylephrine HCl, and caffeine. This medication helps relieve flu symptoms such as fever, cold, sneezing, and nasal congestion.
<br>
<strong>General Indication</strong><br>
Relieves flu symptoms such as fever, cold, sneezing, and nasal congestion.
<br>
<strong>Composition</strong><br>
Each tablet contains paracetamol 500 mg, phenylephrine HCl 5 mg, and caffeine 30 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet every 4-6 hours as needed, maximum 4 tablets in 24 hours.
<br>
<strong>Directions for Use</strong><br>
Swallow the tablet whole with a glass of water.
<br>
<strong>Precautions</strong><br>
Avoid simultaneous use with alcoholic beverages or other caffeine-containing medications. Not recommended for children under 12 years old unless directed by a doctor.
<br>
<strong>Contraindications</strong><br>
Not suitable for individuals hypersensitive to any component of this product.
<br>
<strong>Side Effects</strong><br>
May cause side effects such as drowsiness, dry mouth, or sleep disturbances.
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Sinarest
<br>
<strong>Registration Number</strong><br>
BPOM: SI567890123"
]);
Product::create([
    "category_id" => 9,
    "name" => "Decolgen Cold and Flu",
    "patent" => 0,
    "slug" => "decolgen-cold-and-flu",
    "stock" => 700,
    "price" => 28000,
    "shortdesc" => "Per Strip",
    "description" => "
<strong>Description</strong><br>
Decolgen Cold and Flu is a flu medication containing a combination of paracetamol, phenylephrine HCl, and dextromethorphan HBr. This medication helps relieve flu symptoms such as fever, cold, cough, sneezing, and nasal congestion.
<br>
<strong>General Indication</strong><br>
Relieves flu symptoms such as fever, cold, cough, sneezing, and nasal congestion.
<br>
<strong>Composition</strong><br>
Each tablet contains paracetamol 500 mg, phenylephrine HCl 5 mg, and dextromethorphan HBr 15 mg.
<br>
<strong>Dosage</strong><br>
Adults: 1 tablet every 4-6 hours as needed, maximum 4 tablets in 24 hours.
<br>
<strong>Directions for Use</strong><br>
Swallow the tablet whole with a glass of water.
<br>
<strong>Precautions</strong><br>
Avoid simultaneous use with other cough medicines containing dextromethorphan. Not recommended for children under 12 years old unless directed by a doctor.
<br>
<strong>Contraindications</strong><br>
Not suitable for individuals hypersensitive to any component of this product.
<br>
<strong>Side Effects</strong><br>
May cause side effects such as drowsiness, dry mouth, or sleep disturbances.
<br>
<strong>Product Category</strong><br>
Over-the-Counter Medicine
<br>
<strong>Packaging</strong><br>
Per Strip
<br>
<strong>Manufacturer</strong><br>
Decolgen
<br>
<strong>Registration Number</strong><br>
BPOM: SI678901234"
]);
//obat mata
Product::create([
    "category_id" => 10,
    "name" => "Visine Original Eye Drops",
    "patent" => 0,
    "slug" => "visine-original-eye-drops",
    "stock" => 2000,
    "price" => 200000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong>
<br>Visine Original Eye Drops are eye drops that help relieve redness in the eyes.
<br><strong>General Indications</strong>
<br>Reduces eye redness due to mild irritation.
<br><strong>Composition</strong>
<br>Tetrahydrozoline HCl 0.05%.
<br><strong>Dosage</strong>
<br>Instill 1-2 drops into the affected eye(s), up to 4 times daily.
<br><strong>Administration</strong>
<br>Apply to the irritated eye(s).
<br><strong>Caution</strong>
<br>Store in a cool, dry place; keep out of reach of children.
<br><strong>Contraindications</strong>
<br>Patients hypersensitive to any of the components of this medication.
<br><strong>Side Effects</strong>
<br>Mild stinging or irritation upon initial use.
<br><strong>Product Category</strong>
<br>Over-the-Counter Medicine
<br><strong>Packaging</strong>
<br>Per Bottle
<br><strong>Manufactured By</strong>
<br>Johnson & Johnson
<br><strong>Registration Number</strong>
<br>BPOM: DTL041231231"
]);

Product::create([
    "category_id" => 10,
    "name" => "Rohto Cool Eye Drops",
    "patent" => 0,
    "slug" => "rohto-cool-eye-drops",
    "stock" => 1500,
    "price" => 28000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong>
<br>Rohto Cool Eye Drops are eye drops that provide a cool and comfortable sensation to the eyes.
<br><strong>General Indications</strong>
<br>Reduces redness and irritation of the eyes.
<br><strong>Composition</strong>
<br>Menthol, Chlorpheniramine Maleate.
<br><strong>Dosage</strong>
<br>Instill 1-2 drops into the affected eye(s), up to 4 times daily.
<br><strong>Administration</strong>
<br>Apply to the irritated eye(s).
<br><strong>Caution</strong>
<br>Store in a cool, dry place; keep out of reach of children.
<br><strong>Contraindications</strong>
<br>Patients hypersensitive to any of the components of this medication.
<br><strong>Side Effects</strong>
<br>Mild stinging or irritation upon initial use.
<br><strong>Product Category</strong>
<br>Over-the-Counter Medicine
<br><strong>Packaging</strong>
<br>Per Bottle
<br><strong>Manufactured By</strong>
<br>Rohto Pharmaceutical
<br><strong>Registration Number</strong>
<br>BPOM: DTL041231232"
]);

Product::create([
    "category_id" => 10,
    "name" => "Cendo Xitrol Eye Drops",
    "patent" => 1,
    "slug" => "cendo-xitrol-eye-drops",
    "stock" => 800,
    "price" => 60000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong>
<br>Cendo Xitrol Eye Drops are antibiotic and anti-inflammatory eye drops.
<br><strong>General Indications</strong>
<br>Treats eye infections and inflammation.
<br><strong>Composition</strong>
<br>Neomycin, Polymyxin B, Dexamethasone.
<br><strong>Dosage</strong>
<br>Instill 1-2 drops into the infected eye(s), 4-6 times daily.
<br><strong>Administration</strong>
<br>Apply to the infected eye(s).
<br><strong>Caution</strong>
<br>Store in a cool, dry place; keep out of reach of children.
<br><strong>Contraindications</strong>
<br>Patients hypersensitive to any of the components of this medication.
<br><strong>Side Effects</strong>
<br>Mild stinging or irritation upon initial use.
<br><strong>Product Category</strong>
<br>Prescription Medicine
<br><strong>Packaging</strong>
<br>Per Bottle
<br><strong>Manufactured By</strong>
<br>Cendo
<br><strong>Registration Number</strong>
<br>BPOM: DTL041231233"
]);

Product::create([
    "category_id" => 10,
    "name" => "Insto Regular Eye Drops",
    "patent" => 0,
    "slug" => "insto-regular-eye-drops",
    "stock" => 2500,
    "price" => 25000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong>
<br>Insto Regular Eye Drops are eye drops designed to alleviate dry and mildly irritated eyes.
<br><strong>General Indications</strong>
<br>Reduces dryness and eye irritation.
<br><strong>Composition</strong>
<br>Hydroxypropyl Methylcellulose, Benzalkonium Chloride.
<br><strong>Dosage</strong>
<br>Instill 1-2 drops into the irritated eye(s), up to 4 times daily.
<br><strong>Administration</strong>
<br>Apply to the irritated eye(s).
<br><strong>Caution</strong>
<br>Store in a cool, dry place; keep out of reach of children.
<br><strong>Contraindications</strong>
<br>Patients hypersensitive to any of the components of this medication.
<br><strong>Side Effects</strong>
<br>Mild stinging or irritation upon initial use.
<br><strong>Product Category</strong>
<br>Over-the-Counter Medicine
<br><strong>Packaging</strong>
<br>Per Bottle
<br><strong>Manufactured By</strong>
<br>Combiphar
<br><strong>Registration Number</strong>
<br>BPOM: DTL041231234"
]);

Product::create([
    "category_id" => 10,
    "name" => "Allergan Refresh Tears",
    "patent" => 0,
    "slug" => "allergan-refresh-tears",
    "stock" => 1000,
    "price" => 45000,
    "shortdesc" => "Per Bottle",
    "description" => "
<strong>Description</strong>
<br>Allergan Refresh Tears are eye drops designed to moisturize and provide comfort to dry eyes.
<br><strong>General Indications</strong>
<br>Moisturizes dry eyes.
<br><strong>Composition</strong>
<br>Carboxymethylcellulose Sodium 0.5%.
<br><strong>Dosage</strong>
<br>Instill 1-2 drops into the dry eye(s), as needed.
<br><strong>Administration</strong>
<br>Apply to the dry eye(s).
<br><strong>Caution</strong>
<br>Store in a cool, dry place; keep out of reach of children.
<br><strong>Contraindications</strong>
<br>Patients hypersensitive to any of the components of this medication.
<br><strong>Side Effects</strong>
<br>Mild stinging or irritation upon initial use.
<br><strong>Product Category</strong>
<br>Over-the-Counter Medicine
<br><strong>Packaging</strong>
<br>Per Bottle
<br><strong>Manufactured By</strong>
<br>Allergan
<br><strong>Registration Number</strong>
<br>BPOM: DTL041231235"
]);

    }
}
