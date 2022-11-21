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
                <span>Total Users</span>
              </div>
              <div class="avatar bg-light-primary p-50">
                <span class="avatar-content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user font-medium-4"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="fw-bolder mb-75">4,567</h3>
                <span>Paid Users</span>
              </div>
              <div class="avatar bg-light-danger p-50">
                <span class="avatar-content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-plus font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><line x1="20" y1="8" x2="20" y2="14"></line><line x1="23" y1="11" x2="17" y2="11"></line></svg>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="fw-bolder mb-75">19,860</h3>
                <span>Active Users</span>
              </div>
              <div class="avatar bg-light-success p-50">
                <span class="avatar-content">
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user-check font-medium-4"><path d="M16 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"></path><circle cx="8.5" cy="7" r="4"></circle><polyline points="17 11 19 13 23 9"></polyline></svg>
                </span>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-sm-6">
          <div class="card">
            <div class="card-body d-flex align-items-center justify-content-between">
              <div>
                <h3 class="fw-bolder mb-75">237</h3>
                <span>Pending Users</span>
              </div>
              <div class="avatar bg-light-warning p-50">
                <i class="fas fa-users"></i>
              </div>
            </div>
          </div>
        </div>
      </div>

      
</div>

@endsection