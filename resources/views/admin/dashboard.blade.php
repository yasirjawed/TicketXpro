@extends('layouts.master')
@section('title','Admin Dashboard')
@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <ol class="breadcrumb mb-4">
        <li class="breadcrumb-item active">Dashboard</li>
    </ol>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Complaints</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{ $totalpostCount }}
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Pending Complaints</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{ $TotalpendingPostsCount }}
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total In Progress Complaints</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{ $TotalinprogressPostsCount }}
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Total Resolved Complaints</div>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    {{ $TotalclosedPostsCount }}
                    <div class="small text-white"><i class="fas fa-angle-right"></i></div>
                </div>
            </div>
        </div>



</div>
@endsection
