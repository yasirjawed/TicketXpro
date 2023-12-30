@extends('layouts.masters')
@section('title','View Posts')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">

            <div class="card-header">
                <h4>Pending Posts
                {{-- <a href="{{ url('journalist/add-post') }}" class="btn btn-primary btn-sm float-end">Add Posts</a></h4> --}}
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
                </thead>
                <tbody>
                    @foreach ($posts as $item)
                        <tr>

                            <td>{{$item->id}}</td>
                            <td>{{$item->category->name}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->active_status=='0'?'Pending':''}}</td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
    </div>

@endsection

