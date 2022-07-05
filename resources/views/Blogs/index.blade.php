@extends('layouts.master')
@section('content')


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<div class="container">
<div class="row">
    <div class="col-12">

      <div class="card">
        <div class="card-header">
            {{-- @if(session()->has('message'))

            <div class="alert alert-success alert-dismissible fade show" role="alert">

                <strong>{{ session()->get('message') }}</strong>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">

                  <span aria-hidden="true">&times;</span>

                </button>

              </div>

              @endif --}}

              @if(session()->has('message'))
              <div class="container">
                <div class="alert alert-success alert-dismissible">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <strong> </strong> {{session()->get('message')}}
                </div>
              </div>
              @endif
          <h3 class="card-title">Table</h3>
          {{-- @if (session('success'))
          <div class="alert alert-success d-flex align-items-center" role="alert">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                  class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
                  <path
                      d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
              </svg>&nbsp;&nbsp;
              <div><strong>{{ session('success') }}</strong></div>
          </div><br>
        @endif --}}

          <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
              {{-- <input type="text" name="table_search" class="form-control float-right" placeholder="Search"> --}}



              {{-- <div class="input-group-append"> --}}
                <a href="{{route('blogs.form')}}" > <button type="button" class="btn btn-success">Add</button></a>
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
                <th>Title</th>
                <th>Description</th>
                <th>Status</th>
                <th>Category</th>
                <th>Image</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
                @php
                $i= 1;
            @endphp
                @foreach ($data as $d)
        <tr allign="center">
            <td>{{$d->id}}</td>
            <td>{{$d->title}}</td>
            <td> {!!Str::words($d->description,10,'...')!!}</td>
            {{-- <td>{!!$d->description!!}</td> --}}
            <td>
                @if ($d->status == 1)
               <spam class="badge badge-primary"> Active</spam>
                @else
                <spam class="badge badge-danger"> Inactive</spam>

                @endif

            </td>

            {{-- @dd($d); --}}
            <td>{{$d->category->name}}</td>
            <td>
                @if(empty($d->image))
                <img src="{{asset('uploads_images/imm.jpg')}}" width="150" height="90"  >
                @else
                <img class="card-img-top" src="{{asset('uploads_images/'.$d->image)}}" width="150" height="90" alt="Image">
                @endif

            <td>
              <a href="{{route('blogs.edit',$d->id)}}" > <button type="button" class="btn btn-success">edit</button></a>
              <a href="{{route('blogs.delete',$d->id)}}"> <button type="button" class="btn btn-danger">delete</button></a>
             </td>
        </tr>
        @endforeach

            </tbody>
          </table>
          {{$data->links()}}
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->
    </div>
  </div>

  </div>
@endsection
