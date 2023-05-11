<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Saran;
use Illuminate\Http\Request;

class SaranController extends Controller
{
    public function index(){

        if(auth()->user()->level === 'Admin') {
            $saran = Saran::orderBy('id', 'desc');

        }else{
            $saran = Saran::where('user_id', auth()->user()->id)->orderBy('id', 'asc');
        }

        if(request('search')){
            $saran->where('created_at', 'like', '%' . request('search') . '%');
        }
        return view('saran-kritikan.data-saran', [
            'title' => 'Data Saran',
            'sarans' => $saran->get()

        ]);
    }
    public function create()
    {
        return view('saran-kritikan.tambah-saran', [
            'title' => 'Saran dan Kritikan',
            'user' => User::where('id', auth()->user()->id)->first()
        ]);
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'user_id' => 'required',
            'jk_saran' => 'required',
            'alamat_saran' => 'required',
            'saran' => 'required'

        ]);

        $validatedData['user_id'] = auth()->user()->id;

        Saran::create($validatedData);
        return redirect('/saran')->with('success', 'Saran berhasil ditambahkan');
    }
    public function edit(Saran $saran)
    {
        return view('saran-kritikan.edit-saran', [
            'title' => 'Edit Data Saran dan Kritikan',
            'saran' => $saran,
            'user' => User::where('id', auth()->user()->id)->first()

        ]);
    }
    public function update(Request $request, Saran $saran)
    {
        $rules = [
            'user_id' => 'required',
            'jk_saran' => 'required',
            'alamat_saran' => 'required',
            'saran' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Saran::where('id', $saran->id)->update($validatedData);
        return redirect('/saran')->with('success', 'Saran berhasil diupdate');
    }
    public function destroy(Saran $saran)
    {
        Saran::destroy($saran->id);
        return redirect('/saran');
    }
}

