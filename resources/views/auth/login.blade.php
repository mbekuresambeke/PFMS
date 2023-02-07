@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column ingia box  " style="background:#8d448b !important">
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
