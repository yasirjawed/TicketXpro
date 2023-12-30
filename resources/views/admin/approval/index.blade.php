@extends('layouts.master')
@section('title','Admin Category')
@section('content')
<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
       Post Pending For Approval
    </div>
    <div class="card-body">
        <table id="datatablesSimple2">
            <thead>
                <tr>
                    <th>Person Name</th>
                    <th>Category</th>
                    <th>Post Title</th>
                    <th>Edit</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($pedningApproval as $pedningrequest)
                <tr>
                    <td>{{ $pedningrequest->user->name }}</td>
                    <td>{{ $pedningrequest->category->name }}</td>
                    <td>{{ $pedningrequest->name }}</td>
                    <td><a href="{{url('admin/approval/'.$pedningrequest->id)}}" class="btn btn-success">Edit</a></td>


                </tr>
                @endforeach


            </tbody>
        </table>
    </div>
</div>
@endsection
@section('scripts')

@endsection
