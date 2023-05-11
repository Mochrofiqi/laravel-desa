<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function index()
    {
        $user = User::orderBy('id', 'desc');

        if(request('search')){
            $user->where('nama', 'like', '%' . request('search') . '%')
            ->orWhere('level', 'like', '%' . request('search') . '%')
            ->orWhere('telepon', 'like', '%' . request('search') . '%')
            ->orWhere('username', 'like', '%' . request('search') . '%')
            ->orWhere('email', 'like', '%' . request('search') . '%');
        }
        return view('akun.data-akun', [
            'title' => 'Data Akun',
            'users' => $user->get()
        ]);
    }
    public function create()
    {
        return view('akun.tambah-akun', [
            'title' => 'Tambah Data Akun'
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'level' => 'required',
            'nama' => 'required|max:255',
            'jeniskelamin' => 'required',
            'telepon' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'foto' => 'image|file|max:5120'

        ]);
        if ($request->file('foto')) {
            $validatedData['foto'] = $request->file('foto')->store('foto-user');
        }

        $validatedData['password'] = Hash::make($validatedData['password']);
        User::create($validatedData);
        return redirect('/user')->with('success', 'Data user berhasil ditambahkan');
    }
    public function edit(User $user)
    {
        return view('akun.edit-akun', [
            'title' => 'Edit Data Akun',
            'user' => $user
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
        return redirect('/user')->with('success', 'Data user berhasil diupdate');
}
    public function destroy(User $user)
    {

        if ($user->foto) {
            Storage::delete($user->foto);
        }

        User::destroy($user->id);
        return redirect('/user')->with('success', 'Data user telah dihapus');
    }
}
