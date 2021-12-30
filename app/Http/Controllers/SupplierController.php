<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    public function index()
    {
        $title = "Suppliers";
        $suppliers = Supplier::get();
        return view('suppliers.suppliers', compact('title', 'suppliers'));
    }


    public function create()
    {
        $title = "add supplier";
        $products = Product::get();
        return view('suppliers.add-supplier', compact(
            'title',
            'products'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'product' => 'required',
            'email' => 'email|string',
            'phone' => 'max:13',
            'company' => 'max:200|required',
            'address' => 'required|max:200',
            'description' => 'max:200',
        ]);
        try {
            Supplier::create([
                'name' => $request->name,
                'email' => $request->email,
                'phone' => $request->phone,
                'company' => $request->company,
                'address' => $request->address,
                'product' => $request->product,
                'description' => $request->description,
            ]);
            $notification = array(
                'message' => "Supplier has been added",
                'alert-type' => 'success',
            );
        } catch (\Throwable $th) {
            $notifications = array(
                'message' => "Opps!! Something got wrong, Please check and try again",
                'alert-type' => 'error',
            );
        }
        return redirect()->route('suppliers')->with($notification);
    }


    public function show(Request $request, $id)
    {
        $title = "edit Supplier";
        $products = Product::get();
        $supplier = Supplier::find($id);
        return view('suppliers.edit-supplier', compact(
            'title',
            'products',
            'supplier'
        ));
    }


    public function update(Request $request, Supplier $supplier)
    {
        $this->validate($request, [
            'name' => 'required',
            'product' => 'required',
            'email' => 'email|string',
            'phone' => 'max:13',
            'company' => 'max:200|required',
            'address' => 'required|max:200',
            'description' => 'max:200',
        ]);

        try {
            $supplier->update($request->all());
            $notification = array(
                'message' => "Supplier has been updated",
                'alert-type' => 'success',
            );
        } catch (\Throwable $th) {
            $notifications = array(
                'message' => "Opps!! Something got wrong, Please check and try again",
                'alert-type' => 'error',
            );
        }
        return redirect()->route('suppliers')->with($notification);
    }

    public function destroy(Request $request)
    {
        $supplier = Supplier::find($request->id);
        $supplier->delete();
        $notification = array(
            'message' => "Supplier has been deleted",
            'alert-type' => 'success',
        );
        return back()->with($notification);
    }
}
