<?php

namespace Database\Seeders;

use App\Models\Promotion;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PromotionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $promotions = [
            [
                'shop_id' => 5,
                'image' => 'luxury grey.jpg',
                'old_price' => 19000,
                'new_price' => 15000,
                'description' => 'Promo Flash Sales Idul Fitri',
            ],
            [
                'shop_id' => 9,
                'image' => 'undercover set.jpg',
                'old_price' => 19000,
                'new_price' => 15000,
                'description' => 'Promo Flash Sales Idul Fitri',
            ],
        ];

        foreach ($promotions as $promotion) {
            Promotion::create($promotion);
        }
    }
}
