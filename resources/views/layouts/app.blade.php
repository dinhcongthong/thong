<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="icon" type="image/png" href="{{ asset('images/icon-title.png') }}">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Thomas MP3</title>

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
    <nav class="navbar navbar-expand-sm bg-success navbar-dark header">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                <h5 class="text-dark font-weight-bold">THOMAS</h5>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar"
                aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="collapsibleNavbar">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="btn nav-link font-weight-bold text-dark dropdown-toggle" data-toggle="dropdown">
                            TEST
                        </a>
                        <div class="dropdown-menu">
                            <a href="{{ url('/list') }}" class="dropdown-item">Relationships</a>
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
                    @guest
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link font-weight-bold text-dark">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                    <li class="nav-item">
                        <a href="{{ route('register') }}"
                            class="nav-link font-weight-bold text-dark">{{ __('Register') }}</a>
                    </li>
                    @endif
                    @else
                    <li class="nav-item dropdown">
                        <a href="#" class="btn nav-link font-weight-bold text-dark dropdown-toggle"
                            data-toggle="dropdown">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item active"><i class="fas fa-user"></i>
                                Profile</a>
                            <a href="{{ route('logout') }}" class="dropdown-item" onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();"><i
                                    class="fas fa-sign-out-alt"></i>
                                {{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                    @endguest
                    <li class="nav-item">
                        <a class="nav-link font-weight-bold text-dark" href="#"><i class="fas fa-cart-plus"
                                style="font-size: 20px;"></i></a>
                    </li>
                    <li class="nav-item ml-4">
                        <a class="nav-link font-weight-bold text-dark p-0" href="#"><input type="text"
                                class="form-control" placeholder="Search"></a>
                    </li>
                </ul>
            </div>
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