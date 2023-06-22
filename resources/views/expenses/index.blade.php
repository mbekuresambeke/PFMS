@extends('layouts.app')
@section('content')
{{-- <x-breadcrumb :paths="$currentPath" /> --}}
    <div class="container mt-2 ">
        <section>
            <a href="/expenses/create" class="btn btn-primary px-3 py-2 ">Add Expenses</a>
            <div class="row justify-content-center mt-2 p-2 ">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="alert alert-secondary">
                        <h4>Daily Expenses</h4>
                        <div class="d-flex">
                            {{-- @if (count($DailyExpenses) ==0) --}}

                                <p>Tsh {{ number_format($DailyExpenses,2) }}</p>
                            {{-- @else --}}
                            <hr>
                           <p>Sorry you dont have enough bandoo <i class="fas fa-box"></i></p>
                            {{-- @endif --}}

                            <i class="fas fa-calendar m-right"></i>
                        </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card  ">
                        <div class="alert alert-info">
                            <h2>Weekly Expenses</h2>
                            <p>Tsh {{ number_format($WeeklyExpenses,2) }}</p>
                            <a href="/">View Now</a>
                        </div>

                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="alert alert-warning ">
                        <h2>Monthly Expenses</h2>
                        <p>Tsh {{ number_format($MonthlyExpenses,2) }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <div class="alert alert-success">
                        <h2>Yearly Expenses</h2>
                        <p>Tsh {{ number_format($TotalExpenses,2) }}</p>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <hr>

        <section>
<div>
    <div class="row">
        @foreach ($ExpensesCategory as $expense)
        <div class="col-md-2 m-2 p-2 border shadow-lg"><h4>
            {{-- <p>Expense Name: {{ $expense->expenses_title }}</p> --}}
            <p>Expense Amount: {{ $expense->expenses_amount }}</p>
            <p>Expense Category: {{ $expense->ExpensesCategory->expenses_category_name }}</p>
        </div>
        @endforeach


    </div>
</div>
        </section>
    </div>

    <div class="container m-auto">
        <section class="mt-4   border justify-content-between ">
            <div class="row h-100">
                <div class="col-lg-12 col-md-12  col-sm-12">
                    <table class="table table-sm mb-1  table-responsive table-bordered  ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Expenses Title</th>
                            <th>Expenses Category</th>
                            <th>Expenses Amount</th>
                            <th>Description</th>
                            <th>Expenses Date</th>
                            <th colspan="4">Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($expenses as $AllExpenses)
                            <tr>
                                <th>{{ $loop->index }}</th>
                                <td>{{ $AllExpenses->expenses_title }}</td>
                                <td>{{ $AllExpenses->ExpensesCategory->expenses_category_name }}</td>
                                <td>{{ number_format($AllExpenses->expenses_amount,2) }}</td>
                                <td>{{ $AllExpenses->expenses_description }}</td>
                                <td class="text-danger">{{ $AllExpenses->created_at->diffForHumans() }}</td>
                                <td>
                                    <a href="/expenses/{{ $AllExpenses->id }}" class="text-primary "><i class="fas fa-eye"></i> </a>
                                    <a href="/expenses/{{ $AllExpenses->id }}/edit" class="text-warning "><i class="fas fa-edit"></i> </a>
                                    <a href="/expenses/delete/{{ $AllExpenses->id }}" class="text-danger  "><i class="fas fa-trash"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3  float-rightss">
                        {{ $expenses->links() }}

                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
