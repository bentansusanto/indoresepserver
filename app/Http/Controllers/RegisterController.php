<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index');
    }

    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required| email:dns',
            'password' => 'required| min:8'
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);
        $validatedData['name'] = ucwords($validatedData['name']);
        User::create($validatedData);

        return redirect('/login')->with('success','Registrasi berhasil!');
    }
}
