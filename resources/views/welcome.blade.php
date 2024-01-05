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
                            <a class="nav-link" aria-current="page" href="/login">Login</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- END OF NAVBAR -->

        <!-- CAROUSEL -->
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                @foreach($hero as $key => $val)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}" @if($key === 0) class="active" aria-current="true" @endif aria-label="Slide 1"></button>
                @endforeach
            </div>
            <div class="carousel-inner">
                @foreach($hero as $key => $val)
                <div class="carousel-item @if($key === 0) active @endif">
                    <img src="{{ asset('/file/'.$val->image) }}" class="d-block w-100" alt="{{ $val->image }}">
                    <div class="carousel-caption d-flex flex-column justify-content-center h-100">
                        <span style="font-weight: bold; font-size: 48px;">{{ $val->title }}</span>
                        <p style="font-size: 16px;">{{ $val->subtitle }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- END OF CAROUSEL -->

        <!-- CONTAINER FLUID -->
        <div class="container">

            <!-- ALASAN SECTION -->
            <div class="row w-100 pt-5">
                <div class="col-6">
                    <img src="{{ asset('/file/'.$alasan->image) }}" class="d-block w-100" alt="{{ $alasan->image }}">
                </div>
                <div class="col-6 d-flex flex-column justify-content-center align-items-start">
                    <h3>{{ $alasan->title }}</h3>
                    <p class="text-start mt-1">{{ $alasan->description }}</p>
                </div>
            </div>
            <!-- END OF ALASAN SECTION -->

            <!-- LAYANAN SECTION -->
            <div class="row w-100 py-5">
                <div class="col-12 text-center mb-3">
                    <h3>Layanan Kami</h3>
                </div>
                @foreach($layanan as $key => $val)
                <div class="col-4">
                    <div class="card p-4 d-flex flex-column justify-content-center align-items-center text-center">
                        <img src="{{ asset('/file/'.$val->image) }}" class="d-block w-25 mb-3" alt="{{ $val->image }}">
                        <h4 class="mb-1">{{ $val->title }}</h4>
                        <p>{{ $val->description }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- END OF LAYANAN SECTION -->

            <!-- CLIENT SECTION -->
            <div class="row w-100 bg-light pt-5">
                <div class="col-12 mb-3 text-center">
                    <h3>Client Kami</h3>
                </div>
                <div style="overflow-x: scroll;" class="d-flex">
                    @foreach($client as $key => $val)
                    <img src="{{ asset('/file/'.$val->image) }}" class="d-block w-25" alt="{{ $val->image }}">
                    @endforeach
                </div>
            </div>
            <!-- END OF CLIENT SECTION -->

            <!-- GALLERY SECTION -->
            <div class="row w-100 gx-2 py-5">
                <div class="col-12 text-center">
                    <h3>Gallery</h3>
                </div>
                @foreach($gallery as $key => $val)
                <div class="col-4 mt-3">
                    <img src="{{ asset('/file/'.$val->image) }}" class="d-block w-100" alt="{{ $val->image }}" style="height: 100%; object-fit: cover;">
                </div>
                @endforeach
            </div>
            <!-- END OF GALLERY SECTION -->

            <!-- MAPS SECTION -->
            <div class="row w-100 bg-light py-5">
                <div class="col-12 mb-3 text-center">
                    <h3>Kunjungi Kami</h3>
                </div>
                <div class="col-12">
                    <div style="list-style:none; transition: none;overflow:hidden;height:50vh;">
                        <div id="google-maps-canvas" style="height:100%; width:100%;">
                            <iframe class="w-100" style="height: 50vh;" frameborder="0" src="{{ $map->link }}"></iframe>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END OF MAPS SECTION -->

        </div>
        <!-- END OF CONTAINER FLUID -->


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
