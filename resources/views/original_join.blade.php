<?php include_once "controller.php"; ?>

<!DOCTYPE html>
<html lang="en" class="scroll-smooth snap-y-mandatory m-0 p-0 overflow-x-hidden md:overflow-y-visible lg:overflow-y-visible">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Become a Polinator</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="stylesheet" href="input.css" />
    <link rel="stylesheet" href="output.css" />

    <link rel="icon" href="asset/gosyen_logo.png" type="image/png">

    <script src="https://cdn.tailwindcss.com"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="script.js" defer></script>
</head>

<body class="m-0 p-0 w-full h-full overflow-x-hidden overflow-y-hidden md:overflow-y-visible lg:overflow-y-visible" style="font-family: 'Poppins', sans-serif;">
    <div class="" class="absolute">
        <button onclick="smoothScrollTo('#home')" class="fixed bottom-5 right-5 md:bottom-10 md:right-10 lg:bottom-10 lg:right-10 bg-sky-500 text-white p-3 rounded-full hover:bg-sky-200 transition duration-300 z-10">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" class="h-6 w-6">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path>
            </svg>
        </button>
    </div>
    <div id="progress_bar" class="fixed z-10 top-0 bg-sky-500 h-1 md:h-2 rounded-full"></div>

    <section id="home" class="h-screen snap-start">
        <div class="bg-[url('asset/gosyen_5.jpg')] h-full bg-no-repeat bg-cover bg-center relative">
            <nav class="relative pt-6 px-4 md:px-10">
                <a href="index.php" class="block">
                    <button class="hidden_left border-2 border-sky-500 bg-sky-50 px-2 py-1 md:py-2 rounded-md hover:opacity-90 transition duration-300">
                        <span class="text-xs md:text-xl text-sky-500">Kembali</span>
                    </button>
                </a>
                <a href="#home" class="hidden_right bg-white rounded-xl px-2 absolute top-7 md:top-8 right-4 md:right-10">
                    <img class="w-20 md:w-24 lg:w-28" src="asset/gosyen_logo.png" alt="logo" />
                </a>
            </nav>
            <div class="absolute flex flex-col items-start top-1/2 left-10 transform -translate-x-0 -translate-y-1/2 text-black">
                <h1 class="hidden_bottom mb-0 md:mb-3 w-3/4 md:w-full text-2xl md:text-4xl text-left font-bold text-sky-50 leading-loose "><mark class="bg-amber-300">Anda Ingin Menjadi Bagian dari</mark></h1>
                <h1 class="hidden_bottom text-2xl md:text-5xl text-left font-bold text-sky-50 leading-loose"><mark class="bg-sky-600 text-sky-50">Gosyen Polinator? </mark></h1>
            </div>

            <div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 flex justify-center">
                <div class="animate-bounce">
                    <button onclick="smoothScrollTo('#testimony')" class="bg-amber-400 rounded-full p-3">
                        <svg class="text-white h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>

    <section id="testimony" class="snap-start h-screen px-6 py-24 md:px-16 lg:p-24">
        <h1 class="mb-10 text-center text-sky-500 text-4xl">Kami akan segera membuka Kesempatan untuk Pendaftaran bagi Anda!</h1>
        <a href="#home" class="">
            <img class="mx-auto w-28 pt-6" src="asset/gosyen_logo.png" alt="logo" />
        </a>
        <h1 class="mt-20 animate-ping text-center text-amber-700 text-4xl">COMING SOON</h1>
    </section>

</body>
</html>
