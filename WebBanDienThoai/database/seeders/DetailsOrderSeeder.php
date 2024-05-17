<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailsOrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('detailsorder')->insert([
            'id_order' => '1',
            'id_product' => '1',
            'quantity_detailsorder' => '3090000',
        ]);

        DB::table('detailsorder')->insert([
            'id_order' => '2',
            'id_product' => '2',
            'quantity_detailsorder' => '710000',
        ]);

        DB::table('detailsorder')->insert([
            'id_order' => '3',
            'id_product' => '4',
            'quantity_detailsorder' => '3090000',
        ]);

        DB::table('detailsorder')->insert([
            'id_order' => '4',
            'id_product' => '3',
            'quantity_detailsorder' => '29290000',
        ]);

        DB::table('detailsorder')->insert([
            'id_order' => '1',
            'id_product' => '5',
            'quantity_detailsorder' => '1000000',
        ]);

        DB::table('detailsorder')->insert([
            'id_order' => '2',
            'id_product' => '6',
            'quantity_detailsorder' => '710000',
        ]);

        DB::table('detailsorder')->insert([
            'id_order' => '3',
            'id_product' => '7',
            'quantity_detailsorder' => '19290000',
        ]);

        DB::table('detailsorder')->insert([
            'id_order' => '4',
            'id_product' => '8',
            'quantity_detailsorder' => '39290000',
        ]);
    }
}
