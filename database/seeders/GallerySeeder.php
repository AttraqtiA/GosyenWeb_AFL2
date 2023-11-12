<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GallerySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("galleries")->insert([
            'image' => 'swipe_home 2.jpg',
            'caption' => 'Jakarta'
        ]);
        DB::table("galleries")->insert([
            'image' => 'swipe_home 1.jpg',
            'caption' => 'Jakarta'
        ]);
        DB::table("galleries")->insert([
            'image' => 'swipe_home 3.jpg',
            'caption' => 'with Qando Qoaching'
        ]);
        DB::table("galleries")->insert([
            'image' => 'client 2.jpg',
            'caption' => 'with PT. Energi Yijie Langyu'
        ]);
        DB::table("galleries")->insert([
            'image' => 'Budi 1.jpg',
            'caption' => 'Mr. Budi : Leader of Gosyen Polinator'
        ]);
        DB::table("galleries")->insert([
            'image' => 'office 3.png',
            'caption' => 'Team'
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 1.jpg',
            'caption' => 'Karimun Jawa'
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 2.jpg',
            'caption' => 'Karimun Jawa Holiday'
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 8.jpg',
            'caption' => 'Full Team Holiday'
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 5.jpg',
            'caption' => 'Full Team Holiday'
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 6.jpg',
            'caption' => 'Holiday Selfie'
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 9.jpg',
            'caption' => 'Diving'
        ]);
        DB::table("galleries")->insert([
            'image' => 'swipe_team 1.jpg',
            'caption' => 'Full Team at Office'
        ]);
        DB::table("galleries")->insert([
            'image' => 'swipe_team 3.jpg',
            'caption' => 'Diving'
        ]);
        DB::table("galleries")->insert([
            'image' => 'swipe_team 2.jpg',
            'caption' => 'Full Team Holiday'
        ]);
    }
}
