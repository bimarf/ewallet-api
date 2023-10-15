<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tips')->insert([
            [
                'title' => 'Cara menyimpan uang yang baik dan benar',
                'thumbnail' => 'nabung.jpg',
                'url' => 'https://www.cimbniaga.co.id/id/inspirasi/perencanaan/cara-menabung-yang-benar-menurut-pakar-keuangan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cara Berinvestasi emas',
                'thumbnail' => 'emas.jpg',
                'url' => 'https://www.cimbniaga.co.id/id/inspirasi/perencanaan/5-cara-investasi-emas-yang-mudah-bagi-pemula',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Cara menabung',
                'thumbnail' => 'saham.jpg',
                'url' => 'https://www.cnbcindonesia.com/mymoney/20221222074618-72-399080/ini-dia-cara-menabung-yang-efektif-bikin-dompet-tebal',
                'created_at' => now(),
                'updated_at' => now(),
            ]
        ]);
    }
}
