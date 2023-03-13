@extends('layouts.app')
@section('content')
    <div class="containerr">
        <div class="row">
                <div class="col-md-6 offset-3">
            <div class="card p-2 m-3 ">
                    <form method="POST" action="{{ url('users/change_password', $user) }}">
                        @csrf
                        @method('PUT')
                        <label for="password">New Password:</label>
                        <input type="password"class="form-control" name="password" id="password">
                        <br>
                        <label for="password_confirmation">Confirm Password:</label>
                        <input type="password" class="form-control"name="password_confirmation" id="password_confirmation">
                        <br>
                        <button type="submit" class="btn btn-primary btn-block btn-sm">Update Password</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
    </div>
@endsection
