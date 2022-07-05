<?php

namespace App\Http\Controllers;
use App\Models\Category;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create()
    {
        return view('categories.create');
    }
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'status'=>'required',
           
        ]);
        $category=new Category();
        $category->name=$request->name;
        $category->status=$request->status;

        $category->save();

        return redirect()->route('blogs.index') ->with('message','successfully saved  detail!!');

    }
public function index()
{

 $categories=category::paginate(10);
return view('categories.index',compact('categories'));
}
public function edit($id,Request $request)
{
    $category=Category::find($id);
    return view('categories.edit',compact('category'));
}
public function update($id,Request $request)
{
    $this->validate($request,[
        'name'=>'required',
        'status'=>'required',
    ]);
    $category=Category::find($id);
    $category->name=$request->name;
    $category->status=$request->status;
    $category->update();


    return redirect()->route('categories.index') ->with('message','successfully update  detail!!');


}
public function delete($id,Request $request)
{
    $category=Category::find($id);
    $category->delete();
    return redirect()->route('categories.index') ->with('message','successfully deleted  detail!!');


}

}
