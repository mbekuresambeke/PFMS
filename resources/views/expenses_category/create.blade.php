@extends('layouts.app')
@section('content')
    <div class="container m-2 p-2">
        <div class="row justify-content-center ">
            <div class="col-md-8 offset-2 p-2 m-2 ">
                <div class="card">
                    <div class="card-header">Create New Expense Category</div>
                        @if (session('success'))
                            <div class="col-md-8 offset-2">
                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                    {{ session('success') }}
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                            </div>
                        @endif

                    <div class="card-body mt-2 ">
                        <form action="/expensesCategory" method="POST" >
                            @csrf
                            <label>Expenses Category Name <span style="color:red;">*</span></label>
                            <input type="text" class="form-control" name="expenses_cat_name" required="">

                            <label>Expenses Category Description <span style="color:red;">*</span></label>
                            <textarea class="form-control" name="expenses_category_desc" cols="5" rows="5">

                        </textarea>
                            <input type="submit" class="btn btn-primary btn-block  mt-2 " value="Save Now">
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection
