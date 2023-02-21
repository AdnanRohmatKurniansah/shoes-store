<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Klien;

class KlienRegisterController extends Controller
{
    public function index() 
    {
        return view('klien.klienRegister.index');
    }
    public function store(Request $request) 
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'username' => ['required', 'min:3', 'max:255', 'unique:kliens'],
            'email' => 'required|email:dns|unique:kliens',
            'password' => 'required|min:5|max:255' 
        ]);

        //$validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData['password'] = Hash::make($validatedData['password']);
        // pake metode hash yg sudah tersedia (sama seperti bcrypt )
        
        Klien::create($validatedData);
        
        //$request->session()->flash('success', 'Registration successfull! Please login ');
        
        return redirect('/klien/klienLogin')->with('success', 'Registration successfull! Please login ');
    }
}