@extends('layouts.masters')
@section('title','View Posts')
@section('content')

    <div class="container-fluid px-4">
        <div class="card mt-4">

            <div class="card-header">
                <h4>View All Complaint
                <a href="{{ url('customer/add-ticket') }}" class="btn btn-primary btn-sm float-end">Generate New Complaint</a></h4>
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
                    @foreach ($posts as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->subject}}</td>
                            <td>
                                {{-- {{$item->status=='0'?'OPEN': 'IN PROGRESS'}} --}}
                                @if($item->status=='0')
                                open
                                @elseif ($item->status=='1')
                                In Progress
                                @else
                                Closed
                                @endif

                            </td>
                             <td><a href="{{url('customer/ticket/'.$item->id)}}" class="btn btn-success">Open</a></td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
        </div>
    </div>

@endsection

