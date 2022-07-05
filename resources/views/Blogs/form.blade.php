@extends('layouts.master')
@section('content')
<script src="https://cdn.ckeditor.com/ckeditor5/34.2.0/classic/ckeditor.js"></script>

<div class="container">


{{-- </div> --}}
<div class="container">
<div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title"> Form</h3>
    </div>
    @if (count($errors)>0)
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
    <form action="{{ route('blogs.store') }}" Method="post" enctype="multipart/form-data">
        @csrf
      <div class="card-body">
        <div class="form-group">
            <label for="exampleInputEmail1">Title</label>
            <input type="text" class="form-control" name="title" id="title"
                placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description</label>
            <textarea type="text" class="form-control" name="description" id="body" placeholder="description"></textarea>
        </div>


        <div class="form-group">

            <label for="title">Status</label>

            <select name="status" select id="status" class="form-control">

                <option value="" class="option_color">Select Status</option>

                <option value="1">Active</option>

                <option value="0">InActive</option>

            </select>

        </div>
        <div class="form-group">

            <label for="title">Category</label>

            <select name="category_id" select id="category_id" class="form-control">
                <option value="{{ old('category_id') }}" class="option_color">Select
                    Category </option>

                @foreach ($categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach


            </select>

        </div>
        {{-- <div class="form-group">
            <label for="exampleInputPassword1">Status</label>
            <input type="text" class="form-control"  name="status"  id="status" placeholder="status"value="{{$data->status}}">
          </div> --}}

 <!-- /.card-body -->
 <label for="myfile">Select an image:</label>
 <input type="file" id="myfile" name="image"><br><br>

 <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
    <a href="{{ route('blogs.index') }}"> <button type="button"
            class="btn btn-success">Back</button></a>

</div>

      </div>
    </form>
  </div>
</div>
<script>
    ClassicEditor
            .create( document.querySelector( '#body' ) )
            .then( editor => {
                    console.log( editor );
            } )
            .catch( error => {
                    console.error( error );
            } );
</script>
@endsection
