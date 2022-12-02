@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8 offset-2 col-sm-12 border shadow p-5 m-2 ">
                <h2>Edit Your Expenses</h2>
                <p>
                    Edit Your Expense  
                        <button type="button" class="btn btn-primary btn-sm position-relative">
                            Number
                            <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                                {{$Expense->id}}
                              <span class="visually-hidden">unread messages</span>
                            </span>
                          </button>
                    </span>
                </p>
                <a href="/expenses" class="btn btn-secondary btn-sm  btn-block "> <i class="fas fa-arrow-left"></i> Return Back </a>

                <div>
                    <div class="list-group mt-2 ">
                      

                        <a href="#" class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>
                            Expenses Title <strong><code>{{ $Expense->expenses_title }} </code></strong></a>
                        <a href="#" class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>
                            Expenses Amount <strong><code> {{ number_format($Expense->expenses_amount,2) }}</code></strong> </a>
                        <a href="#" class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>
                            Expenses Description <strong><code> {{ $Expense->expenses_description }}</code></strong></a>

                        <a href="#" class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>
                            Expenses Date <strong><code>{{ $Expense->expenses_date }} </code></strong> </a>
                        <a href="#" class="list-group-item"><i class="fa fa-check" aria-hidden="true"></i>
                            Posted At <strong><code> {{ $Expense->created_at->diffForHumans()}}</code></strong></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
