<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Menu;


class ProductsController extends Controller
{
    public function index()
    {
        $products = Menu::all();
        return view('customer.products', compact('products'));
    }

    public function cart()
    {
        return view('customer.cart');
    }
    public function addToCart($id)
    {
        $product = Menu::findOrFail($id);

        $cart = session()->get('cart', []);

        if (isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "nama_menu" => $product->nama_menu,
                "gambar" => $product->gambar,
                "harga" => $product->harga,
                "quantity" => 1
            ];
        }

        session()->put('cart', $cart);
        return redirect()->back()->with('success', 'Product add to cart successfully!');
    }

    public function update(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart successfully updated!');
        }
    }

    public function remove(Request $request)
    {
        if ($request->id) {
            $cart = session()->get('cart');
            if (isset($cart[$request->id])) {
                unset($cart[$request->id]);
                session()->put('cart', $cart);
            }
            session()->flash('success', 'Product successfully removed!');
        }
    }
}
