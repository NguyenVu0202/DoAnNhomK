<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'vu',
            'email' => 'vu@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '0123456789',
            'address' => 'Đ.Võ Văn Ngân, Phường Linh Chiểu, Quận Thủ Đức, Thành phố Hồ Chí Minh',
            'image' => 'anh-dep-40.jpg',
        ]);

        DB::table('users')->insert([
            'name' => 'thanh',
            'email' => 'thanh@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '0123456789',
            'address' => 'Đ.Võ Văn Ngân, Phường Linh Chiểu, Quận Thủ Đức, Thành phố Hồ Chí Minh',
            'image' => 'anh-dep-40.jpg',
        ]);
        
        DB::table('users')->insert([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin'),
            'phone' => '1278912321',
            'address' => 'Thành phố Hồ Chí Minh',
            'image' => 'anh-dep-40.jpg',
        ]);

        DB::table('users')->insert([
            'name' => 'nhu',
            'email' => 'nhu@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '0123456788',
            'address' => 'Đ.Võ Văn Ngân, Phường Linh Chiểu, Quận Thủ Đức, Thành phố Hồ Chí Minh',
            'image' => 'anh-dep-40.jpg',
        ]);

        DB::table('users')->insert([
            'name' => 'hoang',
            'email' => 'hoang@gmail.com',
            'password' => Hash::make('123456'),
            'phone' => '0123456787',
            'address' => 'Đ.Võ Văn Ngân, Phường Linh Chiểu, Quận Thủ Đức, Thành phố Hồ Chí Minh',
            'image' => 'anh-dep-40.jpg',
        ]);
    }
}
