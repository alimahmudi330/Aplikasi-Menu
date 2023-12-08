<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StripeController extends Controller
{

    public function checkout(Request $request)
    {
        //$user         = auth()->user();
        $productItems = [];

        // Check if the cart is empty
        $cartItems = session('cart');
        if (empty($cartItems)) {
            return redirect()->route('cart')->with('error', 'Your cart is empty.');
        }

        \Stripe\Stripe::setApiKey(config('stripe.sk'));

        foreach (session('cart') as $id => $details) {

            $nama_menu = $details['nama_menu'];
            $harga = $details['harga'];
            $quantity = $details['quantity'];

            $two0 = "00";
            $unit_amount = "$harga$two0";

            $productItems[] = [
                'price_data' => [
                    'product_data' => [
                        'name' => $nama_menu,
                    ],
                    'currency'     => 'IDR',
                    'unit_amount'  => $unit_amount,
                ],
                'quantity' => $quantity
            ];
        }

        $checkoutSession = \Stripe\Checkout\Session::create([
            'line_items'            => [$productItems],
            'mode'                  => 'payment',
            'allow_promotion_codes' => true,
            'metadata'              => [
                'user_id' => "0001"
            ],
            'customer_email' => "Customer@gmail.com", //$user->email,
            'success_url' => route('success'),
            'cancel_url'  => route('cancel'),
        ]);

        return redirect()->away($checkoutSession->url);
    }

    public function success()
    {
        return "Thanks for you order You have just completed your payment. The seeler will reach out to you as soon as possible";
    }

    public function cancel()
    {
        return view('customer/cancel');
    }
}
