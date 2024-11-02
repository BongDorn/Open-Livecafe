<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function my_home()
    {
        $products = Product::all();
        return view('home.index', compact('products'));
    }
    public function index()
    {
        if (Auth::id()) {
            $usertype = Auth::user()->usertype;
            if ($usertype == 'user') {
                $products = Product::all();
                return view('home.index', compact('products'));
            } else {
                $total_user = User::where('usertype','=', 'user')->count();
                $total_product = Product::count();
                $total_order = Order::count();
                $total_delivery = Order::where('delivery_status','=', 'delivered')->count();
                return view('admin.index', compact('total_user','total_product','total_order','total_delivery'));
            }
        } else {
            return view('auth.login');
        }
    }
    public function add_cart(Request $request, $id)
    {

        if (Auth::id()) {
            $product = Product::find($id);
            $cart_name = $product->name;
            $cart_price =Str::remove('$',$product->price);
            $cart_image = $product->image;
            $cart_description = $product->description;

            $cart_stock = $product->stock;

            $carts = new Cart();
            $carts->name = $cart_name;
            $carts->price = $cart_price * $request->quantity;
            $carts->description = $cart_description;
            $carts->stock = $cart_stock;
            $carts->image = $cart_image;
            $carts->quantity = $request->quantity;

            $carts->userid = Auth()->user()->$id;

            $carts->save();
            return redirect()->back();
        } else {
            return redirect('login');
        }
    }

    public function show_cart()
    {
        //$userid = Auth::id();
        //$data = User::find($userid);

            $userid = Auth::id();
            $carts = Cart::where('userid','=', $userid)->get();
            //$carts = Cart::all();
            return view('home.cart', compact('carts'));

    }

    public function remove_cart($id)
    {
        $data = Cart::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function confirm_order()
    {
        if (Auth::id()) {
            $user_id = Auth::id();
            $data = User::find($user_id);
            $carts = Cart::where('userid','=', $user_id)->get();
            return view('user.confirm_order', compact('data', 'carts'));
        } else {
            return redirect('login');
        }
    }
    public function checkout()
    {
        $total_price = Cart::all();

        return view('home.checkout');
    }
}

// public function add_to_cart(Request $request, $id)
// {
//     if (Auth::id()) {
//         $product = Product::find($id);
//         $cart = new Cart();
//         $cart->name = $product->name;
//         $cart->price = $product->price;
//         $cart->quantity = $request->quantity;

