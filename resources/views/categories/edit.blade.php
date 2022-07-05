@extends('layouts.master')
@section('content')

<div class="container">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form</h3>
    </div>

    <!-- /.card-header -->
    <!-- form start -->
    <form action="{{route('categories.update',$category->id)}}" method="POST">
        @csrf
      <div class="card-body">
        <div class="form-group">
          <label for="exampleInputEmail1">name</label>
          <input type="text" class="form-control" name="name" id="name" placeholder="name"value="{{$category->name}}">
        </div>

        <div class="form-group">

            <label for="title">Status</label>

            <select name="status" select id="status" class="form-control" >

                <option value="" class="option_color">Select Status</option>

                <option value="1"@if($category->status=='1') selected='selected' @endif >Active</option>

                <option value="0"@if($category->status=='0') selected='selected' @endif>InActive</option>

            </select>

          </div>





      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">update</button>
        <a href="{{route('categories.index')}}" > <button type="button" class="btn btn-success">Back</button></a>

      </div>
    </form>
  </div>
</div>
@endsection
