<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Product;
use App\Models\Purchase;
use Illuminate\Http\Request;


class ProductController extends Controller
{

    public function index()
    {
        $title = "products";
        $products = Product::with('purchase')->get();

        return view('products.products',compact(
            'title','products',
        ));
    }

    public function create(){
        $title= "Add Product";
        $products = Purchase::get();
        return view('products.add-product',compact(
            'title','products',
        ));
    }

    public function expired(){
        $title = "expired Products";
        $products = Purchase::whereDate('expiry_date', '=', Carbon::now())->get();

        return view('products.expired',compact(
            'title','products'
        ));
    }


    public function outstock(){
        $title = "outstocked Products";
        $products = Purchase::where('quantity', '<=', 0)->get();
        $product = Purchase::where('quantity', '<=', 0)->first();

        return view('products.outstock',compact(
            'title','products',
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'product'=>'required|max:200',
            'price'=>'required|min:1',
            'discount'=>'nullable',
            'description'=>'nullable|max:200',
        ]);
        $price = $request->price;
        if($request->discount >0){
           $price = $request->discount * $request->price;
        }
       try {
            Product::create([
            'purchase_id'=>$request->product,
            'price'=>$price,
            'discount'=>$request->discount,
            'description'=>$request->description,
        ]);
        $notification=array(
            'success'=> "Medicine added successfully!",
        );
       } catch (\Throwable $th) {
        $notifications = array(
            'error' => "Opps!! Something got wrong, Please check and try again",
        );
       }
        return redirect()->route('products')->with($notification);
    }

    public function show(Request $request, $id)
    {
        $title = "Edit Product";
        $product = Product::find($id);
        $purchased_products = Purchase::get();
        return view('products.edit-product',compact(
            'title','product','purchased_products'
        ));
    }

    public function update(Request $request,Product $product)
    {
        $this->validate($request,[
            'product'=>'required|max:200',
            'price'=>'required',
            'discount'=>'nullable',
            'description'=>'nullable|max:200',
        ]);

        $price = $request->price;
        if($request->discount >0){
           $price = $request->discount * $request->price;
        }
       try {
        $product->update([
            'purchase_id'=>$request->product,
            'price'=>$price,
            'discount'=>$request->discount,
            'description'=>$request->description,
        ]);
        $notification=array(
            'success'=>"Medicine updated successfully!",
        );
       } catch (\Throwable $th) {
        $notifications = array(
            'error' => "Opps!! Something got wrong, Please check and try again",
        );
       }
        return redirect()->route('products')->with($notification);
    }

    public function destroy(Request $request)
    {
        $product = Product::findOrFail($request->id);
        $product->delete();
        $notification = array(
            'success'=>"Product has been deleted",
        );
        return back()->with($notification);
    }
}
