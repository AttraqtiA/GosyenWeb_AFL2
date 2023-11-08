<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("teams")->insert([
            'name' => 'Octa',
            'expertise' => 'Auditor, Accounting Service, Budgeting, Aging Review, Tax Planning, SOP Review',
            'profile_photo' => 'public/karyawan_gosyen/Octa.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Wahyu',
            'expertise' => 'Auditor, Budgeting, Aging Review',
            'profile_photo' => 'public/karyawan_gosyen/Wahyu.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Panji',
            'expertise' => 'Auditor, Accounting Service, Tax Planning, Budgeting, Aging Review, SOP Review
            ',
            'profile_photo' => 'public/karyawan_gosyen/Panji.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Tesa',
            'expertise' => 'Tax Planning, Auditor',
            'profile_photo' => 'public/karyawan_gosyen/Tesa.JPG',
        ]);
        DB::table("teams")->insert([
            'name' => 'Yunita',
            'expertise' => 'Accounting Service, Budgeting, Aging Review',
            'profile_photo' => 'public/karyawan_gosyen/Yunita.JPG',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ika',
            'expertise' => 'Auditor, Budgeting, Aging Review',
            'profile_photo' => 'public/karyawan_gosyen/Ika.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Desy',
            'expertise' => 'Accounting Service, Budgeting, Aging Review',
            'profile_photo' => 'public/karyawan_gosyen/Desy.png',
        ]);
        DB::table("teams")->insert([
            'name' => 'Anggi',
            'expertise' => 'Auditor',
            'profile_photo' => 'public/karyawan_gosyen/Anggi.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ruth',
            'expertise' => 'Auditor, Accounting Service',
            'profile_photo' => 'public/karyawan_gosyen/Ruth.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ropi',
            'expertise' => 'Auditor, Budgeting',
            'profile_photo' => 'public/karyawan_gosyen/Ropi.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Vallen',
            'expertise' => 'Auditor',
            'profile_photo' => 'public/karyawan_gosyen/Vallen.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Daniel',
            'expertise' => 'Auditor, Tax Planning',
            'profile_photo' => 'public/karyawan_gosyen/Daniel.JPG',
        ]);
        DB::table("teams")->insert([
            'name' => 'Shevania',
            'expertise' => 'Auditor',
            'profile_photo' => 'public/karyawan_gosyen/Shevania.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Rifta',
            'expertise' => 'Auditor, Budgeting,  Aging Review, SOP Review',
            'profile_photo' => 'public/karyawan_gosyen/Rifta.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Nurul',
            'expertise' => 'Auditor',
            'profile_photo' => 'public/karyawan_gosyen/Nurul.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Haven',
            'expertise' => 'Auditor',
            'profile_photo' => 'public/karyawan_gosyen/Haven.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ferra',
            'expertise' => 'Auditor, Budgeting, Aging Review',
            'profile_photo' => 'public/karyawan_gosyen/Ferra.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ester',
            'expertise' => ' Auditor, Accounting Service',
            'profile_photo' => 'public/karyawan_gosyen/Ester.JPG',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ulfa',
            'expertise' => 'Auditor',
            'profile_photo' => 'public/karyawan_gosyen/Ulfa.jpeg',
        ]);
    }
}
