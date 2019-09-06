<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/home.css') }}" rel="stylesheet">
    @yield('stylesheets')
</head>

<body>
    {{-- <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
    {{ config('app.name', 'Laravel') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">

        </ul>

        <!-- Right Side Of Navbar -->
        <ul class="navbar-nav ml-auto">
            <!-- Authentication Links -->
            @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
            @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
            @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
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
    </div> --}}

    {{-- <div class="p-2 header">
        <h2 class="font-weight-bold">POSTE THỐNG</h2>
        <p>Thống is a best engineer development in the world</p>
    </div> --}}

    <nav class="navbar navbar-expand-sm bg-success navbar-dark header">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h5 class="text-dark font-weight-bold">THOMAS</h5>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        {{-- <a class="nav-link font-weight-bold text-dark" href="#">Product Type</a> --}}
                        <div class="dropdown">
                            <a class="btn nav-link font-weight-bold text-dark dropdown-toggle" data-toggle="dropdown">
                                Product Type
                            </a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item">Dell</a>
                                <a href="#" class="dropdown-item">Asus</a>
                                <a href="#" class="dropdown-item">HP</a>
                                <a href="#" class="dropdown-item">Apple</a>
                                <a href="#" class="dropdown-item">Acer</a>
                                <a href="#" class="dropdown-item">Lenovo</a>
                                <a href="#" class="dropdown-item active">All</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" href="#">Origin</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" href="#">Others</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" href="#">Contact</a>
                    </li>
                    <li class="nav-item">
                        <div class="dropdown">
                            <a href="#" class="btn nav-link font-weight-bold text-dark dropdown-toggle"
                                data-toggle="dropdown">Thống</a>
                            <div class="dropdown-menu">
                                <a href="#" class="dropdown-item active"><i class="fas fa-user"></i>&nbsp;&nbsp; Profile</a>
                                <a href="#" class="dropdown-item"><i class="fas fa-sign-out-alt"></i>&nbsp;&nbsp;
                                    Logout</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" href="#"><i class="fas fa-cart-plus" style="font-size: 20px;"></i></a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link font-weight-bold text-dark p-0" href="#"><input type="text" class="form-control"
                                placeholder="Search"></a>
                    </li>
                </ul>
            </div>
            {{-- <div class="float-right">
                <a class="nav-link font-weight-bold text-dark" href="#"><i class="fas fa-cart-plus"
                        style="font-size: 20px;"></i></a>
            </div> --}}
        </div>
    </nav>

    @yield('content')

    <div class="text-center footer p-2">
        <h2 class="font-weight-bold pt-1">The End</h2>
        <small>Copyright &copy; Thomas</small>
    </div>
</body>

</html>

<script src="{{ asset('js/home.js') }}"></script>
@yield('scripts')