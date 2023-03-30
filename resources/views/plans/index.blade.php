@extends('layouts.app')
@section('content')
    <div class="container">
        <a href="/plans/create" class="btn btn-bold btn-sm btn-outline btn-primary p-2 m-3 ">Create Plans</a>
        <div class="row">
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">21,459</h3>
                            <span>Total Plans</span>
                        </div>
                        <div class="avatar bg-light-primary p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user font-medium-4">
                                    <path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="12" cy="7" r="4"></circle>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">
                                {{ $onProgressTasksCount }}
                            </h3>
                            <span>OnProgress Plans</span>
                        </div>
                        <div class="avatar bg-light-danger p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user-plus font-medium-4">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <line x1="20" y1="8" x2="20" y2="14"></line>
                                    <line x1="23" y1="11" x2="17" y2="11"></line>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">{{ $PendingTasksCount }}</h3>
                            <span>Pending Plans</span>
                        </div>
                        <div class="avatar bg-light-success p-50">
                            <span class="avatar-content">
                                <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24"
                                    fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="feather feather-user-check font-medium-4">
                                    <path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path>
                                    <circle cx="8.5" cy="7" r="4"></circle>
                                    <polyline points="17 11 19 13 23 9"></polyline>
                                </svg>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="card">
                    <div class="card-body d-flex align-items-center justify-content-between">
                        <div>
                            <h3 class="fw-bolder mb-75">{{ $CompletedTasksCount }}</h3>
                            <span>Completed Plans </span>
                        </div>
                        <div class="avatar bg-light-warning p-50">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="container  ">
            <div class="row mt-2 p-2  ">
                <div class="col-md-4 bg-info">
                    <div class="card">
                        <h2 class="card-header upper-case text-danger">Onprogress Task</h2>
                        @if (count($onProgressTasks) == 0)
                            <div class="alert alert-success" role="alert">
                                <h4 class="alert-heading">Sorry No Task Available</h4>
                                <p></p>
                                <p class="mb-0"></p>
                            </div>
                        @else
                            <table class="table table-striped  ">
                                <tr>
                                    <th>PLAN NAME</th>
                                    <th>PLAN PRICE</th>
                                    <th>PostedAt</th>
                                    <th>PLAN STATUS</th>
                                </tr>
                                @foreach ($onProgressTasks as $onProgressTask)
                                    <tr>
                                        <td>{{ $onProgressTask->plan_title }}</td>
                                        <td>{{ $onProgressTask->plan_estimate_price }}</td>
                                        <td>{{ $onProgressTask->created_at->diffForHumans() }}</td>
                                        <td class="text-success">{{ $onProgressTask->action }}</td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="alert alert-info ">
                                <p>
                                    Hello Amount for This Cart is TSH:
                                    {{ number_format($onProgressTasks->sum('plan_estimate_price'), 2) }}
                                </p>
                            </div>
                            @endif
                    </div>
                </div>



                <div class="col-md-4 bg-success">
                    <div class="card">
                        <h2 class="text-center ">Pending Task</h2>
                        @if (count($PendingTasks) == 0)
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Sorry No Task Available</h4>
                                <p></p>
                                <p class="mb-0"></p>
                            </div>
                        @else
                            <div class="card-body">
                                <table class="table table-borderless ">
                                    <tr>
                                        <th>PLAN NAME</th>
                                        <th>PLAN PRICE</th>
                                        <th>PostedAt</th>
                                        <th>STATUS</th>
                                    </tr>
                                    @foreach ($PendingTasks as $PendingTask)
                                        <tr>
                                            <td>{{ $PendingTask->plan_title }}</td>
                                            <td>{{ $PendingTask->plan_estimate_price }}</td>
                                            <td class="text-info ">{{ $PendingTask->action }}</td>
                                            <td>{{ $PendingTask->created_at->diffForHumans() }}</td>
                                        </tr>
                                    @endforeach
                                </table>
                                <div class="alert alert-success">
                                    <p>
                                        Hello Amount for This Cart is TSH:
                                        {{ number_format($PendingTasks->sum('plan_estimate_price'), 2) }}
                                    </p>
                                </div>
                            </div>
                            @endif
                    </div>
                </div>


                    <div class="col-md-4 bg-warning">
                    <h2>Completed Task</h2>
                        <div class="card">
                        @if (count($CompletedTasks) == 0)
                            <div class="alert alert-danger" role="alert">
                                <h4 class="alert-heading">Sorry No Task Available </h4>
                                <p></p>
                                <p class="mb-0"></p>
                            </div>
                        @else
                            <table class="table table-striped ">
                                <tr>
                                    <th>PLAN NAME</th>
                                    <th>PLAN PRICE</th>
                                    <th>PostedAt</th>
                                    <th>STATUS</th>
                                </tr>
                                @foreach ($CompletedTasks as $CompletedTask)
                                    <tr>
                                        <td>{{ $CompletedTask->plan_title }}</td>
                                        <td>{{ $CompletedTask->plan_estimate_price }}</td>
                                        <td class="text-warning">{{ $CompletedTask->action }}</td>
                                        <td>{{ $CompletedTask->created_at->diffForHumans() }}</td>
                                    </tr>
                                @endforeach
                            </table>
                            <div class="alert alert-secondary">
                                <p>
                                    Hello Amount for This Cart is TSH:
                                    {{ number_format($CompletedTasks->sum('plan_estimate_price'), 2) }}
                                </p>
                            </div>
                    </div>
                </div>
                @endif
            </div>
        </div>
    @endsection
