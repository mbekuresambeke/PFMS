@extends('layouts.app')
@section('content')
    <div class="container-xl px-4 mt-4">
        <div>
            @if (session('success'))
                <div class="col-md-8 offset-2">
                    {{-- <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div> --}}

                    <!-- Flexbox container for aligning the toasts -->
                <div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

                    <!-- Then put toasts within -->
                    <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="..." class="rounded me-2" alt="...">
                        <strong class="me-auto">Bootstrap</strong>
                        <small>11 second ago</small>
                        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                    <div class="toast-body">
                        {{ session('success') }}
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    </div>
            </div>
                </div>
            @endif
        </div>
        <hr class="mt-0 mb-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Hello <code>{{ auth()->user()->name }} </code>Create New Budget</div>
                    <div class="card-body text-center">
                        <!-- Profile picture image-->
                        <img class="img-account-profile img-fluid  rounded-circle " src="{{ asset('cartoon.png') }}"
                            alt="">
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4">Please Fill all Details as needed</div>
                        <!-- Profile picture upload button-->
                        <button class="btn btn-primary" type="button">Happy Budget Create</button>
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Budget Create <span class="text-right "> <strong>Today's Date
                            </strong>{{ date('d--M--Y') }}</span></div>
                    <div class="card-body">

                        <form method="POST" action="/budget">
                            <!-- Form Group (username)-->
                            @csrf
                            <div class="mb-3">
                                <label class="small mb-1" for="inputUsername">Budget Title</label>
                                <input class="form-control" name="budget_title" id="budget_title" type="text"
                                    placeholder="Enter Budget  Title" value="{{ old('budget_title') }}" autocomplete="">
                                @error('budget_title')
                                    <span style="color:red">{{ $message }} </span>
                                @enderror
                            </div>
                            <div class="mb-3">
                                <label class="small mb-1" for="budget_amount">Budget Amount</label>
                                <input class="form-control" id="budget_amount" name="budget_amount" type="text"
                                    placeholder="Enter Budget Amount" value="{{ old('budget_amount') }}" autocomplete="">
                                @error('budget_amount')
                                    <span style="color:red">{{ $message }} </span>
                                @enderror
                            </div>
                            <!-- Form Row-->
                            <div class="row gx-3 mb-3">
                                <!-- Form Group (first name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="budget_type">Budget Type </label>
                                    <select name="budget_type" id="" class="form-control outline-none ">
                                        <option value="choose_budget_type">choose budget type</option>
                                        <option value="salary">Salary</option>
                                        <option value="other_source">Others Source</option>
                                    </select>
                                </div>
                                <!-- Form Group (last name)-->
                                <div class="col-md-6">
                                    <label class="small mb-1" for="budgetStatus">Budget Status</label>
                                    <select name="budget_status" id="" class="form-control outline-none ">
                                        <option value="choose_budget_type">Choose Budget Status</option>
                                        <option value="1">Active</option>
                                        <option value="0">Disabled</option>
                                    </select>
                                </div>
                            </div>

                            <div class="mb-3">
                                <label class="small mb-1" for="inputEmailAddress">Budget Short Description</label>
                                <textarea name="budget_description" id="" cols="3" rows="3" class="form-control btn-outline-none"
                                    value="Fill Budget Short Description" value="{{ old('budget_description') }}" autocomplete="">
                                    </textarea>
                                @error('budget_description')
                                    <span style="color:red">{{ $message }} </span>
                                @enderror
                            </div>

                            <!-- Save changes button-->
                            <button class="btn btn-primary" type="submit">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
