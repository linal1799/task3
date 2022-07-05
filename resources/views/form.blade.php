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
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<li><a href="{{route('index')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>table</a></li>
<body>

    <div class="container">
      <h2> form</h2>
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul>
              @foreach ($errors->all() as $error )
              <li>{{$error}}</li>

              @endforeach
          </ul>
      </div>
      @endif
      {{-- @if(count($errors)>0)
      <div class="alert alert-danger">
        <ul>
            @foreach($errors->all()as $error)
            <li>{{$error}}</li>
            @endforeach
        </ul>
      </div>
      @endif --}}
      <form action="{{route('store')}}" Method="post">
        @csrf
            <div class="form-group">
          <label for="title">title:</label>
          <input type="text" class="form-control" name="title" id="title" placeholder="Enter " name="title">
        </div>
        <div class="form-group">
          <label for="description">description:</label>
          <textarea type="text" class="form-control" name="description" id="description" placeholder="Enter description" name="description"></textarea>
        </div>
        <div class="form-group">
            <label for="title">Status:</label>
            <input type="text" class="form-control" name="status" id="status" placeholder="Enter " name="status">
          </div>
        <button type="submit" class="btn btn-default">Submit</button>
      </form>
    </div>

    </body>
</html>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>

