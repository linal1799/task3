<?php

namespace App\Http\Controllers;
use App\Models\Blog;
use App\Models\Category;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $data=Blog::with('category')->paginate(10);
        return view('blogs.index',compact('data'));

    }
    public function form()
    {
        $categories= Category::all();
        return view('blogs.form', compact('categories'));
    }
    public function store(Request $request)
    {
     $this->validate($request,[
         'title'=>'required',
         'description'=>'required',
         'status'=>'required',
         'category_id'=>'required',
     ]);
        $form=new Blog();
        $form->title=$request->title;
        $form->description=$request->description;
        $form->status=$request->status;
        $form->category_id=$request->category_id;
        if($request->hasFile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time() . '.' . $extension;
            $file->move('uploads_images/', $filename);
            $form->image= $filename;
        }
        // dd($form);
        $form->save();

        return redirect()->route('blogs.index') ->with('message','successfully saved  detail!!');

    }
    public function edit($id)
    {
        $categories= Category::all();

       $data=Blog::find($id);
       return view('blogs.edit',compact('data','categories'));
       return redirect()->route('blogs.index');
    }
    public function update (Request $request,$id)
    {

        $this->validate($request,[
            'title'=>'required',
            'description'=>'required',
            'status'=>'required',
            'category_id'=>'required',
        ]);
        $form=Blog::find($id);
        $form->title=$request->title;
           $form->description=$request->description;
           $form->status=$request->status;
           $form->category_id=$request->category_id;
           if($request->hasFile('image')){
            $file= $request->file('image');
            $extension= $file->getClientOriginalExtension();
            $filename= time() . '.' . $extension;
            $file->move('uploads_images/', $filename);
            $form->image= $filename;
        }
           $form->update();

           return redirect()->route('blogs.index')->with('message','successfully updated  detail!!');

    }
    public function delete($id)
{
$form=Blog::find($id);
$form->delete();

return redirect()->route('blogs.index') ->with('message','successfully deleted  detail!!');
}
public function show($id){
    $blog=Blog::find($id);
    $categories = Category::all();
    // $blog= blog::where('status')->get();
    return view ('blogs.show',compact('categories','blog'));

}
}
