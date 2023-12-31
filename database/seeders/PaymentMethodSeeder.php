<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class PaymentMethodSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('payment_methods')->insert([
            [
                'name' => 'Bank BWA',
                'code' => 'bwa',
                'status' => 'active',
                'thumbnail' => 'bwa.png',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Bank BNI',
                'code' => 'bni_va',
                'status' => 'active',
                'thumbnail' => 'bni.png',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Bank BCA',
                'code' => 'bca_va',
                'status' => 'active',
                'thumbnail' => 'bca.png',
                'created_at' => now(),
                'updated_at' => now(),

            ],
            [
                'name' => 'Bank BRI',
                'code' => 'bri_va',
                'status' => 'active',
                'thumbnail' => 'bri.png',
                'created_at' => now(),
                'updated_at' => now(),

            ],
        ]);
    }
}
