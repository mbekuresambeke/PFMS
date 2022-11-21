@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/budget/create" class="btn btn-primary btn-block btn-outline-success text-white  ">Create New Budget</a>
        <hr>
        <div class="row">
            <div class="col-lg-3">
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
                <div class="col-lg-2">
                    <div class="card p-2 m-2 alert alert-success">
                        <h4>Saving Amount</h4>
                        <p>
                            Tsh {{number_format($BudgetSaving,2)}}
                        </p>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card p-2 m-2 alert alert-warning">
                        <h4>Needs Budget</h4>
                        <p>
                            Tsh {{number_format($BudgetWants,2)}}
                        </p>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="card p-2 m-2 alert alert-primary">
                        <h4>Wants Amount</h4>
                        <p>
                            Tsh {{number_format($BudgetNeeds,2)}}
                        </p>
                    </div>
                </div>

            <div class="col-lg-3">
                <h2>Trending Budgets</h2>
                <div>
                    <div class="card">
                        <div class="card-header">
                            <h2>Latest Budget</h2>
                            <h6>Budget of {{ $lastMonthText }}</h6>
                        </div>
                        <div class="card-body">
                            <h2> Tsh
                                @if ($ThisMonthBudget === 0)
                                    {{number_format($lastMonth,2) }}
                                @elseif ($ThisMonthBudget > 1)
                                    {{number_format($ThisMonthBudget,2) }}
                                @endif
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center text-white mt-3  ">
            <table class="table table-bordered">
                <tr>
                    <th>S/N</th>
                    <th>Budget Title</th>
                    <th>Budget Amount</th>
                    <th>Budget Status</th>
                    <th>Budget Created_at</th>
                    <th>Action</th>
                </tr>
                @foreach ($budgets as $budget)
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{ $budget->budget_title }}</td>
                        <td><small><strong>Tsh {{ number_format($budget->budget_amount, 2) }}</strong></small></td>
                        <td> <code>{{ $budget->budget_status == 1 ? 'Active' : 0 == 'inactive ' }}</code></td>
                        <td>{{ $budget->created_at }}</td>
                        <td>
                            <a href="" class="text-primary btn border">View <i class="fas fa-eye"></i></a>
                            <a href="" class="text-warning btn border">Edit <i class="fas fa-edit"></i></a>
                            <a href="" class="text-danger  btn border">Trash <i class="fas fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach

            </table>
            <div class="d-flex justify-content-center">
                {{ $budgets->links() }}
            </div>

        </div>
    </div>
@endsection
