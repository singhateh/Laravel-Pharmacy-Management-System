<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $title = "categories";
        $categories = Category::get();
        return view('categories.categories',compact(
            'title','categories',
        ));
    }


    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|max:100',
        ]);
        Category::create($request->all());
        $notification=array(
            'message'=>"Category has been added",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }


    public function update(Request $request)
    {
        $this->validate($request,['name'=>'required|max:100']);
        $category = Category::find($request->id);
        $category->update([
            'name'=>$request->name,
        ]);
        $notification=array(
            'message'=>"Category has been updated",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }


    public function destroy(Request $request)
    {
        $category = Category::find($request->id);
        $category->delete();
        $notification=array(
            'message'=>"Category has been deleted",
            'alert-type'=>'success',
        );
        return back()->with($notification);
    }
}
