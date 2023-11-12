<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table("services")->insert([
            'name' => 'Business Consulting',
            'description' => 'Membantu Anda mengembangkan strategi bisnis yang inovatif dan efektif, menyediakan analisis pasar, perencanaan strategis, dan pengembangan model bisnis yang sesuai dengan tujuan perusahaan Anda. Bawa bisnis anda ke tingkat selanjutnya!',
            'image' => 'business_consult.png',
            'video_link' => '',
        ]);
        DB::table("services")->insert([
            'name' => 'Audit',
            'description' => 'Dengan integritas dan kualitas laporan keuangan, kami memeriksa kepatuhan terhadap standar akuntansi yang berlaku secara menyeluruh, serta memberikan keyakinan kepada Anda untuk mengambil keputusan yang tepat dan melindungi aset perusahaan Anda.',
            'image' => 'audit.png',
            'video_link' => '',
        ]);
        DB::table("services")->insert([
            'name' => 'Financial Statement',
            'description' => 'Menyediakan laporan keuangan yang transparan dan akurat, termasuk neraca, laba rugi, arus kas, laporan perubahan ekuitas, dan catatan-catatan tambahan yang relevan sehingga Anda dapat mengambil keputusan bisnis dengan kepastian dan mengoptimalkan kinerja finansial perusahaan Anda.',
            'image' => 'lap_keuangan.png',
            'video_link' => '',
        ]);
        DB::table("services")->insert([
            'name' => 'Family Business Mentoring',
            'description' => '"Generasi Pertama membangun, Generasi Kedua menikmati, Generasi Ketiga menghancurkan." Membangun sistem manajemen kinerja terintegrasi, berinovasi, serta menerapkan perbaikan berkelanjutan.',
            'image' => 'fambuss_mentoring.png',
            'video_link' => '',
        ]);
        DB::table("services")->insert([
            'name' => 'Employee Coaching',
            'description' => 'Untuk meningkatkan kinerja karyawan melalui aktivitas Outing. Membangun bonding antar karyawan, karakter leadership, kreatif dan inovatif, serta kemampuan untuk beradaptasi di lingkungan kerja.',
            'image' => 'employee_coaching.png',
            'video_link' => 'https://www.youtube.com/embed/DyGMkV52DrA?si=sOhIEq0hEQ2uFamN',
        ]);
        DB::table("services")->insert([
            'name' => 'Accounting Service',
            'description' => 'Membantu Anda dalam pembuatan transaksi pembukuan harian,  bulanan dan tahunan oleh team akuntan profesional sesuai standar akuntansi keuangan yang berlaku.',
            'image' => 'accounting_icon.png',
            'video_link' => '',
        ]);
    }
}
