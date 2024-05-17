<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('order')->insert([
            'id_user' => '1',
            'total_order' => '3090000',
            'address' => 'Cà Mau',
        ]);

        DB::table('order')->insert([
            'id_user' => '2',
            'total_order' => '710000',
            'address' => 'Bạc Liêu',
        ]);
        
        DB::table('order')->insert([
            'id_user' => '4',
            'total_order' => '3090000',
            'address' => 'Cần Thơ',
        ]);

        DB::table('order')->insert([
            'id_user' => '5',
            'total_order' => '29290000',
            'address' => 'Sài Gòn',
        ]);

    }
}
