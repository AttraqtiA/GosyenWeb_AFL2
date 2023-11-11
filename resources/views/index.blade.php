@extends('layouts.navbar_pure')

@section('content_page')
<div id="indicators-carousel" class="relative w-full" data-carousel="slide">
    <div class="relative h-56 overflow-hidden md:h-96">
        <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
            <img src="images/Galeri/{{ $carousel_1 }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-top"
                alt="{{ $carousel_1 }}">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/Galeri/{{ $carousel_2 }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-top"
                alt="{{ $carousel_2 }}">
        </div>
        <div class="hidden duration-700 ease-in-out" data-carousel-item>
            <img src="images/Galeri/{{ $carousel_3 }}"
                class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-top"
                alt="{{ $carousel_3 }}">
        </div>
    </div>
    <div class="absolute z-30 flex space-x-3 -translate-x-1/2 bottom-5 left-1/2">
        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1"
            data-carousel-slide-to="0"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2"
            data-carousel-slide-to="1"></button>
        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3"
            data-carousel-slide-to="2"></button>
    </div>
    <button type="button"
        class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-prev>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M5 1 1 5l4 4" />
            </svg>
            <span class="sr-only">Previous</span>
        </span>
    </button>
    <button type="button"
        class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none"
        data-carousel-next>
        <span
            class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 dark:bg-gray-800/30 group-hover:bg-white/50 dark:group-hover:bg-gray-800/60 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true"
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="m1 9 4-4-4-4" />
            </svg>
            <span class="sr-only">Next</span>
        </span>
    </button>
</div>

<div class="px-6 py-24 md:px-16 lg:p-24">
    <h2 class="text-xl text-center mb-3 text-sky-600">SIAPA KAMI</h2>
    <h1 class="text-4xl text-center mb-14 font-bold">Solusi <mark class="text-gray-800 bg-sky-300">Strategis</mark> untuk Performa <mark class="text-gray-800 bg-sky-300">Bisnis</mark> yang <mark class="text-gray-800 bg-sky-300">Kompetitif</mark></h1>

    <div class="flex flex-col lg:flex-row justify-around items-center gap-10 md:gap-20 lg:gap-20">
        <div class="relative w-full h-3/4 lg:w-full lg:h-full bg-no-repeat bg-cover rounded-md shadow-2xl bg-center md:bg-top lg:bg-top">
            <img class="rounded-xl" src="images/Galeri/Budi 1_crop.jpg" alt="gosyen_4" />

            <div class="h-24 md:h-32 lg:h-32 w-fit lg:w-1/2 p-5 hidden_bottom absolute -bottom-3 -left-3 bg-sky-300 border-4 border-sky-500 flex flex-col justify-center items-center rounded-md">
                <div class="flex flex-row items-center">
                    <h1 id="counter" class="text-center text-2xl md: text-4xl lg:text-6xl">10</h1>
                    <h1 class="text-center text-lg md:text-4xl lg:text-4xl">+</h1>
                </div>
                <p class="text-xs md:text-xl lg:text-base text-center">Tahun Pengalaman</p>
            </div>
        </div>

        <div>

            <h3 class="text-justify mb-8">Gosyen Polinator hadir sebagai mitra perusahaan di berbagai industri yang strategis dan terpercaya, menyediakan solusi Konsultasi Bisnis, Audit, Laporan Keuangan, dan Mentoring Perusahaan</h3>

            <p class="text-justify mb-16">Sejak awal didirikan, tim Gosyen Polinator telah menjalani pelatihan untuk memberikan performa yang optimal, profesional, inovatif, berorientasi pada hasil, dan memiliki pengetahuan yang luas untuk kepentingan klien</p>
            <div class="mb-10 flex items-center justify-center">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div class="hidden_bottom bg-sky-500 text-sky-50 p-4 rounded-xl text-center h-fit shadow-lg">Fleksibilitas</div>
                    <div class="hidden_bottom bg-sky-500 text-sky-50 p-4 rounded-xl text-center h-fit shadow-lg">Kepuasan Klien</div>
                    <div class="hidden_bottom bg-sky-500 text-sky-50 p-4 rounded-xl text-center h-fit shadow-lg">Profesionalisme</div>
                </div>
            </div>
        </div>
    </div>
</div>



<section style="background-image: url('images/Galeri/swipe_home 2.jpg')" class="bg-center bg-no-repeat bg-[url('../public/images/Galeri/swipe_home 2.jpg')] bg-gray-700 bg-blend-multiply">
    <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
        <h2 class="text-xl text-center mb-3 text-sky-600">MISI KAMI</h2>
        <h2 class="text-center mb-20 text-4xl font-bold text-sky-50">Sebagai Mitra <mark class="text-gray-800 bg-sky-300">Terdepan</mark> untuk <mark class="text-gray-800 bg-sky-300">Kesuksesan</mark> Perusahaan,</h2>

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



{{-- <section id="services" class="snap-start">
    <div class="px-6 py-24 md:px-16 lg:p-24">
        <h2 class="text-xl text-center mb-3 text-sky-400">LAYANAN KAMI</h2>
        <h2 class="text-center mb-20 lg:mb-28 text-4xl font-bold">Program & Layanan <mark class="bg-amber-300">Unggulan</mark> yang <mark class="bg-amber-300"><i>Next Level&nbsp;</i></mark> </h2>

        <div class="mx-0 md:mx-10 lg:mx-32 relative grid grid-cols-1 md:grid-cols-2 gap-24">

            <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[550px] lg:hover:h-[450px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-2 md:p-4 lg:p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <img src="images/business_consult.png" alt="" class="mx-auto mb-5 w-20">
                    <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                </div>
                <div class="m-auto back w-3/4 relative opacity-0">
                    <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Business Consulting</h1>
                    <p class="pt-4 text-center">Membantu Anda mengembangkan strategi bisnis yang inovatif dan efektif, menyediakan analisis pasar, perencanaan strategis, dan pengembangan model bisnis yang sesuai dengan tujuan perusahaan Anda. Bawa bisnis anda ke tingkat selanjutnya!</p>
                </div>
            </div>

            <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[500px] lg:hover:h-[400px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <img src="images/audit.png" alt="" class="mx-auto mb-5 w-20">
                    <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                </div>
                <div class="m-auto back w-3/4 absolute opacity-0">
                    <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Audit</h1>
                    <p class="pt-4 text-center">Dengan integritas dan kualitas laporan keuangan, kami memeriksa kepatuhan terhadap standar akuntansi yang berlaku secara menyeluruh, serta memberikan keyakinan kepada Anda untuk mengambil keputusan yang tepat dan melindungi aset perusahaan Anda.</p>
                </div>
            </div>

            <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[550px] lg:hover:h-[450px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <img src="images/lap_keuangan.png" alt="" class="mx-auto mb-5 w-20">
                    <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                </div>
                <div class="m-auto back w-3/4 absolute opacity-0">
                    <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Financial Statement</h1>
                    <p class="pt-4 text-center">Menyediakan laporan keuangan yang transparan dan akurat, termasuk neraca, laba rugi, arus kas, laporan perubahan ekuitas, dan catatan-catatan tambahan yang relevan sehingga Anda dapat mengambil keputusan bisnis dengan kepastian dan mengoptimalkan kinerja finansial perusahaan Anda.</p>
                </div>
            </div>

            <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[600px] lg:hover:h-[400px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <img src="images/fambuss_mentoring.png" alt="" class="mx-auto mb-5 w-20">
                    <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                </div>
                <div class="m-auto back w-3/4 absolute opacity-0">
                    <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Family Business Mentoring</h1>
                    <p class="pt-4 text-center"><i class="font-semibold">Generasi Pertama membangun, Generasi Kedua menikmati, Generasi Ketiga menghancurkan"</i> <br><br>Membangun sistem manajemen kinerja terintegrasi, berinovasi, serta menerapkan perbaikan berkelanjutan.</p>
                </div>
            </div>

            <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[500px] lg:hover:h-[400px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <img src="images/employee_coaching.png" alt="" class="mx-auto mb-5 w-20">
                    <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                </div>
                <div class="m-auto back w-3/4 absolute opacity-0">
                    <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Employee Coaching</h1>
                    <p class="pt-4 text-center">Untuk meningkatkan kinerja karyawan melalui aktivitas <i>Outing</i>. Membangun bonding antar karyawan, karakter leadership, kreatif dan inovatif, serta kemampuan untuk beradaptasi di lingkungan kerja.</p>
                </div>
            </div>

            <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[500px] lg:hover:h-[400px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                    <img src="images/employee_coaching.png" alt="" class="mx-auto mb-5 w-20">
                    <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                </div>
                <div class="m-auto back w-3/4 absolute opacity-0">
                    <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Accounting Service</h1>
                    <p class="pt-4 text-center">Membantu Anda dalam pembuatan transaksi pembukuan harian,  bulanan dan tahunan oleh team akuntan profesional sesuai standar akuntansi keuangan yang berlaku.</p>
                </div>
            </div>
        </div>
    </div>

</section> --}}

@endsection
