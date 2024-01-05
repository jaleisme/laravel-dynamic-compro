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
            .__bg-primary{
                background-color: #4940FF;
                color: white;
                transition: .4s;
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
                            <a class="nav-link" aria-current="page" href="/about">Tentang Kami</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="/projects">Projek</a>
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
                <div class="col-12 mb-3">
                    <h3>Projek Kami</h3>
                </div>
                @foreach($projects as $val)
                <div class="col-3">
                    <div class="card w-100">
                        <img src="{{ asset('/file/'.$val->image) }}" class="card-img-top" alt="{{ $val->image }}" style="border-radius: 0px;">
                        <div class="card-body">
                            <div class="badge __bg-primary mb-3">{{ $val->category_name }}</div>
                            <h5 class="card-title m-0">{{ $val->title }}</h5>
                            <p class="card-text m-0">{!! $val->description !!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <!-- END OF OVERVIEW SECTION -->

        </div>
        <!-- END OF CONTAINER FLUID -->


        <!-- Option 1: Bootstrap Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
