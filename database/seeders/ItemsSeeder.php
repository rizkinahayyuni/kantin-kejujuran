<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('items')->insert([
            [
                'name' => 'Sosis',
                'image' => 'https://images.tokopedia.net/img/cache/500-square/product-1/2019/1/23/693881/693881_bf8a27d9-5a14-4a71-bdd8-d469af2a62ad_1152_1152.jpg',
                'desc' => 'Sosis rasa ayam enak sekali',
                'price' => 1500,
            ],
            [
                'name' => 'Risol',
                'image' => 'https://piknikdong.com/wp-content/uploads/2020/04/Resep-Risol-Mayo.jpg',
                'desc' => 'Risol isi sosis dan mayo.',
                'price' => 3000,
            ],
            [
                'name' => 'Air Mineral',
                'image' => 'https://image-cdn.medkomtek.com/Q4a3dSLSLDRujQ_W6X5MLe09etc=/1200x675/smart/klikdokter-media-buckets/medias/1994866/original/062103000_1521023795-Mana-Lebih-Aman-Air-Mineral-Kemasan-atau-Air-Rebusan-By-Tendo-shutterstock.jpg',
                'desc' => 'Air Mineral 600ml',
                'price' => 3000,
            ]
        ]);
    }
}
