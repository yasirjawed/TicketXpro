@extends('layouts.master')
@section('title','View Posts')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">

            <div class="card-header">
                <h4>View Posts
                <a href="{{ url('admin/add-post') }}" class="btn btn-primary btn-sm float-end">Add Posts</a></h4>
            </div>
            <div class="card-body">
                @if(session('message'))
                <div class="alert alert-success">{{session('message') }}</div>
            @endif
            <table class="table table-bordered" id="myDataTable">
                <thead>
                    <td style="width:10%">ID</td>
                    <td style="width:20%">Category</td>
                    <td style="width:40%">Post Name</td>

                    <td style="width:10%">Status</td>
                    <td style="width:10%">Edit</td>
                    <td style="width:10%">Delete</td>
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->active_status=='0'? 'Pending':($item->active_status=='1'?'Accepted':'Rejected')}}</td>
                            <td><a href="{{url('admin/post/'.$item->id)}}" class="btn btn-success">Edit</a></td>
                            <td><a href="{{url('admin/delete-post/'.$item->id)}}" class="btn btn-danger">Delete</a></td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
    </div>

@endsection

