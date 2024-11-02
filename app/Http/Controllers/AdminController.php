<?php

namespace App\Http\Controllers;

use App\Models\Payment;

use App\Models\Product;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function payments()
    {
        $payments = Payment::all();
        return view('admin.payments', compact('payments'));
    }
    public function products()
    {
        $products = Product::all();
        return view('admin.products', compact('products'));
    }

    public function upload_product(Request $request)
    {

        $data = new Product;


        $data->name = $request->name;
        $data->description = $request->description;
        $data->price = $request->price;
        $data->stock = $request->stock;

        //$file = $request->file('image');
        //$filename = date('YmdHi') . $file->getClientOriginalName();
        $image = $request->image;
        $filename = time() . '.' . $image->getClientOriginalExtension();
        //$file->move(public_path('upload'), $filename);
        $request->image->move('upload/products/', $filename);
        $data->image = $filename;

        $data->save();

        return redirect()->back();
    }
    public function deleteProduct($id)
    {
        // Find the product by ID
        $products = Product::findOrFail($id);

        // Delete the product
        $products->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
    public function updateProduct(Request $request, $id)
    {
        $products = Product::find($id);
        // Update the product details
        $products->name = $request->name;
        $products->price = $request->price;
        $products->description = $request->description;

        $image = $request->image;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('upload/products', $imageName);
        }

        $products->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product updated successfully.');



        // Redirect back with a success message
    }
}
