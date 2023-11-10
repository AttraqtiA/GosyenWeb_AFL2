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
            'company_name' => 'Pandulima Group',
            'location' => 'Jakarta, Surabaya, Bandung',
            'company_logo' => 'pandulima_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Data Utama Dinamika',
            'location' => 'Surabaya',
            'company_logo' => 'datautama_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Pancamanunggal Wiradinamika',
            'location' => 'Semarang',
            'company_logo' => 'pancamanunggal_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Mitsol Teknik Indonesia',
            'location' => 'Surabaya',
            'company_logo' => 'mitsol_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Neoduta Centra Hydraulic Indonesia',
            'location' => 'Jakarta',
            'company_logo' => 'neoduta_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Lima Lima Dinamika',
            'location' => 'Surabaya',
            'company_logo' => 'LL_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Surya Jaya Muliatama',
            'location' => 'Jakarta',
            'company_logo' => 'sjmt_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'CV. Mupakat Aki',
            'location' => 'Pati',
            'company_logo' => 'mupakataki_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Qando Qoaching',
            'location' => 'Jakarta',
            'company_logo' => 'QQ_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Arindo Garmentama',
            'location' => 'Semarang',
            'company_logo' => 'arindo_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Surya Lembah Merkon',
            'location' => 'Boyolali',
            'company_logo' => 'suryalembahmerkon_logo.jpeg',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Masa Baru Guna Persada',
            'location' => 'Kudus',
            'company_logo' => 'masabaru_logo.jpeg',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'The Peak Garage',
            'location' => 'Semarang',
            'company_logo' => 'peakgarage_logo.png',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'CV. Bangun Baru Jaya',
            'location' => 'Semarang',
            'company_logo' => 'bangunbarujaya_logo.jpg',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'Raja Jaya Teknik',
            'location' => 'Kudus',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Sinergi Inti Persada',
            'location' => 'Surabaya',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Wan Bao Long Steel',
            'location' => 'Bekasi',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Riau Perkasa Steel',
            'location' => 'Riau',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'Yayasan Karya insan Sejahtera',
            'location' => 'Jakarta',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'CV. Engoni Tuntang',
            'location' => 'Salatiga',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'CV. Santosa Jayang',
            'location' => 'Pati',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'PT. Energi Yijie Langyu',
            'location' => 'Tangerang',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'UD Iman Sejati',
            'location' => 'Semarang',
            'company_logo' => '',
        ]);
        DB::table("clients")->insert([
            'company_name' => 'CV. Jati Manis',
            'location' => 'Semarang',
            'company_logo' => '',
        ]);
    }
}
