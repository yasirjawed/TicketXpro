@extends('layouts.masters')
@section('title','New Ticket')
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

           <h4>Generate New Complaint</h4>
        </div>
        <div class="card-body">

            <form action="{{url('customer/add-ticket')}}" method="POST" enctype="multipart/form-data">
                @csrf

                <div class="mb-3">
                    <label for="">Subject</label>
                    <input type="text" name="subject" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">Description</label>
                    <textarea name="description" id="description" rows="5" class="form-control"></textarea>
                </div>

                <h6 class="d-none">STATUS MODE</h6>
                <div class="row">

                    <div class="col-md-12 mb-12 d-none">
                        <label for="">Process_Status</label>
                        <select name="active_status" id="" class="form-control">
                            <option value="0">Pending</option>
                            <option value="1">In Progress</option>
                            <option value="2">Closed</option>
                        </select>
                    </div>
                    <div class="col-md-12 mt-5">
                        <button class="btn btn-primary" type="submit">Generate Ticket</button>
                    </div>
                </div>







            </form>
        </div>
    </div>
</div>
@endsection

