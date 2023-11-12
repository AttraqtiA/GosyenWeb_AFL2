<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $TabTitle ?? "Mitra Strategis Perusahaan - Gosyen Polinator" }}</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link rel="icon" href="/images/gosyen_logo_240.png">

    @vite(['resources/css/app.css','resources/js/app.js'])

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.css" rel="stylesheet" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src='resources/js/script.js' defer></script>

</head>

<div class="flex flex-col" style="font-family: 'Poppins', sans-serif;">
    <div>
        @include('partial.navbar')
    </div>

    <div class=" bg-neutral-200">
        @yield('content_page')
    </div>

    <div>
        @include('partial.footer')
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.0.0/flowbite.min.js"></script>

</body>

</html>
