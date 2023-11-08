<?php include_once "controller.php"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth snap-y-mandatory m-0 p-0 overflow-x-hidden md:overflow-y-visible lg:overflow-y-visible">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mitra Strategis Perusahaan - Gosyen Polinator</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="input.css" />
    <link rel="stylesheet" href="output.css" />

    <link rel="icon" href="asset/gosyen_logo_240.png">

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js" defer></script>
</head>

<body class="m-0 p-0 w-full h-full overflow-x-hidden overflow-y-hidden md:overflow-y-visible lg:overflow-y-visible" style="font-family: 'Poppins', sans-serif;">
    <div class="absolute">
        <button onclick="smoothScrollTo('#home')" class="fixed bottom-5 right-5 md:bottom-10 md:right-10 lg:bottom-10 lg:right-10 bg-sky-500 text-white p-3 rounded-full hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-300 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        </button>
    </div>

    <div id="progress_bar" class="fixed z-10 top-0 bg-sky-500 h-1 md:h-2 rounded-full"></div>

    <section id="home" class="h-screen snap-start">

        <div class="bg-[url('asset/brown_desk.jpg')] h-full bg-no-repeat bg-cover bg-center relative">
            <nav class="flex justify-between flex-row items-start pt-6 px-4 md:px-10">
                <a href="#home" class="hidden_left bg-white rounded-xl px-2">
                    <img class="w-20 md:w-24 lg:w-28" src="asset/gosyen_logo.png" alt="logo" />
                </a>
                <div class="hidden_right flex justify-between flex-col md:flex-row lg:flex-row items-end gap-3"> <!-- that worked? wow -->
                    <button onclick="smoothScrollTo('#contact_us')" class="w-[90px] md:w-[125px] border-2 bg-sky-500 p-2 rounded-md hover:opacity-90 transition duration-300">
                        <p class="text-xs md:text-base text-white">Contact Us</p>
                    </button>
                    <div class="hidden md:block lg:block flex items-center">
                        <svg class="h-10 w-px text-white">
                            <line x1="0" y1="0" x2="0" y2="100%" stroke="currentColor" stroke-width="2" />
                        </svg>
                    </div>
                    <!-- rada aneh paddingny -->
                    <a href="join.php" class="block">
                        <button class="w-[90px] md:w-[125px] border-2 border-sky-500 bg-sky-50 px-2 py-1 md:py-2 lg:py-2 rounded-md hover:opacity-90 transition duration-300 flex items-center justify-center">
                            <span class="text-xs md:text-base text-sky-500">Join Us</span>
                        </button>
                    </a>

                </div>

            </nav>
            <div class="absolute flex flex-col items-center top-3/4 left-1/2 transform -translate-x-1/2 -translate-y-full text-sky-100">
                <h1 class="text-4xl md:text-5xl text-center font-bold">Gosyen Polinator</h1>

                <ul class="flex flex-row gap-6 mt-5">
                    <li><button onclick="smoothScrollTo('#about')" class="text-xs md:text-base pb-2 border-b border-transparent hover:border-sky-300 hover:text-sky-300 transition duration-200">Profil</button></li>
                    <li><button onclick="smoothScrollTo('#services')" class="text-xs md:text-base pb-2 border-b border-transparent hover:border-sky-300 hover:text-sky-300 transition duration-200">Layanan</button></li>
                    <li><button onclick="smoothScrollTo('#testimony')" class="text-xs md:text-base pb-2 border-b border-transparent hover:border-sky-300 hover:text-sky-300 transition duration-200">Pelanggan</button></li>
                    <li><button onclick="smoothScrollTo('#contact_us')" class="text-xs md:text-base pb-2 border-b border-transparent hover:border-sky-300 hover:text-sky-300 transition duration-200">Kontak</button></li>
                </ul>
            </div>
            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex justify-center">
                <div class="animate-bounce">
                    <button onclick="smoothScrollTo('#about')" class="bg-amber-400 rounded-full p-3 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-xl">
                        <svg class="text-white h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="px-6 py-24 md:px-16 lg:p-24 snap-start">
        <h2 class="text-xl text-center mb-3 text-sky-400">SIAPA KAMI</h2>
        <h1 class="text-4xl text-center mb-14 font-bold">Solusi <mark class="bg-amber-300">Strategis</mark> untuk Performa <mark class="bg-amber-300">Bisnis</mark> yang <mark class="bg-amber-300">Kompetitif</mark></h1>

        <div class="flex flex-col lg:flex-row justify-around items-center gap-10 md:gap-20 lg:gap-20">
            <div class="relative w-full h-3/4 lg:w-full lg:h-full bg-no-repeat bg-cover rounded-md shadow-2xl bg-center md:bg-top lg:bg-top">
                <img class="rounded-xl" src="asset/gosyen_4_crop.jpg" alt="gosyen_4" />

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

    <section id="misi" class="snap-start bg-[url('asset/gosyen_1_crop.jpg')] md:bg-[url('asset/gosyen_1.jpg')] bg-no-repeat bg-cover bg-center lg:bg-top">
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

    <section id="services" class="snap-start">
        <div class="px-6 py-24 md:px-16 lg:p-24">
            <h2 class="text-xl text-center mb-3 text-sky-400">LAYANAN KAMI</h2>
            <h2 class="text-center mb-20 lg:mb-28 text-4xl font-bold">Program & Layanan <mark class="bg-amber-300">Unggulan</mark> yang <mark class="bg-amber-300"><i>Next Level&nbsp;</i></mark> </h2>

            <div class="mx-0 md:mx-10 lg:mx-32 relative grid grid-cols-1 md:grid-cols-2 gap-24">

                <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[550px] lg:hover:h-[450px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-2 md:p-4 lg:p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                    <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <img src="asset/business_consult.png" alt="" class="mx-auto mb-5 w-20">
                        <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                    </div>
                    <div class="m-auto back w-3/4 relative opacity-0">
                        <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Business Consulting</h1>
                        <p class="pt-4 text-center">Membantu Anda mengembangkan strategi bisnis yang inovatif dan efektif, menyediakan analisis pasar, perencanaan strategis, dan pengembangan model bisnis yang sesuai dengan tujuan perusahaan Anda. Bawa bisnis anda ke tingkat selanjutnya!</p>
                    </div>
                </div>

                <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[500px] lg:hover:h-[400px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                    <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <img src="asset/audit.png" alt="" class="mx-auto mb-5 w-20">
                        <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                    </div>
                    <div class="m-auto back w-3/4 absolute opacity-0">
                        <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Audit</h1>
                        <p class="pt-4 text-center">Dengan integritas dan kualitas laporan keuangan, kami memeriksa kepatuhan terhadap standar akuntansi yang berlaku secara menyeluruh, serta memberikan keyakinan kepada Anda untuk mengambil keputusan yang tepat dan melindungi aset perusahaan Anda.</p>
                    </div>
                </div>

                <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[550px] lg:hover:h-[450px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                    <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <img src="asset/lap_keuangan.png" alt="" class="mx-auto mb-5 w-20">
                        <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                    </div>
                    <div class="m-auto back w-3/4 absolute opacity-0">
                        <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Financial Statement</h1>
                        <p class="pt-4 text-center">Menyediakan laporan keuangan yang transparan dan akurat, termasuk neraca, laba rugi, arus kas, laporan perubahan ekuitas, dan catatan-catatan tambahan yang relevan sehingga Anda dapat mengambil keputusan bisnis dengan kepastian dan mengoptimalkan kinerja finansial perusahaan Anda.</p>
                    </div>
                </div>

                <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[600px] lg:hover:h-[400px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                    <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <img src="asset/fambuss_mentoring.png" alt="" class="mx-auto mb-5 w-20">
                        <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                    </div>
                    <div class="m-auto back w-3/4 absolute opacity-0">
                        <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Family Business Mentoring</h1>
                        <p class="pt-4 text-center"><i class="font-semibold">Generasi Pertama membangun, Generasi Kedua menikmati, Generasi Ketiga menghancurkan"</i> <br><br>Membangun sistem manajemen kinerja terintegrasi, berinovasi, serta menerapkan perbaikan berkelanjutan.</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- custom -->
        <div class="py-24 px-6 bg-amber-100">
            <div class="mx-0 md:mx-10 lg:mx-32 relative grid grid-cols-1 md:grid-cols-2 gap-24">
                <div class="card_layanan relative m-auto w-[200px] hover:w-full lg:hover:w-3/4 h-[200px] hover:h-[500px] lg:hover:h-[400px] bg-sky-50 hover:bg-sky-400 border-2 border-sky-500 hover:border-sky-50 p-8 shadow-lg flex flex-col items-center justify-center hidden_bottom">
                    <div class="front m-auto absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2">
                        <img src="asset/employee_coaching.png" alt="" class="mx-auto mb-5 w-20">
                        <p class="text-center p-1 bg-sky-400 rounded-xl text-sky-50 block">DETAILS</p>
                    </div>
                    <div class="m-auto back w-3/4 absolute opacity-0">
                        <h1 class="pb-2.5 font-bold text-center text-2xl text-sky-50 border-b-2 border-sky-50">Employee Coaching</h1>
                        <p class="pt-4 text-center">Untuk meningkatkan kinerja karyawan melalui aktivitas <i>Outing</i>. Membangun bonding antar karyawan, karakter leadership, kreatif dan inovatif, serta kemampuan untuk beradaptasi di lingkungan kerja.</p>
                    </div>
                </div>

                <iframe class="w-[352px] h-[198px] md:w-[560px] md:h-[315px] mx-auto shadow-xl" src="https://www.youtube.com/embed/DyGMkV52DrA" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>

    </section>

    <section id="join_team" class="relative px-6 py-24 md:px-16 lg:p-24 bg-[url('asset/gosyen_3.jpg')] bg-no-repeat bg-cover bg-center">
        <div class="absolute top-0 left-0 w-full h-full bg-black bg-opacity-50"></div>
        <div class="text-center text-sky-50 mb-24 brightness-100">
            <p class="text-2xl font-bold">"Mengembangkan tim yang <mark class="bg-amber-300">Berkualitas</mark> dan <mark class="bg-amber-300">Berkomitmen</mark> dengan menjaga <mark class="bg-amber-300">Integritas</mark> dan <mark class="bg-amber-300">Etika Profesi</mark> dalam setiap aspek layanan yang diberikan kepada klien"</p>
        </div>
        <div class="flex justify-center brightness-100">
        <a href="join.php" class="block">
            <button class="border-2 border-sky-500 bg-sky-50 px-3 py-1 md:py-2 lg:py-2 rounded-md hover:opacity-90 transition duration-300 flex flex-row items-center gap-3">
                <img src="asset/gosyen_logo.png" alt="" class="w-12">
                <span class="text-lg md:text-2xl text-sky-500 font-bold">Join the Polinators</span>
            </button>
        </a>
        </div>
    </section>



    <section id="testimony" class="snap-start px-6 py-24 md:px-16 lg:p-24">
        <h2 class="text-xl text-center mb-3 text-sky-400">PELANGGAN & KLIEN</h2>
        <h2 class="text-center mb-20 text-4xl font-bold">Jadilah <mark class="bg-amber-300">Bagian</mark> dari Deretan <mark class="bg-amber-300"><i>"Our Satisfied Clients"&nbsp;</i></mark></h2>
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-10">
            <?php
            $client_list = readClientDetails();
            while ($row = mysqli_fetch_assoc($client_list)) {
                if ($row['asset_path'] != null) { ?>
                    <div class="hidden_bottom flex flex-col hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg rounded-xl">
                        <img class="w-24 h-24 md:w-36 md:h-36 object-contain mb-4 my-0 mx-auto" src="<?php echo $row['asset_path']; ?>" alt="Client Logo">
                        <h1 class="text-xs md:text-base lg:text-xl text-sky-500 font-medium text-center"><?php echo $row['name']; ?></h1>
                    </div>
            <?php
                }
            }
            ?>
        </div>

        <p class="text-center md:text-right text-xl md:text-2xl font-bold mt-10 lg:mt-0">...dan Masih <mark class="bg-amber-300">Banyak</mark> Lagi!</p>

        <div class="border-b-4 border-sky-600 w-full mt-10"></div>


        <div class="see_all relative cursor-pointer mt-10 p-2 pt-3 w-1/2 md:w-1/4 lg:w-1/5 hover:w-full hover:bg-white rounded-xl mx-auto">
            <div class="title">
                <p class="text-center text-xl text-sky-900 mb-3">Lihat Semua</p>
                <svg class="animate-bounce mx-auto text-sky-900 h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path d="M12 19l-7-7h14l-7 7z"></path>
                </svg>
            </div>

            <div class="opacity-0 hover:opacity-100 absolute hover:static grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-10 items-center">
                <?php
                $client_list = readClientDetails();
                while ($row = mysqli_fetch_assoc($client_list)) {
                    if ($row['asset_path'] == null) { ?>
                        <div class="hidden_bottom text-xs md:text-base lg:text-xl font-medium text-sky-500 font-medium text-center hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg rounded-xl">
                            <?php echo $row['name']; ?>
                        </div>
                <?php
                    }
                }
                ?>
            </div>
        </div>



    </section>

    <section id="contact_us" class="snap-start">
        <div class="w-full pb-24 px-6 py-24 md:px-16 lg:p-24 bg-amber-100">
            <h2 class="text-center mb-20 text-4xl font-bold">Untuk <mark class="bg-amber-300">Informasi</mark> lebih lanjut, silahkan <mark class="bg-amber-300">Hubungi Kami</mark> melalui:</h2>

            <div class="flex flex-col md:flex-row justify-around gap-5">
                <a href="https://api.whatsapp.com/send?phone=62811273823" class="m-auto">
                    <button type="button" data-te-ripple-init data-te-ripple-color="light" class="flex items-center mb-2 inline-block rounded-xl px-6 py-2.5 text-xs font-medium leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: #128c7e">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 md:h-10 md:w-10" fill="currentColor" viewBox="0 0 24 24">
                            <path d="M.057 24l1.687-6.163c-1.041-1.804-1.588-3.849-1.587-5.946.003-6.556 5.338-11.891 11.893-11.891 3.181.001 6.167 1.24 8.413 3.488 2.245 2.248 3.481 5.236 3.48 8.414-.003 6.557-5.338 11.892-11.893 11.892-1.99-.001-3.951-.5-5.688-1.448l-6.305 1.654zm6.597-3.807c1.676.995 3.276 1.591 5.392 1.592 5.448 0 9.886-4.434 9.889-9.885.002-5.462-4.415-9.89-9.881-9.892-5.452 0-9.887 4.434-9.889 9.884-.001 2.225.651 3.891 1.746 5.634l-.999 3.648 3.742-.981zm11.387-5.464c-.074-.124-.272-.198-.57-.347-.297-.149-1.758-.868-2.031-.967-.272-.099-.47-.149-.669.149-.198.297-.768.967-.941 1.165-.173.198-.347.223-.644.074-.297-.149-1.255-.462-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.297-.347.446-.521.151-.172.2-.296.3-.495.099-.198.05-.372-.025-.521-.075-.148-.669-1.611-.916-2.206-.242-.579-.487-.501-.669-.51l-.57-.01c-.198 0-.52.074-.792.372s-1.04 1.016-1.04 2.479 1.065 2.876 1.213 3.074c.149.198 2.095 3.2 5.076 4.487.709.306 1.263.489 1.694.626.712.226 1.36.194 1.872.118.571-.085 1.758-.719 2.006-1.413.248-.695.248-1.29.173-1.414z" />
                        </svg>
                        <p class="ml-5 text-xl md:text-2xl">WhatsApp</p>
                    </button>
                </a>

                <p class="mx-auto md:mx-0 my-auto text-2xl">OR</p>
                <a href="mailto:gosyenpolinator@gmail.com" class="m-auto">
                    <button type="button" data-te-ripple-init data-te-ripple-color="light" class="bg-white border-2 border-sky-500 flex items-center mb-2 inline-block rounded-xl px-6 py-2.5 text-xs font-medium leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                        <svg class="h-6 w-6 md:h-10 md:w-10 text-sky-500" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z" />
                            <polyline points="22,6 12,13 2,6" />
                        </svg>
                        <p class="ml-5 text-xl md:text-2xl text-sky-500">Email</p>
                    </button>
                </a>
            </div>
        </div>



        <div class="py-10 px-6 md:px-16 lg:px-24 flex flex-col md:flex-row items-start justify-around bg-sky-800">
            <div class="w-full">
                <p class="mb-5 text-center md:text-left text-base lg:text-lg font-bold mt-10 md:mt-0 text-sky-50 ">CONTACT US</p>
                <div class="flex flex-col gap-2">
                    <a href="https://www.google.com/maps/place/Gosyen+Prosperous+Miracle/@-6.9757802,110.4613145,17z/data=!3m1!4b1!4m6!3m5!1s0x2e708df6a0b04665:0x1b4af1acbab55d1e!8m2!3d-6.9757802!4d110.4613145!16s%2Fg%2F11kj8djqt_?entry=ttu" class="flex flex-row gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sky-50">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 21h19.5m-18-18v18m10.5-18v18m6-13.5V21M6.75 6.75h.75m-.75 3h.75m-.75 3h.75m3-6h.75m-.75 3h.75m-.75 3h.75M6.75 21v-3.375c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21M3 3h12m-.75 4.5H21m-3.75 3.75h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008zm0 3h.008v.008h-.008v-.008z" />
                        </svg>
                        <p class="w-full md:w-3/4 text-left text-sky-50 font-thin text-sm">Jl. Sidoluhur Raya No.30, Muktiharjo Kidul, Kec. Pedurungan, Kota Semarang, Jawa Tengah</p>
                    </a>
                    <a href="https://api.whatsapp.com/send?phone=62811273823" class="flex flex-row gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-sky-50">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                        <p class="w-full text-left text-sky-50 font-thin text-sm">(+62) 81-127-3823</p>
                    </a>
                </div>
            </div>
            <div class="w-full mb-5">
                <p class="mb-5 text-center md:text-left text-base lg:text-lg font-bold mt-10 md:mt-0 text-sky-50">SOCIAL NETWORKS</p>
                <div class="flex flex-col md:flex-row gap-5 md:gap-3 lg:gap-5 items-center">
                    <a href="">
                        <button type="button" data-te-ripple-init data-te-ripple-color="light" class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: #e1306c">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.98-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163c0-3.403-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z" />
                            </svg>
                        </button>
                    </a>
                    <a href="">
                        <button type="button" data-te-ripple-init data-te-ripple-color="light" class="mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg" style="background-color: #ff0000">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z" />
                            </svg>
                        </button>
                    </a>
                    <a href="">
                        <button type="button" data-te-ripple-init data-te-ripple-color="light" class="bg-black mb-2 inline-block rounded px-6 py-2.5 text-xs font-medium uppercase leading-normal text-white shadow-md transition duration-150 ease-in-out hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="h-4 w-4">
                                <path fill="currentColor" d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z" />
                            </svg>
                        </button>
                    </a>
                </div>
            </div>
            <div class="w-full flex items-end flex-col mt-10 md:mt-0"> <!-- the mt-0 isn't really necessary but good to know-->
                <p class="text-2xl md:text-xl lg:text-2xl mb-5 text-center md:text-right text-sky-50 font-bold">PT. Gosyen Polinator Indonesia</p>
                <p class="w-full md:w-3/4 lg:w-1/2 text-center md:text-right text-sky-50 font-thin text-sm"><i>Business Consultant, Auditor, Finance, Coach, Family Business, Accounting, Leadership, Innovative, Success</i></p>
            </div>
        </div>

        <div class="py-5 px-6 md:px-16 lg:px-24 bg-sky-900">
            <p class="text-center text-sky-50">@ 2023 Copyright : gosyenpolinator.info</p>
        </div>
    </section>

</body>

</html>
