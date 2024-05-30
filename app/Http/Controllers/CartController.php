<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class CartController extends Controller
{
     /**
      * Adds a product to the user's shopping cart.
      *
      * @param Request $request The HTTP request object.
      * @return RedirectResponse The redirect response.
      */
     public function addToCart(Request $request)
     {
         // Find the product by its ID.
         $product = Produk::find($request->id);

         // Get the user's shopping cart from the session.
         $cart = session()->get('cart', []);

         // Check if the product is already in the cart.
         if (isset($cart[$request->id])) {
            $cart[$request->id]['quantity']++;
        } else {
            $cart[$request->id] = [
                "name" => $product->nama,
                "quantity" => 1,
                "price" => $product->harga,
                "photo" => $product->image_path
            ];
        }
         
        session()->put('cart', $cart);

        return redirect()->back()->with('success', 'Product added to cart successfully!');
    }

    public function viewCart()
    {
        $cart = session()->get('cart', []);
        return view('cartPage', compact('cart'));
    }

    public function checkout()
    {
        // Handle checkout logic here
        session()->forget('cart');
        return redirect()->route('cart');
    }
}
