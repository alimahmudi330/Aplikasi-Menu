<?php

// CustomerController.php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function showMenu()
    {
        $menu = Menu::all();
        return view('customer.menu', compact('menu'));
    }

    public function showCart()
    {
        // Logika untuk menampilkan keranjang belanjaan
        // Anda dapat menggunakan session atau database untuk menyimpan data keranjang belanjaan
        return view('customer.cart');
    }
}
