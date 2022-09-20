@extends('layouts.app')

@section('content')
    <div class="container d-flex flex-column ingia ">
        <div class="row vh-100">
            <div class="col-sm-10 col-md-8 col-lg-9  mx-auto d-table h-100">
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
                                    <img src="{{ asset('cartoon.png')}}" alt="MATUMIZI APP "
                                         class="img-fluid rounded-circle" width="132" height="132"/>
                                </div>
                                <form method="POST" action="{{ route('login') }}">
                                    @csrf
                                    <div class="mb-3">
                                        <label class="form-label">Email <span><i
                                                    class="fas fa-address"></i></span></label>
                                        <input id="email" type="email"
                                               class="form-control p-4  @error('email') is-invalid @enderror"
                                               name="email" value="{{ old('email') }}" autocomplete="email"
                                               placeholder="Enter your email" autofocus>
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                        @enderror
                                    </div>
                                    <div class="mb-3">
                                        <label class="form-label">Password <span><i
                                                    class="fas fa-lock"></i></span></label>
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


@endsection
