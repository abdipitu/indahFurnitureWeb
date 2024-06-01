<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use App\Models\CheckoutProduct;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

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
                "id" => $product->id,
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

    public function checkout(Request $request)
    {
        $items['items'] = json_decode($request->items, true);

        // $request->validate([
        //     'product_id' => 'required|exists:products,id',
        // ]);

        $validate = Validator::make($items, [
            'items' => ['required', 'array'],
            'items.*.id' => ['required', 'integer'],
            'items.*.name' => ['required', 'string'],
            'items.*.quantity' => ['required', 'integer'],
            'items.*.price' => ['required', 'integer'],
            'items.*.photo' => ['required', 'string'],
        ], [])->validate();

        $checkouts = Checkout::create([
            'user_id' => Auth::id()
        ]);

        foreach($validate['items'] as $item){
            $checkoutProduct = CheckoutProduct::create([
                'product_id' => $item['id'],
                'quantity' => $item['quantity'],
                'checkout_id' => $checkouts->id
            ]);
        }

        // Handle checkout logic here
        session()->forget('cart');
        return redirect()->route('user');
    }
}
