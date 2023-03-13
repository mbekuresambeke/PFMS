<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'PFMS') }}</title>
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
      {{-- <script src="https://cdn.tailwindcss.com"></script> --}}

</head>

<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light shadow-sm bg-primary    text-center ">
            <div class="container ">
                <a class="navbar-brand text-white" href="{{ url('/') }}">
                    {{ config('app.name', 'PFMS') }}
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav me-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ms-auto">
                        <!--  Authenticated User Page -->
                        @auth
                            <nav class="nav nav-borders text-white ">
                                <ul class="navbar-nav mr-right">
                                    <li class="nav-item active">
                                        <a class="nav-link text-white active ms-0" href="/home" target="__blank"><i
                                                class="fas fa-user"></i> Profile</a>
                                    </li>

                                    <li class="nav-item active">
                                        <a class="nav-link text-white active ms-0" href="/users" target="__blank"><i
                                                class="fas fa-user"></i>Admin Panel</a>
                                    </li>


                                    <li class="nav-item active">
                                        <a class="nav-link text-white active ms-0" href="/users" target="__blank"><i
                                                class="fas fa-user"></i>Debt</a>
                                    </li>

                                    <li class="nav-item active">
                                        <a class="nav-link text-white active ms-0" href="/plans" target="__blank"><i
                                                class="fas fa-dollar"></i>Plans</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="/budget"><i
                                                class="fa-duotone fa-dollar-sign"></i> Budget</a>
                                    </li>

                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="plans" target="__blank"><i
                                                class="fas fa-shop"></i> Saving</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="/expenses"><i class="fas fa-rupee"></i>
                                            Expenses</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link text-white" href="/expensesCategory"><i class="fas fa-euro"></i>
                                            Expense Category</a>

                                    </li>
                                </ul>




                            </nav>
                        @endauth
                        <!--End of Authenticated User Page --->
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item e">
                                <a class="nav-link text-white" href="/about">{{ __('About') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="/contact">{{ __('Contact') }}</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link text-white" href="/blog">{{ __('Blog') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white" href="/home">{{ __('home') }}</a>
                            </li>
                            @if (Route::has('login'))
                                <li class="nav-item ">
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

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>

                                <a href="/reports" class="dropdown-item"><i class="fab fa-report"></i> Report </a>
                                <a href="/myProfile" class="dropdown-item"><i class="fas fa-user"></i> Profile </a>

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

    @include('footer.footer')

</body>

</html>
