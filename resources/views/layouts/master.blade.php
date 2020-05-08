<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>E-CorretoR - @yield('title')</title>
    <!-- SCRIPTS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/menu.js') }}"></script>
    <script src="https://kit.fontawesome.com/a971ea5d03.js" crossorigin="anonymous"></script>
    
    <!-- CSS -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/owl.theme.default.min.css') }}" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-md navbar-light bg-black shadow-sm">
        <div class="container">
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto"></ul>
                <ul class="navbar-nav ml-auto">
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
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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
    <div id="menu-bar">
        <div id="menu" onclick="onClickMenu()">
            <div id="bar1" class="bar"></div>
            <div id="bar2" class="bar1"></div>
            <div id="bar3" class="bar"></div>
        </div>
    </div>
    <div class="row menuOpen">
        <div class="col-3 nav" id="nav2">
            <ul class="hamb">
                <li><a href="#"><span><small>[01]</small>Home</span></a></li>
                <li><a href="#"><span><small>[02]</small>About</span></a></li>
                <li><a href="#"><span><small>[03]</small>Services</span></a></li>
                <li><a href="#"><span><small>[04]</small>Pricing</span></a></li>
                <li><a href="#"><span><small>[05]</small>Portfolio</span></a></li>
                <li><a href="#"><span><small>[06]</small>Blog</span></a></li>
                <li><a href="#"><span><small>[07]</small>Contact</span></a></li>
            </ul>
        </div>
        <div class="col-9 nav" id="nav">
            <img class="col-12" src="{{ asset('images/bg_2.jpg') }}" alt="">
        </div>
    </div>

    <main>
        @yield('content')
    </main>

    <footer class="bg-dark">
        <div class="container">
            <div class="row mb-5 justify-content-center">
                <div class="col-md-5 text-center">
                    <div class="ftco-footer-widget mb-3">
                        <ul class="ftco-footer-social list-unstyled">
                            <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                    <div class="ftco-footer-widget">
                        <h2 class="mb-3">Contact Us</h2>
                        <p class="email"><a href="#">info@email.com</a></p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/carousel.js') }}"></script>

    
</body>

</html>
