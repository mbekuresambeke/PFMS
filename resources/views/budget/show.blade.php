@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/budget" class="btn btn-primary btn-block btn-outline-success text-white  "><i class="fas fa-arrow-left fa-1x"></i> Return Back </a>
        <hr>
        <div class="row justify-content-center">
            <div class="col-md-3">
                <div class="card alert alert-warning">
                    <div class="card-body">
                        <h2>Budget  Amount </h2>
                        <p class="text-strong">
                            Tsh: {{number_format($budget->budget_amount,2)}}
                        </p>
                    </div>
                </div>
            </div>
          <div class="col-md-3">
            <div class="card alert alert-success shadow border ">
                <h2>
                    Saving (<span>20 <i class="fas fa-percentage"></i></span>)
                    <hr>
                </h2>
                <div class="d-flex">
                    <div>
                        Tsh: {{number_format($budgetTwendyPer,2)}}
                    </div>
                    <div class="m-3 ">
                        <i class="fab fa-tiktok"></i>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card alert alert-success shadow border ">
                <h2>
                    Needs (<span>30 <i class="fas fa-percentage"></i></span>)
                    <hr>
                </h2>
                <div class="d-flex">
                    <div>
                        Tsh: {{number_format($budgetThirtyPer,2)}}
                        
                    </div>
                    <div class="m-3 ">
                        <i class="fab fa-tiktok"></i>
                    </div>
                </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="card alert alert-success shadow border ">
                <h2>
                    Wants (<span>50 <i class="fas fa-percentage"></i></span>)
                    <hr>
                </h2>
                <div class="d-flex">
                    <div>
                        Tsh: {{number_format($budgetFirtyPer,2)}}
                    </div>
                    <div class="m-3 ">
                        <i class="fab fa-tiktok"></i>
                    </div>
                </div>
            </div>
          </div>
        </div>
        <div class="row justify-content-center border  ">
            <div class="col md-8">
                <h2>List Of Expenses Here</h2>
                <table class="table table-responsive table-border ">
                    <tr>
                        <th>S/N</th>
                        <th>Expenses Name</th>
                        <th>Expenses Amount</th>
                        <th>Expenses Description</th>
                    </tr>
                    @foreach ($budget_expenses as $expenses )
                        <tr>
                            <td>{{$loop->index}}</td>
                            <td>{{$expenses->expenses_title}}</td>
                            <td>{{number_format($expenses->expenses_amount,2)}}</td>
                            <td>{{$expenses->expenses_description}}</td>
                        </tr>
                    @endforeach
                    
                </table>
                <div class="d-flex ">
                    <div class="bg-primary " >
                        <p>
                         
                        </p>
                    </div>
                    <div class="bg-secondary text-white py-2 ">
                    <p>TOTAL EXPENSES AMOUNT IS TSH {{number_format($budget_expenses->sum('expenses_amount'),2)}}</p>  
                    </div>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
