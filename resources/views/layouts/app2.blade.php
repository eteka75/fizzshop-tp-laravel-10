<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'FuzzUp') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <link href="{{asset('storage/assets/libs/dropzone/dist/min/dropzone.min.css')}}" rel="stylesheet" />
    <link href="{{asset('storage/assets/libs/tiny-slider/dist/tiny-slider.css')}}" rel="stylesheet">
    <link href="{{asset('storage/assets/libs/slick-carousel/slick/slick.css')}}" rel="stylesheet" />
    <link href="{{asset('storage/assets/libs/slick-carousel/slick/slick-theme.css')}}" rel="stylesheet" />

    <link href="{{asset('storage/assets/libs/bootstrap-icons/font/bootstrap-icons.css')}}" rel="stylesheet">
    <link href="{{asset('storage/assets/libs/feather-webfont/dist/feather-icons.css')}}" rel="stylesheet">
    <link href="{{asset('storage/assets/libs/simplebar/dist/simplebar.min.css')}}" rel="stylesheet">
    <link href="{{asset('storage/assets/css/theme.misn.css')}}" rel="stylesheet">

    <!-- Scripts -->

    @viteReactRefresh
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>

    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white d-none shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
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

        <main class="py-4">
            @yield('content')
        </main>
    </div>


    <!-- Javascript-->
    <script src="{{asset('storage/assets/libs/rater-js/index.js')}}"></script>
    <script src="{{asset('storage/assets/libs/dropzone/dist/min/dropzone.min.js')}}"></script>

    <!-- Libs JS -->
    <script src="{{asset('storage/assets/libs/jquery/dist/jquery.min.js')}}"></script>
    <script src="{{asset('storage/assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('storage/assets/libs/simplebar/dist/simplebar.min.js')}}"></script>

    <!-- Theme JS -->
    <script src="{{asset('storage/assets/js/theme.min.js')}}"></script>

    <script src="{{asset('storage/assets/libs/tiny-slider/dist/min/tiny-slider.js')}}"></script>
    <script src="{{asset('storage/assets/js/vendors/tns-slider.js')}}"></script>
    <script src="{{asset('storage/assets/js/vendors/zoom.js')}}"></script>
    <script src="{{asset('storage/assets/js/vendors/increment-value.js')}}"></script>

</body>
</html>
