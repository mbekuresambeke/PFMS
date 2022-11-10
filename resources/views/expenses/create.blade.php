@extends('layouts.app')
@section('content')
    <div class="container m-2 p-2">
        <div class="row justify-content-center ">
            <div class="col-md-8 offset-2 ">
            <div class="card">
                <div class="card-header"><strong>Hi {{auth::user()->name}}</strong>  Create New Expenses</div>
                <div class="card-body mt-2 ">
                    <form action="/expenses" method="POST" >
                        @csrf
                        <div class="mt-2 ">
                            <label>Expenses Name <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="expenses_title" required="">
                        </div>
                        <div>
                            <label>Expenses Category <span style="color:red;">*</span></label>
                            <select name="expenses_category" id="" class="form-control">
                                <option value="Choose Expenses Category">Choose Expenses Category</option>
                            @foreach($ExpensesCategory as $ExpensesCat)
                                    <option value="{{$ExpensesCat->id}}"><span class="text-primary  ">({{$loop->iteration}})</span> {{$ExpensesCat->expenses_category_name}}</option>
                                @endforeach
                            </select>
                        </div>

               <div class="mt-2 ">
                   <label>Budgeting Expenses <span style="color:red;">*</span></label>
                   <select name="expenses_budget" id="" class="form-control">
                       <option value="#">Choose Budget </option>
                       @foreach($budgets as $budget)
                           <option value="{{$budget->id}}">Tsh {{number_format($budget->budget_amount,2)}}</option>
                       @endforeach
                   </select>
               </div>

                <div class="mt-2">
                    <label>Expenses Amount <span style="color:red;">*</span></label>
                    <input type="number" class="form-control" name="expenses_amount" required="">
                </div>

                        <div class="mt-2">
                    <label>Expenses Description <span style="color:red;">*</span></label>
                            <textarea name="expenses_description" class="form-control" id="" cols="5" rows="3"></textarea>
                        </div>

                        <div class="mt-2">
                            <label>Expenses Date <span style="color:red;">*</span></label>
                            <input type="date" name="expenses_date" id="" class="form-control">
                        </div>

                        <div class="mt-2">
                        <input type="submit" class="btn btn-info mt-2 " value="Save Now">
                       </div>

                    </form>
                </div>

                </div>


         </div>
    </div>
@endsection
