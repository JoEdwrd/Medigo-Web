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
    'name' => 'Chinesse New Year Flash Sale - Up to 50% Off!',
    'slug' => 'chinesse-new-year-flash-sale-50',
    'code' => 'CNY50OFF',
    'shortdecs' => 'Limited Time Offer!',
    'startdate' => '2025-01-29',
    'enddate' => '2025-01-30',
    'discount' => 0.5,
    'terms' => "Celebrate Chinese New Year with up to 50% off! Take advantage of this opportunity to purchase your medicine stock at special prices. This offer is valid from January 29th to January 30th, 2025. Don't miss out!",
]);

Promotion::create([
    'name' => 'Welcome 2025 Offer - 10% Off!',
    'slug' => 'welcome-2025-offer',
    'code' => '1STDAY2025',
   'shortdecs' => 'Only for first day in 2025!',
    'startdate' => '2025-01-01',
    'enddate' => '2025-01-02',
    'discount' => 0.1,
    'terms' => 'Welcome! Get a 10% discount on your purchases on the first day of this year with promo code 1STDAY2025. This offer is valid only for users on January 1st, 2025. Start your shopping experience in the new year with savings!',
]);

Promotion::create([
    'name' => 'Buy One Get One Independence Day Sale!',
    'slug' => 'buy-one-get-one-independence-day-sale',
    'code' => 'BOGO05',
    'shortdecs' => 'Limited for indepence day only!',
    'startdate' => '2024-08-17',
    'enddate' => '2024-08-18',
    'discount' => 0.5,
    'terms' => 'Get a special Buy One Get One Free offer for all users on Independence Day! Use promo code BOGO05 to enjoy this offer from August 17th to August 18th, 2024. Buy one product and get another one for free!',
]);

Promotion::create([
    'name' => 'Summer Clearance Sale - Up to 70% Off!',
    'slug' => 'summer-clearance-sale',
    'code' => 'SUMMER70',
    'shortdecs' => 'Limited time offer!',
    'startdate' => '2024-07-01',
    'enddate' => '2024-07-15',
    'discount' => 0.7,
    'terms' => "Don't miss out on the opportunity to get up to 70% off in our Summer Clearance Sale! This offer is valid only from July 1st to July 15th, 2024. Get your favorite summer products at the best prices now!",
]);

Promotion::create([
    'name' => 'Back-to-School Special - Buy One Get One Free!',
    'slug' => 'back-to-school-bogo',
    'code' => 'BTSBOGO',
    'shortdecs' => 'Limited time offer for 1 month only!',
    'startdate' => '2024-08-15',
    'enddate' => '2024-09-15',
    'discount' => 0.5,
    'terms' => "Get ready for the new school year with our special Buy One Get One Free offer! Use promo code BTSBOGO to avail of this discount from August 15th to September 15th, 2024. This offer is exclusively for 1 month, so don't miss out!",
]);

Promotion::create([
    'name' => 'Winter Warm-up Sale - 25% Off    !',
    'slug' => 'winter-warmup-sale',
    'code' => 'WINTER25',
    'shortdecs' => 'Stay cozy and save!',
    'startdate' => '2024-11-01',
    'enddate' => '2024-11-30',
    'discount' => 0.25,
    'terms' => 'Prepare yourself for the cold weather with a 25% discount on all medicines in our Winter Warm-up Sale! Use promo code WINTER25 at checkout to enjoy this discount throughout the month of November. Stay healthy and save!',
]);

Promotion::create([
    'name' => 'Holiday Gift Bonanza - 20% Off Everything!',
    'slug' => 'holiday-gift-bonanza',
    'code' => 'HOLIDAY20',
    'shortdecs' => 'Spread joy and savings this holiday season!',
    'startdate' => '2024-12-10',
    'enddate' => '2024-12-25',
    'discount' => 0.2,
    'terms' => 'Make your holiday medicine shopping more festive with a 20% discount on all products! Use promo code HOLIDAY20 from December 10th to December 25th, 2024, to enjoy this discount. Spread happiness and savings this holiday season!',
]);

    }
}
