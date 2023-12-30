@extends('layouts.master')
@section('title','View Users')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">

            <div class="card-header">
                <h4>View Posts
             </h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success">{{session('message') }}</div>
            @endif
            <table class="table table-bordered" id="myDataTable" class="table table-striped" style="width:100%" >
                <thead>
                    <td style="width:10%">ID</td>
                    <td style="width:20%">User Name</td>
                    <td style="width:40%">Email</td>

                    <td style="width:10%">Role</td>
                    <td style="width:10%">Edit</td>
                </thead>
                <tbody>
                    @foreach ($users as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->role_as=='1'?'Admin':(($item->role_as=='2')?'Journalist':'User')}}</td>
                            <td><a href="{{url('admin/users/'.$item->id)}}" class="btn btn-success">Edit</a></td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
    </div>

@endsection

