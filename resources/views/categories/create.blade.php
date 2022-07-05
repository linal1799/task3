@extends('layouts.master')
@section('content')

<div class="container">

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1>General Form</h1>
              </div>
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item active">General Form</li>
                </ol>
              </div>
            </div>
          </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <!-- left column -->
              <div class="col-md-6">
                <!-- general form elements -->
                <div class="card card-primary">
                  <div class="card-header">
                    <h3 class="card-title">FORM</h3>
                  </div>
                  @if ($errors->any())
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error )
                          <li>{{$error}}</li>

                          @endforeach
                      </ul>
                  </div>
                  @endif

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
                <!-- /.card -->

                <!-- general form elements -->

                <!-- /.card -->

                <!-- Input addon -->

                <!-- /.card -->
                <!-- Horizontal Form -->

                <!-- /.card -->

              </div>
              <!--/.col (left) -->
              <!-- right column -->

              <!--/.col (right) -->
            </div>
            <!-- /.row -->
          </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
      </div>
</div>
@endsection
