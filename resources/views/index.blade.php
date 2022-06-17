
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
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container">
    <li><a href="{{route('form')}}"><i class="icon-Commit"><span class="path1"></span><span class="path2"></span></i>Add form</a></li>

  <h2> Table</h2>
  @if (session('success'))
  <div class="alert alert-success d-flex align-items-center" role="alert">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
          class="bi bi-check-circle-fill flex-shrink-0 me-2" viewBox="0 0 16 16" role="img" aria-label="Success:">
          <path
              d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
      </svg>&nbsp;&nbsp;
      <div><strong>{{ session('success') }}</strong></div>
  </div><br>
@endif
  {{-- @if(session()->has('message'))
  <div class="alert alert-success">
    {{session()->get('message')}}
  </div>
  @endif --}}
  <table class="table table-bordered">
    <thead>
        <tr>
            <th>title</th>
            <th>description</th>
            <th>edit</th>
            <th>delete</th>
          </tr>
    </thead>
    <tbody>
        @foreach ($data as $d)


        <tr>
          <td>{{$d->title}}</td>
          <td>{{$d->description}}</td>
          <td><a href="{{route('edit',$d->id)}}"><button class="btn btn-success">Edit</button></a></td>
          <td><a href="{{route('delete',$d->id)}}"><button class="btn btn-success">delete</button></a></td>
        </tr>

        @endforeach
    </tbody>
  </table>
</div>

</body>
</html>
</div>
</div>
</div>
</div>
</x-app-layout>


