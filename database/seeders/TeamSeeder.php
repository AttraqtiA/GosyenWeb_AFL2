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
            'profile_photo' => 'Octa_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Wahyu',
            'expertise' => 'Auditor, Budgeting, Aging Review',
            'profile_photo' => 'Wahyu_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Panji',
            'expertise' => 'Auditor, Accounting Service, Tax Planning, Budgeting, Aging Review, SOP Review
            ',
            'profile_photo' => 'Panji_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Tesa',
            'expertise' => 'Tax Planning, Auditor',
            'profile_photo' => 'Tesa_cropped.JPG',
        ]);
        DB::table("teams")->insert([
            'name' => 'Yunita',
            'expertise' => 'Accounting Service, Budgeting, Aging Review',
            'profile_photo' => 'Yunita_cropped.JPG',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ika',
            'expertise' => 'Auditor, Budgeting, Aging Review',
            'profile_photo' => 'Ika_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Desy',
            'expertise' => 'Accounting Service, Budgeting, Aging Review',
            'profile_photo' => 'Desy_cropped.png',
        ]);
        DB::table("teams")->insert([
            'name' => 'Anggi',
            'expertise' => 'Auditor',
            'profile_photo' => 'Anggi_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ruth',
            'expertise' => 'Auditor, Accounting Service',
            'profile_photo' => 'Ruth_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ropi',
            'expertise' => 'Auditor, Budgeting',
            'profile_photo' => 'Ropi_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Vallen',
            'expertise' => 'Auditor',
            'profile_photo' => 'Vallen_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Daniel',
            'expertise' => 'Auditor, Tax Planning',
            'profile_photo' => 'Daniel_cropped.JPG',
        ]);
        DB::table("teams")->insert([
            'name' => 'Shevania',
            'expertise' => 'Auditor',
            'profile_photo' => 'Shevania_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Rifta',
            'expertise' => 'Auditor, Budgeting,  Aging Review, SOP Review',
            'profile_photo' => 'Rifta_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Nurul',
            'expertise' => 'Auditor',
            'profile_photo' => 'Nurul_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Haven',
            'expertise' => 'Auditor',
            'profile_photo' => 'Haven_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ferra',
            'expertise' => 'Auditor, Budgeting, Aging Review',
            'profile_photo' => 'Ferra_cropped.jpeg',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ester',
            'expertise' => ' Auditor, Accounting Service',
            'profile_photo' => 'Ester_cropped.JPG',
        ]);
        DB::table("teams")->insert([
            'name' => 'Ulfa',
            'expertise' => 'Auditor',
            'profile_photo' => 'Ulfa_cropped.jpeg',
        ]);
    }
}
