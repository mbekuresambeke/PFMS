@extends('layouts.app')

@section('content')
    <div class="container-fluid">
        <!-- Title -->
        <div class="col-md-6 offset-3 col-sm-12 ">
            <h2> Hi {{ Auth::user()->name }},</h2>
            <h1 class="h2">Welcome Back!</h1>
            <h3 class="alert alert-primary "> Your bank cart is <i class="fa-solid fa-cart-shopping"></i> <strong> Tsh {{number_format($budgets - $expenses,2) }}</strong></h3>
        </div>

        <div class="row">
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="card mt-2 p-2 border">
                    <h2>Total  <button type="button" class="btn btn-primary btn-sm position-relative">
                           Budget 
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{$budgets_count}}
                              <span class="visually-hidden">unread messages</span>
                            </span>
                          </button> </h2>
                    <div>
                        <h4>Tsh: {{number_format($budgets,2)}}</h4>
                        <p class="alert alert-success">
                           Budget Gained 
                        </p>
                    </div>
                    <a href="/budget" class="btn btn-secondary btn-sm btn-outline btn-block ">
                        Explorer More
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="card mt-2 p-2 border">
                    <h2>Expenses  <button type="button" class="btn btn-warning btn-sm position-relative">
                            Total
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{$expenses_count}}
                              <span class="visually-hidden">unread messages</span>
                            </span>
                          </button> </h2>
                    <div>
                        <h4>Tsh: {{number_format($expenses,2)}}</h4>
                        <p class="alert alert-danger">
                           Not Good 
                        </p>
                    </div>
                    <a href="/expenses" class="btn btn-secondary btn-sm btn-outline btn-block ">
                        Explorer More
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="card mt-2 p-2 border">
                    <h2>Expenses  <button type="button" class="btn btn-primary btn-sm position-relative">
                            Number
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                              
                              <span class="visually-hidden">unread messages</span>
                            </span>
                          </button> </h2>
                    <div>
                        <h4>Tsh: 300,000</h4>
                        <p>
                            hello Wellcome
                        </p>
                    </div>
                    <a class="btn btn-secondary btn-sm btn-outline btn-block ">
                        Explorer More
                    </a>
                </div>
            </div>
            <div class="col-md-3 col-lg-3 col-sm-6">
                <div class="card mt-2 p-2 border">
                    <h2>Expenses  <button type="button" class="btn btn-primary btn-sm position-relative">
                            Number
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                               
                              <span class="visually-hidden">unread messages</span>
                            </span>
                          </button> </h2>
                    <div>
                        <h4>Tsh: 300,000</h4>
                        <p>
                            hello Wellcome
                        </p>
                    </div>
                    <a class="btn btn-secondary btn-sm btn-outline btn-block ">
                        Explorer More
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection
