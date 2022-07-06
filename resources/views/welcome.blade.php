


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Blog Post - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="{{route('dashboard')}}">Start blog</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        {{-- <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                        <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li> --}}
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href=""></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page content-->
        <div class="container mt-5">
            <div class="row">
                  <!-- Blog entries-->
                  <div class="col-lg-8">

                    <!-- Featured blog post-->


                    <div class="card mb-4">

                         <a href="#!"><img class="card-img-top" src="{{asset('uploads_images/'.$featured_blog->image)}}" alt="..." width="800px" height="350px" /></a>


                        <div class="card-body">
                            <div>
                                <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> {{$featured_blog->created_at->format('d.m.Y')}}</p>
                            </div>
                             {{-- <div class="small text-muted">January 1, 2022</div> --}}
                            <h2 class="card-title">{{$featured_blog->title}}</h2>
                            <p class="card-text">{!!Str::words($featured_blog->description,10,'...')!!}</p>
                            <a class="btn btn-primary"  href="{{route('blogs.show',$featured_blog->id)}}">Read more →</a>
                        </div>

                    </div>


                                        <!-- Nested row for non-featured blog posts-->
                                        <div class="row">
                                            @foreach ($blogs as $post )

                                            <div class="col-lg-6">
                                                <!-- Blog post-->
                                                <div class="card mb-4">
                                                    @if(empty($post->image))
                                                    <img src="{{asset('uploads_images/imm.jpg')}}" width="250" height="130"  >
                                                    @else
                                                     <img class="card-img-top" src="{{asset('uploads_images/'.$post->image)}}" width="250" height="130" alt="Image">
                                                    @endif


                                                <div class="card-body">
                                                    <p class="mb-0 text-muted"><i class="fa fa-clock-o"></i> {{$post->created_at->format('d.m.Y')}}</p>

                                                <h5 class="my-5">{{$post->title}}</h5>
                                                <p class="card-text">{!!Str::words($post->description,10,'...')!!}</p>

                                                <a class="btn btn-primary" href="{{route('blogs.show',$post->id)}}">Read more →</a>
                                            </div>
                                                </div>

                                                <!-- Blog post-->

                                            </div>

                                            @endforeach



                                        </div>
                                       <nav aria-label="Pagination">
                                        <hr class="my-0"/><ul class="pagination justify-content-center my-4">
                                             {!! $blogs->links() !!}</ul>
                                       </nav>

                    <!-- Comments section-->

                </div>
                <!-- Side widgets-->
                <div class="col-lg-4">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Enter search term..." aria-label="Enter search term..." aria-describedby="button-search" />
                                <button class="btn btn-primary" id="button-search" type="button">Go!</button>
                            </div>
                        </div>
                    </div>
 <!-- Categories widget-->
 <div class="card mb-4">
    <div class="card-header">Categories</div>
    <div class="card-body">
        <div class="row">
            @foreach($categories as $cat)
            <div class="col-sm-6">
                <ul class="list-unstyled mb-0">
                    <div>
                        <li><a href="">{{$cat->name}}</a></li>

                    </div>


                </ul>
            </div>
            @endforeach
            <div class="col-sm-6">

            </div>

        </div>
    </div>
</div>
          <!-- Side widget-->

          <div class="card mb-4">
                        <div class="card-header">Side Widget</div>
                        <div class="card-body">You can put anything you want inside of these side widgets. They are easy to use, and feature the Bootstrap 5 card component!</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Your Website 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>



