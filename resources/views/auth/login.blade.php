@extends('layouts.app')

@section('content')
    {{-- <div class="container-fluid">
        <div class="row min-vh-100 flex-center g-0">
            <div class="col-lg-8 col-xxl-5 py-3 position-relative"><img class="bg-auth-circle-shape"
                    src="{{ asset('assets/images/portal-logo.svg') }}" alt="" width="250"><img
                    class="bg-auth-circle-shape-2" src="{{ asset('assets/images/app-logo.svg') }}"
                    alt="" width="150">
                <div class="card overflow-hidden z-index-1">
                    <div class="card-body p-0">
                        <div class="row g-0 h-100">
                            <div class="col-md-5 text-center bg-card-gradient">
                                <div class="position-relative p-4 pt-md-5 pb-md-7 light">
                                    <div class="bg-holder bg-auth-card-shape"
                                        style="background-image:url({{ asset('assets/images/background/background-1.jpg') }});">
                                    </div>
                                    <!--/.bg-holder-->
                                    <div class="z-index-1 position-relative"><a
                                            class=" mb-4 font-sans-serif fs-4 d-inline-block fw-bolder"
                                            href="../../../index.html">MatumiziApp Web Portal</a>
                                        <p class="opacity-75 text-black ">With the power of Falcon, you can now focus only on
                                            functionaries for your digital products, while leaving the UI design on us!</p>
                                    </div>
                                </div>
                                <div class="mt-3 mb-4 mt-md-4 mb-md-5 light">
                                    <p class="text-white">Don't have an account?<br><a
                                            class="text-decoration-underline link-light"
                                            href="../../../pages/authentication/card/register.html">Get started!</a></p>
                                    <p class="mb-0 mt-4 mt-md-5 fs--1 fw-semi-bold text-white opacity-75">Read our <a
                                            class="text-decoration-underline text-white" href="#!">terms</a> and <a
                                            class="text-decoration-underline text-white" href="#!">conditions </a></p>
                                </div>
                            </div>
                            <div class="col-md-7 d-flex flex-center">
                                <div class="p-4 p-md-5 flex-grow-1">
                                    <div class="row flex-between-center">
                                        <div class="col-auto">
                                            <h3>Account Login</h3>
                                        </div>
                                    </div>
                                    <form>
                                        <div class="mb-3"><label class="form-label" for="card-email">Email
                                                address</label><input class="form-control" id="card-email" type="email">
                                        </div>
                                        <div class="mb-3">
                                            <div class="d-flex justify-content-between"><label class="form-label"
                                                    for="card-password">Password</label></div><input class="form-control"
                                                id="card-password" type="password">
                                        </div>
                                        <div class="row flex-between-center">
                                            <div class="col-auto">
                                                <div class="form-check mb-0"><input class="form-check-input" type="checkbox"
                                                        id="card-checkbox" checked="checked"><label
                                                        class="form-check-label mb-0" for="card-checkbox">Remember
                                                        me</label></div>
                                            </div>
                                            <div class="col-auto"><a class="fs--1"
                                                    href="../../../pages/authentication/card/forgot-password.html">Forgot
                                                    Password?</a></div>
                                        </div>
                                        <div class="mb-3"><button class="btn btn-primary d-block w-100 mt-3"
                                                type="submit" name="submit">Log in</button></div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="container d-flex flex-column ingia box      " style="background:#8d448b !important">
        <div class="row vh-100 bg-white ">
            <div class="col-sm-12 col-md-8 col-lg-9  mx-auto d-table h-90 ">
                <div class="d-table-cell align-middle">
                    <div class="bg-primary text-white  p-2 m-2 px-2 py-3 text-center mt-4">
                        <h1 class="h2">Welcome back, to Financial Management </h1>
                        <p class="lead">
                            Sign in to your account to continue
                        </p>
                    </div>

                    <div class="card">
                        <div class="card-body">
                            <div class="m-sm-4">
                                <div class="text-center">
                                    <img src="{{ asset('cartoon.png') }}" alt="MATUMIZI APP "
                                        class="img-fluid rounded-circle" width="132" height="132" />
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email <span><i class="fas fa-address"></i></span></label>
                                        <input id="email" type="email"
                                            class="form-control p-4  @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" autocomplete="email" placeholder="Enter your email"
                                            autofocus>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password <span><i class="fas fa-lock"></i></span></label>
                                        <input type="password"
                                            class="form-control p-4  @error('password') is-invalid @enderror"
                                            name="password" autocomplete="current-password"
                                            placeholder="Enter your password">
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                        <small> <a href="{{ route('password.request') }}">Forgot password?</a> </small>
                                    </div>
                                    <div>
                                        <label class="form-check">
                                            <input class="form-check-input" type="checkbox" value="remember-me"
                                                name="remember-me" checked>
                                            <span class="form-check-label">
                                                Remember me next time
                                            </span>
                                        </label>

                                    </div>
                                    <div class="text-center mt-3">
                                        <input type="submit" class="btn btn-lg btn-primary btn-block" value="Sign In">
                                        <!-- <button type="submit" class="btn btn-lg btn-primary">Sign in</button> -->
                                    </div>
                                    <p>Forgot your password
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </p>
                                </form>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    {{--
    <section style="
        padding: 7em 0">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Login #08</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="p-4 p-md-5"
                        style="    position: relative;
        background: #fff;
        border-radius: 10px;">
                        <div class="d-flex align-items-center justify-content-center"style="width: 80px;
                    height: 80px;
                    background: #8d448b;
                    border-radius: 50%;
                    font-size: 30px;
                    margin: 0 auto;
                    margin-bottom: 10px;">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Have an account?</h3>
                        <form action="#" class="login-form" style="display: block;
                        margin-top: 0em;">
                            <div class="form-group">
                                <input type="text" class="form-control  "
                                    style="border-top-left-radius: 0.25rem !important;" placeholder="Username" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control  "
                                    style="    border-bottom-left-radius: 0.25rem !important;" placeholder="Password"
                                    required>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="#">Forgot Password</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get Started</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
@endsection
