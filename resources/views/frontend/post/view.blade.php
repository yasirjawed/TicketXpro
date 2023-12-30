@extends('layouts.app')
@section('title',$post->meta_title)
@section('meta_description',$post->meta_description)
@section('meta_keyword',$post->meta_keyword)
@section('content')
<div class="container">



    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
                    <img src="{{url('images/logo-nav-new.png')}}" id="main-img-display2" class="image-fluid">
            </div>

        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
            <img src="{{url('images/blogs.jpg')}}" id="blog2" class="image-fluid">
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;text-align:center;padding:0px 200px 0px 200px;margin-top:70px">
            <p style="font-family: 'Montserrat', sans-serif;font-size:25px"><b>{{ $post->name }}</b></p>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;text-align:center;padding:0px 200px 0px 200px;font-weight:800;">
            <h1 style="font-family: 'Montserrat', sans-serif;">The best of The Correspondent – recommended by the people who made the stories</h1>
        </div>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content:right;text-align:center;padding:0px 200px 0px 200px;font-weight:800;">
            <img src="{{url('images/persons.png')}}" id="blog2" class="image-fluid">
        <button class="personbuttons" style="background-color:white;color:black;font-family: 'Montserrat', sans-serif;border:none;margin-top:8px;font-weight:bold">{{$post->user->name}}</button>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;text-align:center;padding:0px 200px 0px 200px;font-weight:bold;margin-top:70px">
        <p style="font-family: 'Montserrat', sans-serif;font-size:25px">{!! $post->description !!}</p>
        </div>
    </div>
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h4>More From {{$post->user->name}}</h4>
                    <div class="underline"></div>
                </div>
                @foreach ($userPost as $userPost_per)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 pt-3">
                        <a href="{{url('tutorial/'.$userPost_per->category->slug.'/'.$userPost_per->slug)}}" class="text-decoration-none">
                            <div class="card">
                                <img class="card-img-top" src="{{url('images/blogs.jpg')}}" alt="Card image cap">
                                <div class="card-body blogs">
                                    <h5 class="card-title" class="top-name">{{$userPost_per->name}}</h5>
                                    <div class="bottom-container">
                                        <p class="card-title" >{{$userPost_per->user->name}}</p>
                                        <img src="{{url('images/persons.png')}}" class="person" alt="" class="person-img">
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</div>




@endsection
