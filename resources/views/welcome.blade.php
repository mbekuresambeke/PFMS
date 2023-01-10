<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>MatumiziApp | PFMS</title>

    <script src="{{ asset('js/app.js') }}" defer></script>
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
</head>

<body class="antialiased">

    <header>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-primary ">
            <!-- Container wrapper -->
            <div class="container-fluid">
                <!-- Toggle button -->
                <button class="navbar-toggler" type="button">
                    <i class="fas fa-bars"></i>
                </button>

                <!-- Collapsible wrapper -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Navbar brand -->
                    <a class="navbar-brand mt-2 mt-lg-0 text-white" href="/">
                        MatumiziApp | PFMS
                    </a>
                    <!-- Left links -->
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Budget</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Expenses</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#">Saving</a>
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
                            <a class=" dropdown-toggle dropdown-toggle-split" href="#" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                <i class="fas fa-bell"></i>
                                <span class="badge rounded-pill badge-notification bg-danger">1</span>
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuLink">
                                <li>
                                    <a class="dropdown-item" href="/blog">Blog</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="/">My Profile</a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="login">Login</a>
                                </li>
                            </ul>
                        </div>
                        <!-- Avatar -->

                        <div class="dropdown">
                            <a class="dropdown-toggle d-flex align-items-center hidden-arrow" href="#"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <img src="https://mdbcdn.b-cdn.net/img/new/avatars/2.webp" class="rounded-circle"
                                    height="25" alt="Black and White Portrait of a Man" loading="lazy" />
                            </a>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdownMenuAvatar">
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
                                    <a class="nav-link text-white " href="login"><i class="fas fa-sign-in"></i> Login</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link text-white " href="register"> <i class="fas fa-signing"></i> Sign
                                        Up</a>
                                </li>
                            </ul>
                        @endguest
                    </div>
                </div>
                <!-- Right elements -->
            </div>
            <!-- Container wrapper -->
        </nav>
        <!-- Navbar -->
    </header>

    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h1 class="mt-5">Welcome to Personal Management Application</h1>
                <p class="lead">Learn more about our product and services you will benefits from <code>MatumiziApp </code>.</p>

                <div class="card">
                    <img src="path/to/image.jpg" class="card-img-top" alt="Card image">
                    <div class="card-body">
                      <h5 class="card-title">Card title</h5>
                      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                  </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row" style="background-image: url({{asset('img/budgeting.jpg')}}); background-image:cover;">
            <div class="col-lg-4">
                <h2>Product 1</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra, ante ut mollis bibendum, magna lacus bibendum risus, id egestas elit urna eget quam.</p>
            </div>
            <div class="col-lg-4">
                <h2>Product 2</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra, ante ut mollis bibendum, magna lacus bibendum risus, id egestas elit urna eget quam.</p>
                <p>
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorem enim odit iusto quisquam, amet sed error iure esse doloremque non et voluptate alias ad optio illum pariatur doloribus laborum excepturi.
                </p>
            </div>
            <div class="col-lg-4">
                <h2>Product 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed viverra, ante ut mollis bibendum, magna lacus bibendum risus, id egestas elit urna eget quam.</p>
            </div>
        </div>
    </div>
    
    <div class="container text-center my-5">
        <a href="#" class="btn btn-primary">Learn More</a>
    </div>

    <div class="container">
        <div class="row mt-5  ">
            <div class="col-md-6 p-3">
                <div class="card p-2">
                    <h2>Why Personal Finance Matters ?</h2>
                    <h5>
                        Where is exactly your money go ?
                    </h5>
                    <div class="m-1 ">
                        <ul class="list-group m-2 ">
                            <li class="list-group-item mt-2 border "><span class="badge bg-primary">1</span> Do you have
                                any monthly budget ?</li>
                            <li class="list-group-item mt-2 border "><span class="badge bg-info">2</span> Find Where to
                                reduce expenses instead of increase expenses</li>
                            <li class="list-group-item mt-2 border "><span class="badge bg-success">3</span> Find where
                                you can invest for add in income </li>
                            <li class="list-group-item mt-2 border "><span class="badge bg-warning">4</span> Make
                                Financial Fitness Quiz for get well how to prepare a budget</li>
                        </ul>
                        <a href="/budget" class="btn btn-secondary btn-sm float-right  m-2">learn More </a>

                    </div>

                </div>

                <div class="card mt-2 p-2 " style="background-color: #00171F; color:#FFF">
                    <h2>Categories Available</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laborum explicabo voluptas qui,
                        voluptatem tenetur fugit culpa voluptatum quae inventore quos odio sed quo harum saepe animi
                        facere a tempora enim.
                    </p>
                    <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta, explicabo omnis quos laboriosam
                        ex modi totam ut saepe
                        cupiditate perspiciatis fuga delectus debitis? Consequatur ad accusamus quam eos unde
                        repellendus?
                    </p>
                    <p>
                        Anchored by four shades of blue that range from light to dark with a burst of orange, this
                        palette is ideal
                        for designs that require
                        high contrast as well as complementary shades. Pair the lightest and darkest blues for a visual
                        pop.
                    </p>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="card p-4 " style="background-color: #0063B2FF">
                    <h2>How to Prepare your Budget?</h2>
                    <h6>The 20/30/50 Rule</h6>
                    <p>
                        All ways prepare your budget with this rule where by all your expenses are categoriezed into
                        three categories
                        which are mainly
                    </p>
                    <ul class="list-group">
                        <li class="list-group-item mt-1 border ">
                            <h3>20% Saving</h3>
                            <ol>
                                Saving for future
                            </ol>
                            <ol>Emergence fund saving </ol>
                            <ol>Church Contribution and others families saving</ol>
                        </li>

                        <li class="list-group-item mt-1 border ">
                            <h3>30% Your Wants</h3>
                            <ol>
                                All Your wants
                            </ol>
                            <ol>Shopping expenses </ol>
                            <ol>Dinning Out</ol>
                            <ol>Hobbies and interntaiment </ol>
                            <ol></ol>
                        </li>

                        <li class="list-group-item mt-1 border ">
                            <h3>50% Needs</h3>
                            <ol>
                                Daily Needs and Must needs
                            </ol>
                            <ol>Groceries</ol>
                            <ol>Housing rent</ol>
                            <ol>Utilities, Electricity, Food, Water e.t.c</ol>
                            <ol>Health Insuarance</ol>
                            <ol>Car Loan payment</ol>
                            <ol>Education Payment and Courses</ol>
                        </li>

                    </ul>
                </div>

            </div>
        </div>
        <div class="row justify-content-center mt-5 p-3 " style="background-color: #14213d; color:#FFFF">
            <div class="col-md-6 col-lg-6 col-sm-12 p-2">
                <h2>Why Saving ?</h2>
                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>

                <p>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                    cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                    proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                </p>
                <p>
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Amet, modi nisi, minima obcaecati
                    consequatur quas ipsam
                    ducimus numquam excepturi voluptatum autem magni est nihil, repellat vitae. Libero tempora
                    laudantium placeat?
                </p>
                <button class="btn btn-primary btn-sm">Try It now </button>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 p-2  ">
                <img src="{{ asset('img/saving.jpg') }}" class="img-fluid " alt="True Image">
            </div>
        </div>

        <div class="row  m-3 p-3 " style="background-color: #FFFFFF2E;color:rgb(65, 159, 28);  ">
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

    <div class="row justify-content-center border mt-2" style="background-color: #2D3047; color:#FFF !important">
        <div class="col-md-12  text-center  ">
            <h2>lets Build Financial Management Application Here</h2>
            <div>
                <img src="{{ asset('assets/images/background/background-3.jpg') }}" class="img-fluid "
                    alt="">
                <p class="text-over-img">Text Over Image</p>
            </div>
            <h3> Modern, Flexible and Responsive Application</h3>
            <p>
                A professional package that comes with hunderds of UI components, forms, tables, charts, dashboards,
                pages and svg icons. Each one is fully customizable, responsive and easy to use.
            </p>

            <p>
                Budgeting is the process of creating a plan to spend your money. This plan is called a budget. Creating
                a budget helps you to determine how much money you have coming in and going out, so you can make
                informed decisions about how to allocate your money. A budget can help you to save money, pay off debt,
                and achieve your financial goals.</p>

            <p>There are many different ways to budget, and the right approach for you will depend on your personal
                financial situation, your spending habits, and your financial goals. Some common methods of budgeting
                include the 50/30/20 budget, the envelope method, and the zero-sum budget.</p>

            <p>To create a budget, you will need to track your income and expenses. You can do this manually by keeping
                track of your spending in a notebook or spreadsheet, or you can use a budgeting app or software. Once
                you have a clear picture of your income and expenses, you can create a budget that aligns with your
                financial goals and helps you to make the most of your money.
            </p>
        </div>
    </div>
    </div>


    <div class="container mt-3 ">
        <div class="row justify-content-center"
            style="background-color: rgb(22,45,93)98B; color:rgb(45, 17, 17) !important">
            <div class="col-md-4">
                <h3>Budgeting</h3>
                <div class="border-bottom"></div>

                <div class="card ">
                    <div class="card-head">
                        <img src="{{ asset('img/budget.jpg') }}" class="img-fluid" alt="True Image">
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
                            <button>Explore Budget </button>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <h3>SAVING</h3>
                <div class="border-bottom"></div>

                <div class="card ">
                    <div class="card-head">
                        <img src="{{ asset('img/saving.jpg') }}" class=" card-img  " alt="Saving">
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
                        <img src="{{ asset('img/planing.jpg') }}" class=" card-img img-circle" alt="True Image">
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
                    <strong>SambekeInc All Right Reserved &copy; 2022 </strong>
                </div>
            </div>
        </footer>
    </div>

</body>

</html>
