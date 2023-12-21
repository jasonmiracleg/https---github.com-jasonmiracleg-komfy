<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    {{ config('app.name', 'Laravel') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">
                        @auth
                            @if (Auth::user()->isAdmin())
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin_order"> Order </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('admin.bookkeeping.index') }}">{{ __('Pembukuan') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin_product">{{ __('Produk') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('admin.testimony') }}">{{ __('Testimoni') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link"
                                        href="{{ route('admin.partnership') }}">{{ __('Partnership') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin_category"> Kategori </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="/admin_variant"> Variant </a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/about_us">{{ __('Tentang Kami') }}</a>
                            </li>
                            <li class="nav-item">
                                <form method="POST" action="/check_cart">
                                    @csrf
                                    <button class="nav-link"> Keranjang </button>
                                    <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                </form>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('testimony.index') }}">{{ __('Testimoni') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('produk') }}">{{ __('Produk') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('partnership.index') }}">{{ __('Partnership') }}</a>
                            </li>
                        @endauth
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
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
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

        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
