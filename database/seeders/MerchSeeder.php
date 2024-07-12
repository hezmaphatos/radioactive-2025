<?php

namespace Database\Seeders;

use App\Models\Merch;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MerchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Merch::create([
            'name' => 'Turbulent Revolution Tee',
            'description' => 'KAOSBIRU',
            'table' => 1,
            'image1' => '1-KAOSBIRU.webp',
            'image2' => '2-KAOSBIRU.webp',
            'image3' => '3-KAOSBIRU.webp',
            'image4' => '4-KAOSBIRU.webp',
            'image5' => '4-KAOSBIRU.webp',
            'price' => 95000
        ]);

        Merch::create([
            'name' => 'Celestial Revy Tee',
            'description' => 'KAOSPUTIH',
            'table' => 1,
            'image1' => '1-KAOSPUTIH.webp',
            'image2' => '2-KAOSPUTIH.webp',
            'image3' => '3-KAOSPUTIH.webp',
            'image4' => '4-KAOSPUTIH.webp',
            'image5' => '5-KAOSPUTIH.webp',
            'price' => 95000
        ]);

        Merch::create([
            'name' => 'Radioactive Sticker Pack',
            'table' => 0,
            'description' => 'STICKER',
            'image1' => '1-STICKER.webp',
            'image2' => '2-STICKER.webp',
            'image3' => '3-STICKER.webp',
            'image4' => '4-STICKER.webp',
            'image5' => '5-STICKER.webp',
            
            'price' => 15000
        ]);

        Merch::create([
            'name' => 'Revolution Tote Bag',
            'description' => 'TOTEBAG',
            'table' => 0,
            'image1' => '1-TOTEBAG.webp',
            'image2' => '2-TOTEBAG.webp',
            'image3' => '3-TOTEBAG.webp',
            'image4' => '4-TOTEBAG.webp',
            'image5' => '5-TOTEBAG.webp',
            
            'price' => 85000
        ]);

        Merch::create([
            'name' => 'Revy Eggo Tumbler',
            'description' => 'TUMBLER',
            'table' => 0,
            'image1' => '1-TUMBLER.webp',
            'image2' => '2-TUMBLER.webp',
            'image3' => '3-TUMBLER.webp',
            'image4' => '4-TUMBLER.webp',
            'image5' => '5-TUMBLER.webp',
            'price' => 65000
        ]);
        
        Merch::create([
            'name' => 'Bundle Exclusive 1',
            'description' => 'BUNDLE1',
            'table' => 0,
            'image1' => '1-BUNDLE1.webp',
            'image2' => '2-BUNDLE1.webp',
            'image3' => '3-BUNDLE1.webp',
            'image4' => '4-BUNDLE1.webp',
            'image5' => '5-BUNDLE1.webp',
            'price' => 115000
        ]);
        
        Merch::create([
            'name' => 'Bundle Exclusive 2',
            'description' => 'BUNDLE2',
            'table' => 0,
            'image1' => '1-BUNDLE2.webp',
            'image2' => '2-BUNDLE2.webp',
            'image3' => '3-BUNDLE2.webp',
            'image4' => '4-BUNDLE2.webp',
            'image5' => '5-BUNDLE2.webp',
            'price' => 180000
        ]);

        Merch::create([
            'name' => 'Bundle Exclusive 3',
            'description' => 'BUNDLE3',
            'table' => 0,
            'image1' => '1-BUNDLE3.webp',
            'image2' => '2-BUNDLE3.webp',
            'image3' => '3-BUNDLE3.webp',
            'image4' => '4-BUNDLE3.webp',
            'image5' => '5-BUNDLE3.webp',
            'price' => 240000
        ]);

    }
}
