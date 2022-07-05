<?php

namespace App\Http\Controllers;
use App\Models\Form;
use flash;

use Illuminate\Http\Request;

class FormController extends Controller
{
    public function store(Request $request)
   {
    $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
        'status'=>'required',

    ]);
       $form=new Form();
       $form->title=$request->title;
       $form->description=$request->description;
       $form->status=$request->status;

       $form->save();
       if ($form) {
        request()->session()->flash('success','successfully saved  detail!!');
    }
       return redirect()->route('index');

   }
   public function index()
   {
       $data=Form::all();
       return view('index',compact('data'));
   }
   public function edit($id)
{
   $data=Form::find($id);
   return view('edit',compact('data'));
   return redirect()->route('index');
}
public function update (Request $request,$id)
{

    $this->validate($request,[
        'title'=>'required',
        'description'=>'required',
        'status'=>'required',

    ]);
    $form=Form::find($id);
    $form->title=$request->title;
       $form->description=$request->description;
       $form->status=$request->status;

       $form->update();
       if ($form) {
        request()->session()->flash('success','successfully updated  detail!!');
    }
       return redirect()->route('index');

}

public function delete($id)
{
$form=Form::find($id);
$form->delete();
if ($form) {
    request()->session()->flash('success','successfully deleted  detail!!');
}
return redirect()->route('index');
}
}
