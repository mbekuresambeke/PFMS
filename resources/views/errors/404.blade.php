@extends('layouts.app')

@section('content')
    <main>
        {{-- <div class="container">
            <div class="row justify-center px-3 py-3 ">
                <div class="col-md-8 offset-2 border   ">
                    <h1 class="font-bold text-danger text-lg ">404</h1>
                    <p class="text-xl font-bold">
                        <span class="text-red-500">Oops!</span> You are Lost
                    </p>

                    <p class="text-lg">
                        The page you’re looking for doesn’t exist.
                    </p>
                    <a href="/" class="btn btn-primary bg-primary  text-sm font-semibold ">Go home</a>
                </div>
            </div>
        </div> --}}

        <div class="d-flex align-items-center justify-content-center vh-10 ">
            <div><img src="{{ asset('cartoon.png') }}" alt="NO PNG FOUND"></div>
            <div class="text-center m-10 ">
                <h1 class="display-1 fw-bold space-align " style="font-size:100px !important">404</h1>
                <p class="fs-3"> <span class="text-danger">Opps!</span> Page not found.</p>
                <p class="lead">
                    The page you’re looking for doesn’t exist.
                </p>
                <a href="/" class="btn btn-primary">Go Home</a>
            </div>
        </div>
    </main>
@endsection
