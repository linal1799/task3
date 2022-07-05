<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Blog;
use App\Models\Welcome;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {

        $categories=category::paginate(6);
        $featured_blog = Blog::latest()->first();
        $blogs = Blog::latest()->paginate(4);



    return view('welcome',compact('categories','blogs','featured_blog'));


}
}
