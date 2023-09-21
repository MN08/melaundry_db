<?php

namespace Database\Seeders;

use App\Models\Shop;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $shops = [
            [
                'name' => 'Aquosh Seed',
                'images' => 'aquosh seed.jpg',
                'location' => 'Jl. Otto tomato No. 1',
                'city' => 'Garut',
                'delivery' => 0,
                'pickup' => 0,
                'whatsapp' => '620812345681',
                'description' => 'Laundry refers to the washing of clothing and other textiles, and, more broadly, their drying and ironing as well. Laundry has been part of history since humans began to wear clothes, so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.',
                'price' => 17000,
                'rate' => 4.1,
            ],
            [
                'name' => 'Blue White Lock',
                'images' => 'blue white lock.jpg',
                'location' => 'Jl. Sumbawa no 40',
                'city' => 'Bandung',
                'delivery' => 0,
                'pickup' => 1,
                'whatsapp' => '620812345672',
                'description' => 'Laundry refers to the washing of clothing and other textiles, and, more broadly, their drying and ironing as well. Laundry has been part of history since humans began to wear clothes, so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.',
                'price' => 23000,
                'rate' => 4.3,
            ],
            [
                'name' => 'Cling Set',
                'images' => 'cling set.jpg',
                'location' => 'Jl. Papasakan No. 3',
                'city' => 'Garut',
                'delivery' => 0,
                'pickup' => 0,
                'whatsapp' => '620812345679',
                'description' => 'Laundry refers to the washing of clothing and other textiles, and, more broadly, their drying and ironing as well. Laundry has been part of history since humans began to wear clothes, so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.',
                'price' => 15000,
                'rate' => 4.2,
            ],
            [
                'name' => 'Escape D Laundry',
                'images' => 'escape d laundry.jpg',
                'location' => 'Jl. Situhapa No. 34',
                'city' => 'Jakarta',
                'delivery' => 1,
                'pickup' => 1,
                'whatsapp' => '620812345678',
                'description' => 'Laundry refers to the washing of clothing and other textiles, and, more broadly, their drying and ironing as well. Laundry has been part of history since humans began to wear clothes, so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.',
                'price' => 31000,
                'rate' => 4.9,
            ],
            [
                'name' => 'Luxury Grey',
                'images' => 'luxury grey.jpg',
                'location' => 'Jl. Suniaraja No. 51',
                'city' => 'Jakarta',
                'delivery' => 0,
                'pickup' => 0,
                'whatsapp' => '620812345673',
                'description' => 'Laundry refers to the washing of clothing and other textiles, and, more broadly, their drying and ironing as well. Laundry has been part of history since humans began to wear clothes, so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.',
                'price' => 16000,
                'rate' => 4.0,
            ],
            [
                'name' => 'Maclean Jet',
                'images' => 'maclean jet.jpg',
                'location' => 'Urug lost way street No. 23',
                'city' => 'Garut',
                'delivery' => 1,
                'pickup' => 1,
                'whatsapp' => '620812345678',
                'description' => 'Laundry refers to the washing of clothing and other textiles, and, more broadly, their drying and ironing as well. Laundry has been part of history since humans began to wear clothes, so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.',
                'price' => 20000,
                'rate' => 4.5,
            ],
            [
                'name' => 'Rubber Wil',
                'images' => 'rubber wil.jpg',
                'location' => 'Jl. Sucinaraja No. 1',
                'city' => 'Surabaya',
                'delivery' => 1,
                'pickup' => 1,
                'whatsapp' => '620812345674',
                'description' => 'Laundry refers to the washing of clothing and other textiles, and, more broadly, their drying and ironing as well. Laundry has been part of history since humans began to wear clothes, so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.',
                'price' => 19500,
                'rate' => 4.1,
            ],
            [
                'name' => 'Street Brush',
                'images' => 'street brush.jpg',
                'location' => 'Jl. kebon Jati No. 3',
                'city' => 'Bandung',
                'delivery' => 0,
                'pickup' => 0,
                'whatsapp' => '620812345677',
                'description' => 'Laundry refers to the washing of clothing and other textiles, and, more broadly, their drying and ironing as well. Laundry has been part of history since humans began to wear clothes, so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.',
                'price' => 20000,
                'rate' => 4.2,
            ],
            [
                'name' => 'Undercover Set',
                'images' => 'undercover set.jpg',
                'location' => 'Jl. kebon Jati No. 3',
                'city' => 'Bandung',
                'delivery' => 0,
                'pickup' => 0,
                'whatsapp' => '620812345675',
                'description' => 'Laundry refers to the washing of clothing and other textiles, and, more broadly, their drying and ironing as well. Laundry has been part of history since humans began to wear clothes, so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.',
                'price' => 20000,
                'rate' => 4.2,
            ],
            [
                'name' => 'White Room',
                'images' => 'white room.jpg',
                'location' => 'Jl. Cicendo No. 1',
                'city' => 'Bandung',
                'delivery' => 1,
                'pickup' => 1,
                'whatsapp' => '620812345676',
                'description' => 'Laundry refers to the washing of clothing and other textiles, and, more broadly, their drying and ironing as well. Laundry has been part of history since humans began to wear clothes, so the methods by which different cultures have dealt with this universal human need are of interest to several branches of scholarship.',
                'price' => 22000,
                'rate' => 4.4,
            ],
        ];

        foreach ($shops as $shop) {
            Shop::create($shop);
        }
    }
}
