@extends('layouts.master')
@section('title','View Pending Post')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">

            <div class="card-header">
                <h4>View All Pending Complaint
            </div>
            <div class="card-body">
                @if(session('message'))
                    <div class="alert alert-success">{{session('message') }}</div>
                @endif
            <table class="table table-bordered" id="myDataTable">
                <thead>
                    <td style="width:10%">ID</td>
                    <td style="width:50%">Subject</td>
                    <td style="width:30%">Status</td>
                    <td style="width:10%">Action</td>
                </thead>
                <tbody>
                    @foreach ($pending_complaints as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->subject}}</td>
                           <td>
                                {{-- {{$item->status=='0'?'OPEN': 'IN PROGRESS'}} --}}
                                @if($item->status=='0')
                                Pending
                                @elseif ($item->status=='1')
                                In Progress
                                @else
                                Closed
                                @endif

                            </td>
                             <td><a href="{{url('admin/ticket/'.$item->id)}}" class="btn btn-success">Open</a></td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
    </div>

@endsection

