<?php

namespace App\Http\Controllers;

use App\Models\Product;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class POSController extends Controller
{

    public function pos()
    {
        $products = Product::all();
        return view('admin.pos', compact('products'));
    }
    public function addToCart(Request $request)
    {
        $productId = $request->input('product_id');
        $quantity = $request->input('quantity');

        // Retrieve the product from the database
        $product = Product::find($productId);

        // Check if the product exists
        if ($product) {
            // Retrieve the cart from the session
            $cart = Session::get('cart', []);

            // Check if the product is already in the cart
            if (isset($cart[$productId])) {
                // If the product is already in the cart, update the quantity
                $cart[$productId]['quantity'] += $quantity;
            } else {
                // If the product is not in the cart, add it with the specified quantity
                $cart[$productId] = [
                    'product_id' => $productId,
                    'name' => $product->name,
                    'price' => $product->price,
                    'quantity' => $quantity,
                ];
            }

            // Update the cart in the session
            Session::put('cart', $cart);
        } else {
            // If the product does not exist, return an error response
            return response()->json(['error' => 'Product not found'], 404);
        }
    }

    public function removeCart(Request $request)
    {
        $productId = $request->input('product_id');

        // Retrieve the cart from the session
        $cart = Session::get('cart', []);

        // Check if the product is in the cart
        if (isset($cart[$productId])) {
            // Remove the product from the cart
            unset($cart[$productId]);

            // Update the cart in the session
            Session::put('cart', $cart);
        }
    }
    public function updateCart(Request $request)
    {
        $cartItemId = $request->input('cart_item_id');
        $quantity = $request->input('quantity');

        // Retrieve the cart from the session
        $cart = Session::get('cart', []);

        // Check if the item exists in the cart
        if (isset($cart[$cartItemId])) {
            // Update the quantity of the item in the cart
            $cart[$cartItemId]['quantity'] = $quantity;

            // Update the cart in the session
            Session::put('cart', $cart);

            // Calculate updated item total and cart total
            $itemTotal = $cart[$cartItemId]['price'] * $cart[$cartItemId]['quantity'];
            $cartTotal = $this->calculateCartTotal($cart);

            return response()->json([
                'item_total' => number_format($itemTotal, 2),
                'cart_total' => number_format($cartTotal, 2),
            ]);
        } else {
            return response()->json(['error' => 'Item not found in cart'], 404);
        }
    }

    private function calculateCartTotal($cart)
    {
        return array_reduce($cart, function ($total, $item) {
            return $total + ($item['price'] * $item['quantity']);
        }, 0);
    }
}
