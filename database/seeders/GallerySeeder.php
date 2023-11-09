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
        ]);
        DB::table("galleries")->insert([
            'image' => 'swipe_home 1.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'swipe_home 3.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'client 2.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'Budi 1.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'office 3.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 1.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 2.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 8.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 5.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 6.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'liburan 9.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'swipe_team 1.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'swipe_team 3.jpg',
        ]);
        DB::table("galleries")->insert([
            'image' => 'swipe_team 2.jpg',
        ]);
    }
}
