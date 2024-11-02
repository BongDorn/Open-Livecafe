<?php

// App\Http\Controllers\ProductController.php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function loadProductModal($id)
    {
        $product = Product::find($id);
        // Return a view or a JSON response with product details
        return view('partials.product_modal', compact('product'));
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
        $data = Product::find($id);

        // Delete the product
        $data->delete();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product deleted successfully.');
    }
    public function updateProduct(Request $request, $id)
    {
        $product = Product::find($id);
        // Update the product details
        $product->name = $request->name;
        $product->price = $request->price;
        $product->description = $request->description;

        $image = $request->image;
        if ($image) {
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('upload/products', $imageName);
        }

        $product->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Product updated successfully.');



        // Redirect back with a success message
    }
}
