@extends('layouts.app')
@section('content')
    <div class="container m-2 p-2">
        <section>
            <a href="/expenses/create" class="btn btn-primary px-3 py-2 ">Add Expenses</a>
            <div class="row justify-content-center mt-2 p-2 ">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h4>Daily Expenses</h4>
                        <div class="d-flex">
                            <p>Tsh {{number_format($DailyExpenses,2)}}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h2>Weekly Expenses</h2>
                        <p>Tsh {{number_format($WeeklyExpenses,2)}}</p>
                    </div>
                </div>


                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h2>Monthly Expenses</h2>
                        <p>Tsh {{number_format($MonthlyExpenses,2)}}</p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h2>Yearly Expenses</h2>
                        <p>Tsh {{number_format($TotalExpenses,2)}}</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="mt-5  p-3  border ">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12">

                    <table class="table mb-0 table-responsive table-responsive{-sm|-md|-lg|-xl} table-bordered  ">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Expenses Title</th>
                            <th scope="col">Expenses Category</th>
                            <th scope="col">Expenses Amount</th>
                            <th scope="col">Description</th>
                            <th scope="col">Expenses Date</th>
                            <th scope="col">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($expenses as $AllExpenses)
                            <tr>
                                <th scope="row">1</th>
                                <td>{{ $AllExpenses->expenses_title}}</td>
{{--                                {{$item->users->name}}</strong></p>--}}
                                <td>{{ $AllExpenses->ExpensesCategory->expenses_category_name}}</td>
                                <td>{{number_format($AllExpenses->expenses_amount,2)}}</td>
                                <td>{{ $AllExpenses->expenses_description}}</td>
                                <td>{{ $AllExpenses->expenses_date}}</td>
                                <td><a href="">Edit</a>
                                    <a href="">View</a>
                                    <a href="">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </div>
@endsection