<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Product;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    function order()
    {
        $order = Product::all();
        return view('order', compact('order'));
    }

    function foodcart()
    {
        return view('cart');
    }

    function addFoodtoCart($id)
    {
        $order = Product::findOrFail($id);
        $addcart = session()->get('addcart', []);

        if(isset($addcart[$id])) {
            $addcart[$id]['quantity']++;
        } else {
            $addcart[$id] = [
                "name" => $order->name,
                "quantity" => 1,
                "makanan" => $order->makanan,
                "harga" => $order->harga,
                "images" => $order->images
            ];
        }

        session()->put('addcart', $addcart);
        return redirect()->back()->with('success', 'food has been add to cart');
    }


    function deleteproduct(Request $request)
    {
        if($request->id) {
            $addcart = session()->get('addcart');
            if(isset($addcart[$request->id])) {
                unset($addcart[$request->id]);
                session()->put('addcart', $addcart);
            }
            session()->flash('success', 'food successfully deleted.');
        }
    }
}


