@extends('layouts.app')
@section('title',$category->meta_title)
@section('meta_description',$category->meta_description)
@section('meta_keyword',$category->meta_keyword)
@section('content')
<div class="container">



    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
                    <img src="{{url('images/logo-nav-new.png')}}" id="main-img-display2" class="image-fluid">
            </div>

        </div>
    </div>
    <div class="row mb-5">
        <div class="col-md-9">
            <div class="category-heading">
                <h4>{{$category->name}}</h4>
            </div>

                @forelse ( $post as $postitem)
                    <div class="card card-shadow mt-4" >
                        <div class="card-body" style="background-color:rgb(141, 3, 3);color:white;">
                            <a href="{{ url('tutorial/'.$category->slug . '/' . $postitem->slug) }}" class="text-decoration-none" >
                                <h4 class="post-heading" style="color:white;">{{$postitem->name}}</h4>
                            </a>
                            <h6>
                                Posted On: {{$postitem->created_at->format('d-m-Y')}}
                                <span class="ms-3">Posted By: {{$postitem->user->name}}</span>
                            </h6>
                        </div>
                    </div>
                @empty
                    <div class="card card-shadow mt-4" >
                        <div class="card-body">
                            <h1 >No Post Found</h1>
                        </div>
                    </div>
                @endforelse

        </div>
        <div class="col-md-3">
            <div class="border border-danger p-2" style="background-color:rgb(141, 3, 3);color:white;">

                <h4 class="text-center">Advertising Area</h4>
            </div>
        </div>
    </div>
</div>




@endsection
