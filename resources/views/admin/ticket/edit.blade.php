@extends('layouts.master')
@section('title','Ticket Update')
@section('content')

<div class="container-fluid px-4">
    <div class="card mt-4">
        @if($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <div>{{$error}}</div>
            @endforeach
        </div>
    @endif
        <div class="card-header">

           <h4>Update Complaint</h4>
        </div>
        <div class="card-body">

            <form action="{{url('admin/update-ticket/'.$posts->id)}}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="">Subject</label>
                    <input type="text" name="subject" value="{{$posts->subject}}" class="form-control" readonly>
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="description"  rows="5" class="form-control" readonly>{{ $posts->description }}</textarea>
                </div>

                <h6 class="d-none">STATUS MODE</h6>
                <div class="row">

                    <div class="col-md-12 mb-12">
                        <label for="">Process_Status</label>
                        <select name="active_status" id="" class="form-control" name="active_status">
                            <option value="0" {{$posts->status=='0'?'selected':''}}>Pending</option>
                            <option value="1" {{$posts->status=='1'?'selected':''}}>In Progress</option>
                            <option value="2" {{$posts->status=='2'?'selected':''}}>Closed</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-5">
                        <button class="btn btn-primary" type="submit">Update Ticket</button>
                    </div>
                </div>







            </form>
        </div>
    </div>
</div>
@endsection

