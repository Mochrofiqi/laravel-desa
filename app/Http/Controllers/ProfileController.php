<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    public function index()
    {
        return view('profil.profil', [
            'title' => 'Profile',
            'user' => User::where('id', auth()->user()->id)->first()
        ]);
    }
    public function edit(User $user)
    {
        return view('profil.edit-profile', [
            'title' => 'Edit Data Profile',
            'user' =>  User::where('id', auth()->user()->id)->first()
        ]);
    }
    public function update( Request $request, User $user)
    {
        $rules = [
            'level' => 'required',
            'nama' => 'required|max:255',
            'jeniskelamin' => 'required',
            'telepon' => 'required',
            'username' => 'required',
            'email' => 'required',
            'foto' => 'image|file|max:5120'
        ];

        $validatedData = $request->validate($rules);

        if ($request->file('foto')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $validatedData['foto'] = $request->file('foto')->store('foto-user');
        }

        User::where('id', $user->id)->update($validatedData);
        return redirect('/profile')->with('success', 'Data profile berhasil diupdate');
    }
}
