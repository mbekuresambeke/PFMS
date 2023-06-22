@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="text-center">
                    <h2>Welcome To Admin Panel</h2>
                    <h5> Hello {{ auth()->user()->name }}</h5>

                        <p class="alert alert-danger strong">Please Note that this is Administrative Panel You are not allowed to change any thing if you dont
                            have permission</p>

                    <button type="button" class="btn btn-default">
                        <span>Total Registered Users</span>
                        <span class="badge badge-primary">24</span>
                    </button>
                    {{-- <button type="button" class="btn btn-primary">
                        <span>Notifications</span>
                        <span class="badge badge-md badge-circle badge-floating badge-danger border-white">4</span>
                      </button> --}}
                </div>
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Name </th>
                            <th>Email</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->email }}</td>
                                <td>
                                    <a href="/users/updateUser/" class="btn btn-primary">Manage </a>
                                    <a href="" class="btn btn-info">View</a>
                                    <a href="" class="btn btn-success">Edit</a>
                                    <a href="" class="btn btn-danger">Disabl</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection
