<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {

        $total_blog= blog::all()->count();
        $total_category= category::all()->count();
    return view('dashboard',compact('total_category','total_blog'));
}
}
