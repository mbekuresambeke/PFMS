@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8  offset-2 col-sm-12">
            <h2>Create Your Plans Here</h2>
            <div class="card border p-2 m-2 ">
                <form method="POST" action="/plans/">
                    @csrf
                    <div class="form-group m-2 ">
                        <label for="Plan Title">Plan Title</label>
                        <input type="text" name="plan_title" id="" class="form-control">
                    </div>

                    <div class="form-group m-2 ">
                        <label for="Plan Title">ESTIMATE PRICE</label>
                        <input type="text" name="plan_estimate_price" id="" class="form-control">
                    </div>

                    <div class="form-group m-2">
                        <label for="category">Plan category</label>
                        <select name="category" class="form-control" id="">
                            <option value="" disabled>Choose Category </option>
                            <option value="Expenses">Expenses</option>
                            <option value="Saving">Saving</option>
                            <option value="Education">Education</option>
                            <option value="Investement">Investement</option>
                        </select>
                    </div>

                    <div class="form-group m-2 ">
                        <label for="Plan Title">ESTIMATED Duration</label>
                        <input type="text" name="duration" id="" class="form-control">
                    </div>

                    <div class="form-group m-2 ">
                        <label for="Plan Title">Plan STATUS</label>
                        <input type="text" name="plan_status" id="" class="form-control">
                    </div>


                    <div class="form-group m-2 ">
                        <label for="Plan Title">Plan ACTION</label>
                        <select name="action" class="form-control" id="">
                            <option value=""@disabled(true)>Plan Action </option>
                            <option value="Pending">Pending</option>
                            <option value="onProgress">OnProgress</option>
                            <option value="Completed">Completed</option>
                        </select>
                    </div>


                    <div class="form-group m-2 ">
                        <div class="flex-1 ">
                            <a href="/plans" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>Back </a>
                            <input type="submit" name="" id="" class="btn btn-primary btn-block ">
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
