<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>PFMS MANAGEMENT SYSTEM</title>
{{--    <title>{{ config('app.name', 'PFMS') }}</title>--}}
    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="{{ asset('fontawesome/js/all.min.js') }}" defer></script>
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <link href="{{ asset('fontawesome/css/all.min.css') }}" rel="stylesheet">
    <style>
        * {
            font-family: 'Poppins', sans-serif !important;
        }
    </style>
</head>

<body class="antialiased">

<header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <!-- Container wrapper -->
        <div class="container-fluid">
            <!-- Toggle button -->
            <button
                class="navbar-toggler"
                type="button"
                data-mdb-toggle="collapse"
                data-mdb-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent"
                aria-expanded="false"
                aria-label="Toggle navigation"
            >
                <i class="fas fa-bars"></i>
            </button>

            <!-- Collapsible wrapper -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Navbar brand -->
                <a class="navbar-brand mt-2 mt-lg-0" href="#">
                 PFMS
                </a>
                <!-- Left links -->
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Budget</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Expenses</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Saving</a>
                    </li>
                </ul>
                <!-- Left links -->
            </div>
            <!-- Collapsible wrapper -->

            <!-- Right elements -->
            @auth()

            <div class="d-flex align-items-center">
                <!-- Icon -->
                <a class="link-secondary me-3" href="#">
                    <i class="fas fa-shopping-cart"></i>
                </a>

                <!-- Notifications -->
                <div class="dropdown">
                    <a class=" dropdown-toggle dropdown-toggle-split"  href="#" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fas fa-bell"></i>
                        <span class="badge rounded-pill badge-notification bg-danger">1</span>
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuLink"
                    >
                        <li>
                            <a class="dropdown-item" href="#">Blog</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">My Profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Login</a>
                        </li>
                    </ul>
                </div>
                <!-- Avatar -->

                <div class="dropdown">
                    <a
                        class="dropdown-toggle d-flex align-items-center hidden-arrow"
                        href="#"
                        data-bs-toggle="dropdown" aria-expanded="false"
                    >
                        <img
                            src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp"
                            class="rounded-circle"
                            height="25"
                            alt="Black and White Portrait of a Man"
                            loading="lazy"
                        />
                    </a>
                    <ul
                        class="dropdown-menu dropdown-menu-end"
                        aria-labelledby="navbarDropdownMenuAvatar">
                        <li>
                            <a class="dropdown-item" href="/myprofile">My profile</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Settings</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="#">Logout</a>
                        </li>
                    </ul>
                    @endauth

                    @guest()
                        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link text-primary " href="login"><i class="fas fa-sign-in"></i> Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-primary " href="register"> <i class="fas fa-signing"></i> Sign Up</a>
                            </li>
                        </ul>
                    @endguest
                </div>
            </div>
            <!-- Right elements -->
        </div>
        <!-- Container wrapper -->
    </nav>
    <!-- Navbar -->	</header>
<div class="container">
    <div class="row justify-content-between bg-secondary ">
        <div class="col-md-6 col-lg-6 col-sm-12 p-2  bg-primary ">
            <h2>Why Saving ?</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <button class="btn btn-primary btn-sm">Try It now </button>
        </div>
        <div class="col-md-6 col-lg-6 col-sm-12 p-2  ">
            <img src="{{asset('img/budget.png')}}" class="img-thumbnail  " alt="True Image">
        </div>
    </div>

        <div class="row bg-success m-3 p-3 ">
        <div class="col-md-4">
            <h2>Why Budgeting ?</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <button class="btn btn-success btn-sm">Try It now </button>
        </div>
        <div class="col-md-5">
            <h2>Why Track Spending ?</h2>
            <p>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
            </p>
            <span>
			<button class="btn btn-warning btn-sm">Try It now </button>

			</span>
        </div>
        </div>


    </div>
    
    <div class="row justify-content-between border mt-2  ">
        <div class="col-md-8 offset-2 text-center  ">
            <h2>lets Build Financial Management Application Here</h2>
            <h3>  Modern, Flexible and Responsive Application</h3>
            <p>
                A professional package that comes with hunderds of UI components, forms, tables, charts, dashboards, pages and svg icons. Each one is fully customizable, responsive and easy to use.
            </p>
        </div>
    </div>
</div>


<div class="container mt-3 ">
    <div class="row justify-content-center">
        <div class="col-md-4">
            <h3>Budgeting</h3>
            <div class="border-bottom"></div>

            <div class="card ">
                <div class="card-head">
                    <img src="{{asset('img/budget.png')}}" class="img-thumbnail  " alt="True Image">
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        <button>Explore More </button>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3>SAVING</h3>
            <div class="border-bottom"></div>

            <div class="card ">
                <div class="card-head">
                    <img src="{{asset('img/money-bag.png')}}" class=" card-img  " alt="True Image">
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        <button>Explore More </button>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <h3>EXPENSES</h3>
            <div class="border-bottom"></div>

            <div class="card ">
                <div class="card-head">
                    <img src="{{asset('img/expense.png')}}" class=" card-img img-circle"  alt="True Image">
                </div>
                <div class="card-body">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                        cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                    <p>
                        <button>Explore More </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container">

    <footer>
        <div class="row justify-content-center">
            <div>
                <hr>

            </div>
            <!-- <hr> -->

            <div class="col-md-8 ">
                <strong>SambekeInc All Right Reserved   &copy; 2022 </strong>
            </div>
        </div>
    </footer>
</div>

</body>
</html>
