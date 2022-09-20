<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PFMS MANAGEMENT SYSTEM</title>

    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body class="antialiased">
    <div
        class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
        @if (Route::has('login'))
            <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                @auth
                    <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                @else
                    <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                    @if (Route::has('register'))
                        <a href="{{ route('register') }}"
                            class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                    @endif
                @endauth
            </div>
        @endif


        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 offset-2 ">
                    <h1 class="text-primary text-center text-bold ">Welcome to Personal Management System </h1>
                    <img src="{{ asset('img/explaining.png') }}" class="img-fluid " alt="IMG LOADING">
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h2>Why budgeting?</h2>
                    <img src="{{ asset('img/dashboard.png') }}" class="img" alt="Loadingbudgeting">
                </div>
                <div class="col-md-6">
                    <h2>Why budgeting?</h2>
                </div>
            </div>
        </div>


</body>

</html>
