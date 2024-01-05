<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Bootstrap CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <!-- FONT -->
        <link rel="dns-prefetch" href="//fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

        <title>{{env('APP_NAME')}}</title>
        <style>
            *{
                font-family: 'Poppins';
                font-size: 14px;
            }
            .carousel > .carousel-inner > .carousel-item > img{
                width:100%; /* Yeap you can change the width and height*/
                height:75vh;
                object-fit: cover;
            }
            h3{
                font-weight: bold !important;
                font-size: 24px !important;
            }
            h4{
                font-weight: bold !important;
                font-size: 16px !important;
            }
            img:not(.carousel-item > img){
                border-radius: 8px;
            }

            /* ===== Scrollbar CSS ===== */
            /* Firefox */
            * {
                scrollbar-width: auto;
                scrollbar-color: #FEFEFE #FEFEFE;
            }

            /* Chrome, Edge, and Safari */
            *::-webkit-scrollbar {
                width: 12px;
                height: 12px;
            }

            *::-webkit-scrollbar-track {
                background: #FEFEFE;
            }

            *::-webkit-scrollbar-thumb {
                background-color: #CDCDCD;
                border: 0px none #ffffff;
            }
        </style>
    </head>
    <body>
        <!-- NAVBAR -->
        <nav class="navbar navbar-expand-lg navbar-light bg-white">
            <div class="container-fluid">
                <a class="navbar-brand" style="font-weight: bold;" href="#">{{ env('APP_NAME') }}</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/about">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/projects">Projek</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/blogs">Blog</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END OF NAVBAR -->

        <!-- CONTAINER FLUID -->
        <div class="container">

            <!-- OVERVIEW SECTION -->
            <div class="row w-100 pt-5">
                <div class="col-6">
                    <img src="{{ asset('/file/'.$about->image) }}" class="d-block w-100" alt="{{ $about->image }}">
                </div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                    <h3>Tentang Kami</h3>
                    <p class="text-start mt-1">{!! $about->description !!}</p>
                </div>
            </div>
            <!-- END OF OVERVIEW SECTION -->

            <!-- VISI SECTION -->
            <div class="row w-100 py-5">
                <div class="col-6 ">
                    <h3 class="text-center">Visi</h3>
                    <p class="text-start">{!! $about->visi !!}</p>
                </div>
                <div class="col-6">
                    <h3 class="text-center">Misi</h3>
                    <p class="text-start">{!! $about->misi !!}</p>
                </div>
            </div>
            <!-- END OF VISI SECTION -->

        </div>
        <!-- END OF CONTAINER FLUID -->


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
