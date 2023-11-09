@extends('layouts.main')

@section('content_page')
<section id="about" class="px-6 py-24 md:px-16 lg:p-24 snap-start">
    <h2 class="text-xl text-center mb-3 text-sky-400">SIAPA KAMI</h2>
    <h1 class="text-4xl text-center mb-14 font-bold">Solusi <mark class="bg-amber-300">Strategis</mark> untuk Performa <mark class="bg-amber-300">Bisnis</mark> yang <mark class="bg-amber-300">Kompetitif</mark></h1>

    <div class="flex flex-col lg:flex-row justify-around items-center gap-10 md:gap-20 lg:gap-20">
        <div class="relative w-full h-3/4 lg:w-full lg:h-full bg-no-repeat bg-cover rounded-md shadow-2xl bg-center md:bg-top lg:bg-top">
            <img class="rounded-xl" src="images/Galeri/Budi 1_crop.jpg" alt="gosyen_4" />

            <div class="h-24 md:h-32 lg:h-32 w-fit lg:w-1/2 p-5 hidden_bottom absolute -top-3 -left-3 bg-amber-200 border-t-4 border-amber-500 flex flex-col justify-center items-center rounded-md">
                <div class="flex flex-row items-center">
                    <h1 id="counter" class="text-center text-2xl md: text-6xl lg:text-6xl">10</h1>
                    <h1 class="text-center text-lg md:text-4xl lg:text-4xl">+</h1>
                </div>
                <p class="text-xs md:text-xl lg:text-base text-center">Tahun Pengalaman</p>
            </div>
        </div>

        <div>
            <h3 class="text-justify mb-10">Gosyen Polinator hadir sebagai mitra perusahaan di berbagai industri yang strategis dan terpercaya, menyediakan solusi Konsultasi Bisnis, Audit, Laporan Keuangan, dan Mentoring Perusahaan</h3>
            <div class="mb-10 flex items-center justify-center">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="hidden_bottom bg-sky-500 text-sky-50 p-4 rounded-xl text-center h-fit shadow-lg">Fleksibilitas</div>
                    <div class="hidden_bottom bg-sky-500 text-sky-50 p-4 rounded-xl text-center mt-0 lg:mt-16 h-fit shadow-lg">Kepuasan Klien</div>
                    <div class="hidden_bottom bg-sky-500 text-sky-50 p-4 rounded-xl text-center h-fit shadow-lg">Profesionalisme</div>
                </div>
            </div>
            <p class="text-justify">Sejak awal didirikan, tim Gosyen Polinator telah menjalani pelatihan untuk memberikan performa yang optimal, profesional, inovatif, berorientasi pada hasil, dan memiliki pengetahuan yang luas untuk kepentingan klien</p>
        </div>
    </div>
</section>

<section id="misi" class="snap-start bg-[url('images/Galeri/swipe_home 2.jpg')] md:bg-[url('images/Galeri/office 1.jpg')] bg-no-repeat bg-cover bg-center lg:bg-top">
    <div class="px-6 py-24 md:px-16 lg:p-24 relative bg-black h-full opacity-75">
        <h2 class="text-xl text-center md:text-left lg:text-left mb-3 text-sky-400">MISI KAMI</h2>
        <h2 class="text-center md:text-left lg:text-left mb-20 text-4xl font-bold text-sky-50">Sebagai Mitra <mark class="bg-amber-300">Terdepan</mark> untuk <mark class="bg-amber-300">Kesuksesan</mark> Perusahaan,</h2>

        <div class="flex flex-col md:flex-row lg:flex-row mb-24 gap-24">
            <div class="hidden_left w-full md:w-1/2 lg:w-1/2 text-center md:text-left lg:text-left text-sky-50">
                <p>Memberikan layanan konsultasi bisnis yang inovatif dan berorientasi pada hasil untuk membantu perusahaan mencapai <span class="underline underline-offset-4">pertumbuhan yang berkelanjutan</span></p>
            </div>
            <div class="hidden_right w-full md:w-1/2 lg:w-1/2 text-center md:text-right lg:text-right text-sky-50">
                <p>Melakukan audit guna memberikan <span class="underline underline-offset-4">keyakinan terhadap integritas</span> serta keberlangsungan bisnis</p>
            </div>
        </div>
        <div class="flex flex-col md:flex-row lg:flex-row mb-24 gap-24">
            <div class="hidden_left w-full md:w-1/2 lg:w-1/2 text-center md:text-left lg:text-left text-sky-50">
                <p>Menghasilkan laporan keuangan yang transparan, terpercaya, dan relevan guna <span class="underline underline-offset-4">mendukung pengambilan keputusan bisnis</span> dengan tepat dan optimal</p>
            </div>
            <div class="hidden_right w-full md:w-1/2 lg:w-1/2 text-center md:text-right lg:text-right text-sky-50">
                <p>Melayani <span class="underline underline-offset-4">pelatihan SDM</span> berupa pendampingan atau mentoring Family Business maupun Coaching karyawan untuk kinerja bisnis yang optimal</p>
            </div>
        </div>
        <div class="hidden_bottom text-sky-50 text-center">
            <p class="text-xl font-medium">Membangun <span class="underline underline-offset-4">hubungan jangka panjang</span> dengan klien berdasarkan kepercayaan, kejujuran, dan profesionalisme</p>
        </div>
    </div>
</section>
@endsection
