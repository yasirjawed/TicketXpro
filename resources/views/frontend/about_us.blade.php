
@extends('layouts.app')
@section('title',"Appliance Care Pro")
@section('meta_description',"Appliance Care Pro")
@section('meta_keyword',"Appliance Care Pro")
<style>
    #main-img-display{
        max-width: 100%;
        height: auto;
    }
    #main-img-display3{
        max-width: 100%;
        height: auto;
        margin-top: -65px
    }
    @media only screen and (min-width: 400px) and (max-width: 600px) {
        .info{
            padding: 50px !important;
        }
    }
    @media only screen and (min-width: 400px) and (max-width: 1100px) {
        .heda{
            padding: 0px !important;
        }
    }

</style>
@section('content')

    <div class="container-fluid" style="background-color:#caddee;padding-bottom:150px">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="display:grid;justify-content: center;">
                    <img src="{{url('images/applogo.png')}}" id="main-img-display2" class="image-fluid">
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="justify-content: center;margin-top:-96px">
                    <h1>About Us</h1>
            </div>
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12"  style="justify-content: center;">
                <p style="text-align:center;padding-left: 450px;padding-right:450px;" class="heda">Have a look at <span style="color: red">Appliance Care Pro</span></p>
            </div>
        </div>
    </div>
    <div class="container-fluid info" style="background-color:white;margin-top:-80px;padding:150px;max-width:900px;  font-style: italic;font-size:18px">
        <h2 style="font-weight:bold;text-align:center">Appliance Care Pro</h2>
        <p class="mt-3">Total Closed Complaints are </p><br>
        <p>
            @foreach ($TotalclosedPosts as $k)
            {{ json_encode($k) }}<br />
        @endforeach
    </p>
    </div>

@endsection
@section('scripting')
    <script>

    </script>
@endsection





