{{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2> form</h2>
  <form action="{{route('update',$data->id)}}" Method="post">
    @csrf

    <div class="form-group">
      <label for="email">title:</label>
      <input type="text" class="form-control"  placeholder="Enter title" name="title" value="{{$data->title}}">
    </div>

    <div class="form-group">
        <label for="pwd">description:</label>
        <input type="text" class="form-control"  placeholder="Enter description" name="description"value="{{$data->description}}">
      </div>
    <button type="submit" class="btn btn-default">update</button>

  </form>
</div>

</body>
</html> --}}






 {{-- <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>form</h2>
  <form action="{{route('store')}}" Method="post">
    @csrf
  <p>Make the viewport larger than 768px wide to see that all of the form elements are inline, left aligned, and the labels are alongside.</p>

    <div class="form-group">
      <label for="email">title:</label>
      <input type="text" class="form-control"  placeholder="Enter title" name="title">
    </div>

    <div class="form-group">
        <label for="pwd">description:</label>
        <input type="text" class="form-control"  placeholder="Enter description" name="description">
      </div>
    <button type="submit" class="btn btn-default">Submit</button>

  </form>
</div>

</body>
</html> --}}

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    You're logged in!
                    <br>
                    <br>
                    <hr>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

    <div class="container">
      <h2>form</h2>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error )
              <li>{{$error}}</li>

              @endforeach
          </ul>
      </div>
      @endif
      <form action="{{route('store')}}" Method="post">
        @csrf

        <div class="form-group">
          <label for="email">title:</label>
          <input type="text" class="form-control"  placeholder="Enter title" name="title" value="{{$data->title}}">
        </div>
<br>
        <div class="form-group">
            <label for="pwd">description:</label>
            <textarea type="text" class="form-control"  placeholder="Enter description" name="description" value="{{$data->description}}">{{$data->description}} </textarea>
          </div>

          <div class="form-group">
            <label for="email">Status:</label>
            <input type="text" class="form-control"  placeholder="Enter status" name="title" value="{{$data->status}}">
          </div>
        <button type="submit" class="btn btn-default">Submit</button>
    </div>
      </form>
    </div>

    </body>
    </html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>


