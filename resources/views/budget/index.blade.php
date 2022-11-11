@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/budget/create" class="btn btn-primary btn-block btn-outline-success text-white  ">Create New Budget</a>
        <hr>
        <div class="row">
            <div class="col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <h2>Hello {{ Auth::user()->name }}</h2>
                    </div>
                    <div class="card-body">
                        <p>
                            Your Currently Budget is
                        </p>
                        <h2>{{ number_format($Totalbudgets, 2) }}</h2>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <h2>Trending Budgets</h2>
                <div>
                    <div class="card">
                        <div class="card-header">
                            <h2>Latest Budget</h2>
                        </div>
                        <div class="card-body">
                            <h2>TSH: {{ number_format($ThisMonthBudget, 2) }}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-white ">
            @foreach ($budgets as $budget)
                <div class="col-md-2 bg-primary  border shadow-2xl px-2 m-3 p-3 m-3  items-center ">
                    <h2>{{ $budget->budget_title }}</h2>
                    <p>Amount: <small><strong>Tsh {{ number_format($budget->budget_amount, 2) }}</strong></small></p>
                    <p>Account Status is <code>{{ $budget->budget_status == 1 ? 'Active' : 0 == 'inactive ' }}</code></p>
                </div>
            @endforeach

        </div>
    </div>
@endsection
