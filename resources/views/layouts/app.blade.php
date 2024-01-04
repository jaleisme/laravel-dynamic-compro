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
        .nav-link.__bg-primary:hover, .nav-link.__bg-secondary:hover{
            background-color: #2E29A3;
            transition: .4s;
        }
        .__bg-dark{
            background-color: #100E3D;
        }
        .__bg-light{
            background-color: #EFEFEF;
        }
    </style>
    @yield('custom-style')
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
                <div class="col-10 __bg-light">
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
    </script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    @yield('custom-js')
</body>
</html>
