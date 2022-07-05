@extends('layouts.master')
@section('content')

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
<div class="row">
    <div class="col-12">
        {{-- @if(session()->has('message'))

                <div class="alert alert-success alert-dismissible fade show" role="alert">

                    <strong>{{ session()->get('message') }}</strong>

                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                      <span aria-hidden="true">&times;</span>

                    </button>

                  </div>

                  @endif --}}
      <div class="card">
        <div class="card-header">
            @if(session()->has('message'))
            <div class="container">
              <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert">&times;</button>
                <strong> </strong> {{session()->get('message')}}
              </div>
            </div>
            @endif
          <h3 class="card-title">Category Table</h3>


          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              {{-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> --}}



              {{-- <div class="input-group-append"> --}}
                <a href="{{route('categories.create')}}" > <button type="button" class="btn btn-success">Add</button></a>
                {{-- <button type="submit" class="btn btn-default">
                  <i class="fas fa-search"></i>
                </button> --}}
              {{-- </div> --}}
            </div>
          </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
          <table class="table table-hover text-nowrap">
            <thead>
              <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Status</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                $i= 1;
            @endphp
                @foreach ($categories as $category)
        <tr allign="center">
            <td>{{$i++}}</td>
            <td>{{$category->name}}</td>
            <td>
                @if ($category->status == 1)
                Active
                @else
                Inactive
                @endif

            </td>
            <td>
              <a href="{{route('categories.edit',$category->id)}}" > <button type="button" class="btn btn-success">edit</button></a>
              <a href="{{route('categories.delete',$category->id)}}"> <button type="button" class="btn btn-danger">delete</button></a>
             </td>
        </tr>
        @endforeach

            </tbody>
          </table>
          {{$categories->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

  </div>
@endsection
