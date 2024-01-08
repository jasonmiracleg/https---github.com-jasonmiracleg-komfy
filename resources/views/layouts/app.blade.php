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
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Scripts -->
    <script src="//unpkg.com/alpinejs" defer></script>

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
    @livewireStyles
</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm" style="background-color: #ff9500">
            <div class="container">
                <a class="navbar-brand text-white fw-bold" href="{{ url('/') }}">
                    {{ config('app.name', 'Komfy') }}
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
                                <li class="nav-item text-white">
                                    <a class="nav-link text-white" href="/admin_order"> Order </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ route('admin.bookkeeping.index') }}">{{ __('Pembukuan') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/admin_product">{{ __('Produk') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ route('admin.testimony') }}">{{ __('Testimoni') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ route('admin.partnership.index') }}">{{ __('Partnership') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/admin_category"> Kategori </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/admin_variant"> Variant </a>
                                </li>
                            @else
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('home') }}">{{ __('Home') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="/about_us">{{ __('Tentang Kami') }}</a>
                                </li>
                                <li class="nav-item">
                                    <form method="POST" action="{{ route('member.check.cart') }}">
                                        @csrf
                                        <button class="nav-link text-white"> Keranjang </button>
                                        <input type="hidden" name="user_id" value="{{ Auth::id() }}">
                                    </form>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ route('member.testimony.index') }}">{{ __('Testimoni') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('produk') }}">{{ __('Produk') }}</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white"
                                        href="{{ route('partnership.index') }}">{{ __('Partnership') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('home') }}">{{ __('Home') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/about_us">{{ __('Tentang Kami') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white"
                                    href="{{ route('testimony.index') }}">{{ __('Testimoni') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="{{ route('produk') }}">{{ __('Produk') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white"
                                    href="{{ route('partnership.index') }}">{{ __('Partnership') }}</a>
                            </li>
                        @endauth
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-white" href="#"
                                    role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"
                                    v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                        onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
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
    @livewireScripts
</body>

</html>
