@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
              @foreach ($All_categories as $category)
            <div class="my-2 p-2 bg-white rounded box-shadow">
              
                <h6 class="border-bottom border-gray pb-1 mb-0">{{$category->expenses_category_name}}</h6>
                <div class="media text-muted pt-2">
                    <div>
                        <i class="fab fa-card"></i>
                    {{$category->id}}
                    </div>
                    <div class="media-body pb-2 mb-0 small lh-125 border-bottom border-gray">
                        <div class="d-flex justify-content-between align-items-center w-100">
                            <strong class="text-gray-dark">{{$category->expenses_category_desc}}</strong>
                            <a href="" class="btn btn-secondary btn-sm btn-outline">View More</a>
                        </div>
                        <span class="d-block text-danger text-bold"> {{$category->created_at->diffForHumans()}}</span>
                    </div>
                </div>
                    
            </div>
     @endforeach 
        </div>
    </div>
    @endsection
