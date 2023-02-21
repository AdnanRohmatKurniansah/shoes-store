<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class KlienLoginController extends Controller
{
    public function index() 
    {
        return view('klien.klienLogin.index');
    }
    
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);
        
        if (Auth::guard('klien')->attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('cart');
        }
        return back()->with('loginError', 'Login failed!');
    }
    
    public function logout()
    {
        Auth::guard('klien')->logout();

        request()->session()->invalidate();
    
        request()->session()->regenerateToken();
    
        return redirect('/');
    }
}