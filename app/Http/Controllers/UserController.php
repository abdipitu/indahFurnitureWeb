<?php

namespace App\Http\Controllers;

use App\Models\Checkout;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        $checkouts = Checkout::with('checkoutProducts', 'checkoutProducts.product')->where('user_id', Auth::id())->get();
        return view('pengguna.dashboard', ['checkouts' => $checkouts]);
    }
}
