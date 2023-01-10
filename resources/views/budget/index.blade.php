@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/budget/create" class="btn btn-primary btn-block btn-outline-success text-white  ">Create New Budget</a>
        <hr>
        <div class="row">
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h2>Hello {{Auth::user()->name}}</h2>
                    </div>
                    <div class="card-body">
                        <p>
                            Your Currently Budget is
                        </p>
                        <h2>{{number_format($Totalbudgets,2)}}</h2>
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
                            <h2>TSH: {{number_format($ThisMonthBudget,2)}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center mt-3">
            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Campaign Sent">Weekly Income</h5>
                                <h3 class="my-2 py-1">Tsh 9,184</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 3.27%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                   <i class="fas fa-users"></i>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="New Leads">Monthly Income</h5>
                                <h3 class="my-2 py-1">3,254</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-danger me-2"><i class="mdi mdi-arrow-down-bold"></i> 5.38%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                  <i class="fas fa-dollar"></i>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Yearly Income">Last Month Income</h5>
                                <h3 class="my-2 py-1">861</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 4.87%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                   <i class="fas fa-calendar"></i>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->

            <div class="col-md-6 col-xl-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-6">
                                <h5 class="text-muted fw-normal mt-0 text-truncate" title="Booked Revenue">Yearly Revenue</h5>
                                <h3 class="my-2 py-1">$253k</h3>
                                <p class="mb-0 text-muted">
                                    <span class="text-success me-2"><i class="mdi mdi-arrow-up-bold"></i> 11.7%</span>
                                </p>
                            </div>
                            <div class="col-6">
                                <div class="text-end">
                                    <i class="fas fa-clock"></i>
                                </div>
                            </div>
                        </div> <!-- end row-->
                    </div> <!-- end card-body -->
                </div> <!-- end card -->
            </div> <!-- end col -->
        </div>
        <div class="row justify-content-center text-white mt-3  ">
            <table class="table table-bordered">
                <tr>
                    <th>S/N</th>
                    <th>Budget Title</th>
                    <th>Budget Amount</th>
                    <th>Budget Status</th>
                    <th>Budget Posted</th>
                    <th>Action</th>
                </tr>
                @foreach ($budgets as $budget)
                    <tr>
                        <td>{{$loop->index}}</td>
                        <td>{{ $budget->budget_title }}</td>
                        <td><small><strong>Tsh {{ number_format($budget->budget_amount, 2) }}</strong></small></td>
                        <td> <code>{{ $budget->budget_status == 1 ? 'Active' : 0 == 'inactive ' }}</code></td>
                        <td>{{ $budget->created_at->diffForHumans() }}</td>
                        <td>
                            <a href="budget/{{$budget->id}}" class="text-primary btn border">View <i class="fas fa-eye"></i></a>
                            <a href="budget/{{$budget->id}}/edit" class="text-warning btn border">Edit <i class="fas fa-edit"></i></a>
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
