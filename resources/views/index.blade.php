@extends('layouts.navbar_pure')

@section('content_page')
    <div id="indicators-carousel" class="relative w-full" data-carousel="slide">
        <div class="relative h-56 overflow-hidden md:h-96">
            <div class="hidden duration-700 ease-in-out" data-carousel-item="active">
                <img src="images/Galeri/{{ $carousel_1 }}"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover object-top"
                    alt="{{ $carousel_1 }}">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/Galeri/{{ $carousel_2 }}"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover object-top"
                    alt="{{ $carousel_2 }}">
            </div>
            <div class="hidden duration-700 ease-in-out" data-carousel-item>
                <img src="images/Galeri/{{ $carousel_3 }}"
                    class="absolute block w-full h-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 object-cover object-top"
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
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
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
                <svg class="w-4 h-4 text-white dark:text-gray-800" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                    fill="none" viewBox="0 0 6 10">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="m1 9 4-4-4-4" />
                </svg>
                <span class="sr-only">Next</span>
            </span>
        </button>
    </div>

    <div class="px-6 py-24 md:px-16 lg:p-24">
        <h2 class="text-xl text-center mb-3 text-sky-600">SIAPA KAMI</h2>
        <h1 class="text-4xl text-center mb-14 font-bold">Solusi <mark
                class="px-2 text-sky-400 bg-gray-800 rounded dark:bg-gray-800">Strategis</mark>
            untuk Performa <mark class="px-2 text-sky-400 bg-gray-800 rounded dark:bg-gray-800">Bisnis</mark> yang <mark
                class="px-2 text-sky-400 bg-gray-800 rounded dark:bg-gray-800">Kompetitif</mark></h1>

        <div class="flex flex-col lg:flex-row justify-around items-center gap-10 md:gap-20 lg:gap-20">
            <div
                class="relative w-full h-3/4 lg:w-full lg:h-full bg-no-repeat bg-cover rounded-md shadow-2xl bg-center md:bg-top lg:bg-top">
                <img class="rounded-xl" src="images/Galeri/Budi 1_crop.jpg" alt="gosyen_4" />

                <div
                    class="h-24 md:h-32 lg:h-32 w-fit lg:w-1/2 p-5 hidden_bottom absolute -bottom-3 -left-3 bg-sky-300 border-4 border-sky-500 flex flex-col justify-center items-center rounded-md">
                    <div class="flex flex-row items-center">
                        <h1 id="counter" class="text-center text-2xl md: text-4xl lg:text-6xl">10</h1>
                        <h1 class="text-center text-lg md:text-4xl lg:text-4xl">+</h1>
                    </div>
                    <p class="text-xs md:text-xl lg:text-base text-center">Tahun Pengalaman</p>
                </div>
            </div>

            <div>

                <h3 class="text-justify mb-8">Gosyen Polinator hadir sebagai mitra perusahaan di berbagai industri yang
                    strategis dan terpercaya, menyediakan solusi Konsultasi Bisnis, Audit, Laporan Keuangan, dan Mentoring
                    Perusahaan</h3>

                <p class="text-justify mb-16">Sejak awal didirikan, tim Gosyen Polinator telah menjalani pelatihan untuk
                    memberikan performa yang optimal, profesional, inovatif, berorientasi pada hasil, dan memiliki
                    pengetahuan yang luas untuk kepentingan klien</p>
                <div class="mb-10 flex items-center justify-center">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <div class="hidden_bottom bg-sky-500 text-sky-50 p-4 rounded-xl text-center h-fit shadow-lg">
                            Fleksibilitas</div>
                        <div class="hidden_bottom bg-sky-500 text-sky-50 p-4 rounded-xl text-center h-fit shadow-lg">
                            Kepuasan Klien</div>
                        <div class="hidden_bottom bg-sky-500 text-sky-50 p-4 rounded-xl text-center h-fit shadow-lg">
                            Profesionalisme</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section style="background-image: url('images/Galeri/swipe_home 2.jpg')"
        class="bg-center bg-cover bg-no-repeat bg-[url('../public/images/Galeri/swipe_home 2.jpg')] bg-gray-700 bg-blend-multiply">
        <div class="px-4 mx-auto max-w-screen-xl text-center py-24 lg:py-56">
            <h2 class="text-xl text-center mb-3 text-sky-600">MISI KAMI</h2>
            <h2 class="text-center mb-20 text-4xl font-bold text-sky-50">Sebagai Mitra <mark
                    class="text-gray-800 bg-sky-300">Terdepan</mark> untuk <mark
                    class="text-gray-800 bg-sky-300">Kesuksesan</mark> Perusahaan,</h2>

            <div class="flex flex-col md:flex-row lg:flex-row mb-24 gap-24">
                <div class="hidden_left w-full md:w-1/2 lg:w-1/2 text-center md:text-left lg:text-left text-sky-50">
                    <p>Memberikan layanan konsultasi bisnis yang inovatif dan berorientasi pada hasil untuk membantu
                        perusahaan mencapai <span class="underline underline-offset-4">pertumbuhan yang berkelanjutan</span>
                    </p>
                </div>
                <div class="hidden_right w-full md:w-1/2 lg:w-1/2 text-center md:text-right lg:text-right text-sky-50">
                    <p>Melakukan audit guna memberikan <span class="underline underline-offset-4">keyakinan terhadap
                            integritas</span> serta keberlangsungan bisnis</p>
                </div>
            </div>
            <div class="flex flex-col md:flex-row lg:flex-row mb-24 gap-24">
                <div class="hidden_left w-full md:w-1/2 lg:w-1/2 text-center md:text-left lg:text-left text-sky-50">
                    <p>Menghasilkan laporan keuangan yang transparan, terpercaya, dan relevan guna <span
                            class="underline underline-offset-4">mendukung pengambilan keputusan bisnis</span> dengan tepat
                        dan optimal</p>
                </div>
                <div class="hidden_right w-full md:w-1/2 lg:w-1/2 text-center md:text-right lg:text-right text-sky-50">
                    <p>Melayani <span class="underline underline-offset-4">pelatihan SDM</span> berupa pendampingan atau
                        mentoring Family Business maupun Coaching karyawan untuk kinerja bisnis yang optimal</p>
                </div>
            </div>
            <div class="hidden_bottom text-sky-50 text-center">
                <p>Membangun <span class="underline underline-offset-4">hubungan jangka
                        panjang</span> dengan klien berdasarkan kepercayaan, kejujuran, dan profesionalisme</p>
            </div>
        </div>
    </section>

    <div class="w-full flex flex-col items-center px-6 py-24 md:px-16 lg:p-24">
        <h2 class="text-center mb-20 text-4xl font-bold">Penasaran dengan <mark
                class="px-2 text-sky-400 bg-gray-800 rounded dark:bg-gray-800">Layanan</mark>
            yang kami tawarkan?</h2>

        <a href="/services"
            class="inline-flex justify-center items-center py-4 px-7 text-lg font-medium text-center text-white rounded-xl bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
            Our services
            <svg class="w-5 h-5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                fill="none" viewBox="0 0 14 10">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 5h12m0 0L9 1m4 4L9 9" />
            </svg>
        </a>
    </div>
@endsection
