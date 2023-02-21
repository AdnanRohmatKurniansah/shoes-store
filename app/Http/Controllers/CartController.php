<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Cart;
use App\Models\Klien;
use App\Models\Product;
    
class CartController extends Controller
{
    public function index(Request $request)
    {
        // ambil hanya keranjang belanja dari klien yang sedang login
        $carts = Cart::where('klien_id', Auth::guard('klien')->id())->get();

        return view('cart', [
            'carts' => $carts,
            'product' => Product::all()
        ]);
    }

    
    public function store(Request $request)
    {
        $product_id = $request->input('product_id');
        $quantity = $request->input('quantity');
        
        $carts = Cart::firstOrNew([
            'klien_id' => Auth::guard('klien')->id(),
            'product_id' => $product_id
        ]);
        
        if($carts) {
            $carts->quantity = $carts->quantity + $quantity;
            $carts->save();
        } else {
            $carts = new Cart();
            $carts->klien_id = $klien_id;
            $carts->product_id = $product_id;
            $carts->quantity = $quantity;
            $carts->save();
        }
        
        
        return redirect()->route('cart.index');
    }

}