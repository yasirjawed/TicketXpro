@extends('layouts.master')
@section('title','Admin Category')
@section('content')
<!-- Button trigger modal -->


  <!-- Modal -->
  <div class="modal fade" id="deletemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form action="{{url('admin/delete-category')}}" method="POST">
            @csrf
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete Category With It's Posts</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="category_delete_id" class="category_delete_id" id="category_id">
                    <h5>Are you sure you want to delete this category with all it's posts?</h5>
                </div>
                <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Delete</button>
                </div>
        </form>

      </div>
    </div>
  </div>
<div class="container-fluid px-4">
    <div class="card mt-4">
        <div class="card-header">
            <h4>View Category <a href="{{url('admin/add-category')}}" class="btn btn-primary btn-sm float-end">Add Category</a></h4>
        </div>
        <div class="card-body">
            @if(session('message'))
                <div class="alert alert-success">{{session('message') }}</div>
            @endif
            <table class="table table-bordered" id="myDataTable">
                <thead>
                    <tr>
                    <th>ID</th>
                    <th>Category Name</th>
                    <th>Image</th>
                    <th>Status</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($category as $item)
                        <tr>
                            <td>{{$item->id}}</td>
                            <td>{{$item->name}}</td>
                            <td>
                            <img src="{{ asset('uploads/category/'.$item->image) }}" width="50px" height="50px" alt="img">
                            </td>
                            <td>{{ $item->status=='1'? 'hidden':'Shown'}}</td>
                            <td><a href="{{url('admin/edit-category/'.$item->id)}}" class="btn btn-success">Edit</a></td>
                            {{-- <td><a href="{{url('admin/delete-category/'.$item->id)}}" class="btn btn-danger">Delete</a></td> --}}
                            <td><button class="btn btn-danger deletecategoryBtn" type="button" value="{{$item->id}}">Delete</button></td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
@section('scripts')
<script>
    $(document).ready(function (){
        // $('.deletecategoryBtn').click(function(e){
            $(document).on('click','.deletecategoryBtn',function(e){

            // });
            e.preventDefault();
            var category_id = $(this).val();
            $('#category_id').val(category_id);
            $('#deletemodal').modal('show');
        });
    });
</script>
@endsection
