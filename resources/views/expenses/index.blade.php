@extends('layouts.app')
@section('content')
{{-- <x-breadcrumb :paths="$currentPath" /> --}}
    <div class="container mt-2 ">
        <section>
            <a href="/expenses/create" class="btn btn-primary px-3 py-2 ">Add Expenses</a>
            <div class="row justify-content-center mt-2 p-2 ">
                <div class="col-md-3 col-sm-6">
                    <div class="card">
                        <h4>Daily Expenses</h4>
                        <div class="d-flex">
                            <p>Tsh {{number_format($DailyExpenses,2)}}</p>
                            {{-- @foreach ($DailyExpenses as $dailyExp )
                                {{$dailyExp>id}}
                            @endforeach --}}
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
    </div>

    <div class="container m-auto">
        <section class="mt-3  p-3  border ">
            <div class="row justify-content-center">
                <div class="col-lg-12 col-md-12  col-sm-12">

                    <table class="table mb-0 table-responsive table-sm table-responsive table-bordered  ">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Expenses Title</th>
                            <th>Expenses Category</th>
                            <th>Expenses Amount</th>
                            <th>Description</th>
                            <th>Expenses Date</th>
                            <th rowspan="3">Action</th>

                        </tr>
                        </thead>
                        <tbody>
                        @foreach($expenses as $AllExpenses)
                            <tr>
                                <th>{{$loop->index}}</th>
                                <td>{{ $AllExpenses->expenses_title}}</td>
                                <td>{{ $AllExpenses->ExpensesCategory->expenses_category_name}}</td>
                                <td>{{number_format($AllExpenses->expenses_amount,2)}}</td>
                                <td>{{ $AllExpenses->expenses_description}}</td>
                                <td class="text-danger">{{ $AllExpenses->created_at->diffForHumans()}}</td>
                                <td>
                                    <a href="/expenses/{{$AllExpenses->id}}" class="text-primary "><i class="fas fa-eye"></i> </a>
                                    <a href="/expenses/{{$AllExpenses->id}}/edit" class="text-warning "><i class="fas fa-edit"></i> </a>
                                    <a href="/expenses/{{$AllExpenses->id}}/delete" class="text-danger  "><i class="fas fa-trash"></i> </a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                    <div class="mt-3  float-rightss">
                        {{$expenses->links()}}

                    </div>
            

                </div>
            </div>
        </section>
    </div>
@endsection
