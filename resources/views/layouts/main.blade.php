<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Layout</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <style>
        .carousel-item {
            height: 35rem !important;
        }
    </style>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col p-0">
                @include('partial.navbar')
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="{{ $carousel_1 }}" class="d-block w-100 object-fit-cover mt-5" alt="Image #1">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="fw-bold text-primary fw-bold"
                                    style="text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);">{{ $pageTitle }}</h3>
                                <p style=" text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);">{{ $pageDescription }}</p>
                            </div>
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ $carousel_2 }}" class="d-block w-100 object-fit-cover mt-5" alt="Image #2">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="fw-bold text-primary fw-bold"
                                    style="text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);">{{ $pageTitle }}</h3>
                                <p style=" text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);">{{ $pageDescription }}</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{ $carousel_3 }}" class="d-block w-100 object-fit-cover" alt="Image #3">
                            <div class="carousel-caption d-none d-md-block">
                                <h3 class="fw-bold text-primary fw-bold"
                                    style="text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);">{{ $pageTitle }}</h3>
                                <p style=" text-shadow: 3px 3px 6px rgba(0, 0, 0, 0.7);">{{ $pageDescription }}</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                @yield('content_page')
            </div>
        </div>
        <div class="row">
            <div class="col p-0">
                @include('partial.footer')
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous">
    </script>
</body>
</body>

</html>
