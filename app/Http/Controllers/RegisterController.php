<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index(){
        return view('utama.register');

    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'level' => 'required',
            'nama' => 'required|max:255',
            'jeniskelamin' => 'required',
            'telepon' => 'required',
            'username' => ['required', 'min:4', 'max:255', 'unique:users'],
            'email' => 'required|email:dns|unique:users',
            'password' => ['required', 'min:3', 'max:255']
        ]);

        $validatedData['password'] = bcrypt($validatedData['password']);

        User::create($validatedData);

        return redirect('/login')->with('success', 'Anda berhasil melakukan registrasi!');
    }
}
