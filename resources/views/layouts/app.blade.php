<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        button.trix-button, .trix-button-row{
            display: none !important;
        }
        *{
            font-family: 'Poppins';
            font-size: 14px;
        }
        .navbar-brand{
            font-size: 20px;
            width: 100%;
            font-weight: bold;
            text-align: center;
        }
        label{
            font-weight: bold;
        }
        .nav-item{
            width: 100%;
            border-radius: 8px;
            margin-top: 16px;
        }
        a.nav-link{
            width: 100% !important;
            padding: 16px 12px !important;
            cursor: pointer;
        }
        .nav-divider{
            margin-top: 16px !important;
            margin-bottom: -16px;
            padding: 16px 12px !important;
            cursor: pointer;
        }
        svg {
            width: 20px !important;
        }
        .ms-1{
            margin-left: 6px !important;
        }
        .ms-3{
            margin-left: 16px !important;
        }
        .nav-link:hover, .btn.__bg-primary:hover{
            background-color: #2E29A3;
            color: #fff;
            transition: .4s;
        }
        .__text-primary{
            color: #4940FF;
        }
        .__bg-primary{
            background-color: #4940FF;
            color: white;
            transition: .4s;
        }
        .__bg-secondary{
            background-color: #2A2770;
            color: white;
            transition: .4s;
        }
        .__bg-dark{
            background-color: #212445;
        }
        .__bg-light{
            background-color: #EFEFEF;
        }
        .__bg-success{
            background-color: #30A36C;
        }
        .card-subtitle, .card-description{
            font-size: 12px !important;
        }
        .card-subtitle, .card-description, .card-title{
            display: block;
            white-space: nowrap;
            overflow: hidden;
            text-overflow: ellipsis;
        }
        .card-title{
            max-height: 20px;
        }
        .nav-link.dropdown-toggle:hover{
            background-color: #EFEFEF;
            color: #2b2b2b;
            transition: .4s;
        }
    </style>
    @yield('custom-style')
    @trixassets
</head>
<body>
    <div id="app">
        <main class="__bg-dark">
            <div class="row gx-1 w-100">
                @if(\Request::route()->getName() == 'login' || \Request::route()->getName() == '' || \Request::route()->getName() == 'register')
                <div class="col-12 pt-5">
                    @yield('content')
                </div>
                @else
                <div class="col-2 p-0">
                    @include('layouts.aside')
                </div>
                <div class="col-10 __bg-light pb-3">
                    <nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm mb-3">
                        <div class="container-fluid">
                            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                                <span class="navbar-toggler-icon"></span>
                            </button>

                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <!-- Left Side Of Navbar -->
                                <ul class="navbar-nav me-auto">

                                </ul>

                                <!-- Right Side Of Navbar -->
                                <ul class="navbar-nav ms-auto">
                                    <!-- Authentication Links -->
                                    @guest
                                        @if (Route::has('login'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                            </li>
                                        @endif

                                        @if (Route::has('register'))
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                            </li>
                                        @endif
                                    @else
                                        <li class="nav-item dropdown">
                                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                                {{ Auth::user()->name }}
                                            </a>

                                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                                document.getElementById('logout-form').submit();">
                                                    {{ __('Logout') }}
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                                    @csrf
                                                </form>
                                            </div>
                                        </li>
                                    @endguest
                                </ul>
                            </div>
                        </div>
                    </nav>
                    @yield('content')
                </div>
                @endif
            </div>
        </main>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
    <script>
        feather.replace();
        var popoverTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="popover"]'))
        var popoverList = popoverTriggerList.map(function (popoverTriggerEl) {
            return new bootstrap.Popover(popoverTriggerEl)
        })
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @yield('custom-scripts')
</body>
</html>
