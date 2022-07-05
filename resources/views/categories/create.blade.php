@extends('layouts.master')
@section('content')

<div class="container">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Form</h3>
    </div>

    <!-- /.card-header -->
    <!-- form start -->

    <form action="{{route('categories.store')}}" Method="post">
        @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">name</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Enter name">
          </div>

          <div class="form-group">

            <label for="title">Status</label>

            <select name="status" select id="status" class="form-control" >

                <option value="" class="option_color">Select Status</option>

                <option value="1">Active</option>

                <option value="0">InActive</option>

            </select>

          </div>





      </div>
      <!-- /.card-body -->

      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
        <a href="{{route('categories.index')}}" > <button type="button" class="btn btn-success">Back</button></a>

      </div>
    </form>
  </div>
</div>
@endsection
