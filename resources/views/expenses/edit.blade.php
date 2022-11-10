@extends('layouts.app')
@section('content')
    <div class="container m-2 p-2">
        <div class="login-card mb-30">
            <img src="/uploads/app/logo2.png" class="img-responsive">
            <div class="sign-in">
                <h5 class="mb-30">Sign in to your account </h5>
                <form class="text-left simcy-form" action="/signin/validate/" data-parsley-validate="" loader="true"
                    method="POST">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email address <span style="color:red;">*</span></label>
                                <input type="email" class="form-control" name="email" required>
                                <input type="hidden" name="csrf-token"
                                    value="7dd0248abd1a05519eb27537d7f893a0d7150a10f876bf793fc49710b18e8581" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Password <span style="color:red;">*</span></label>
                                <input type="Password" class="form-control" name="password" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pull-left m-t-5"><a href="javascript:void(0)" target="forgot-password">Forgot
                                        password?</a></p>
                                <button class="btn btn-primary pull-right" type="submit" name="login">Sign In</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="forgot-password" style="display: none;">
                <h5 class="mb-30">Forgot password? don't worry, we'll <br>send your a reset link.</h5>
                <form class="text-left simcy-form" action="/forgot/" method="POST" data-parsley-validate="" loader="true">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <label>Email address <span style="color:red;">*</span></label>
                                <input type="text" class="form-control" name="email" required>
                                <input type="hidden" name="csrf-token"
                                    value="7dd0248abd1a05519eb27537d7f893a0d7150a10f876bf793fc49710b18e8581" />
                            </div>
                        </div>

                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-12">
                                <p class="pull-left m-t-5"><a href="javascript:void(0)" target="sign-in">Sign In?</a></p>
                                <button class="btn btn-primary pull-right" type="submit">Send Email</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <!--    <a class="btn btn-block m-t-50 trail" href="/signup/1">Don't have account? click here to signup.</a> -->
            <a class="btn btn-block m-t-50 trail" href="https://admin.docsignpro.com/addPlan/1">Don't have account? click
                here to signup.</a>
            <div class="copyright">
                <p class="text-center">2022 &copy; Doc Sign Pro | All Rights Reserved.</p>
            </div>
        </div>
    </div>
@endsection
