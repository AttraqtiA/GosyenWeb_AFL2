<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("clients")->insert([
            'company_name' => 'Pandulima Group (JKT, SBY, BDG)',
            'location' => '',
            'company_logo' => 'public/images/pandulima_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Data Utama Dinamika',
            'location' => '',
            'company_logo' => 'public/images/datautama_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Pancamanunggal Wiradinamika',
            'location' => '',
            'company_logo' => 'public/images/pancamanunggal_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Mitsol Teknik Indonesia',
            'location' => '',
            'company_logo' => 'public/images/mitsol_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Neoduta Centra Hydraulic Indonesia ',
            'location' => '',
            'company_logo' => 'public/images/neoduta_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Lima Lima Dinamika',
            'location' => '',
            'company_logo' => 'public/images/LL_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Surya Jaya Muliatama',
            'location' => '',
            'company_logo' => 'public/images/sjmt_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'CV. Mupakat Aki',
            'location' => '',
            'company_logo' => 'public/images/mupakataki_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Qando Qoaching',
            'location' => '',
            'company_logo' => 'public/images/QQ_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Arindo Garmentama',
            'location' => '',
            'company_logo' => 'public/images/arindo_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'Raja Jaya Teknik',
            'location' => '',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Sinergi Inti Persada ',
            'location' => '',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Wan Bao Long Steel ',
            'location' => '',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Riau Perkasa Steel',
            'location' => '',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'Yayasan Karya insan Sejahtera',
            'location' => '',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'CV. Engoni Tuntang',
            'location' => '',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'CV. Santosa Jayang',
            'location' => '',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Surya Lembah Merkon',
            'location' => '',
            'company_logo' => '',
        ]);

    }
}
