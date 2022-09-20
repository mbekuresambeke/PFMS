@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center p-2 ">
            <img src="{{ asset('img/dashboard.png') }}" alt="">

            <div class="col-md-2 border-4 m-2  bg-light  shadow-lg font-monospace  ">
                <h2>Budget</h2>
                <h4>400,000 TSH</h4>
                <p>ICONIC</p>
            </div>

            <div class="col-md-2 border-4 m-2  bg-light  shadow-lg font-monospace  ">
                <h2>Budget</h2>
                <h4>400,000 TSH</h4>
                <p><i class="fas fa-dollar fa-3x text-primary"></i></p>
            </div>

            <div class="col-md-2 border-4 m-2  bg-light  shadow-lg font-monospace  "
                style="background-color: #ffffff;box-shadow: 2px 2px 2px 2px solid #ccc">
                <h2>Budget</h2>
                <h4>500,000 TSH</h4>
                <p>ICONIC</p>
            </div>

            <div class="col-md-2 border-4  m-2   bg-light  shadow-lg font-monospace  ">
                <h2>Budget</h2>
                <h4>400,000 TSH</h4>
                <p>ICONIC</p>
            </div>

        </div>
    </div>
    </div>
@endsection
