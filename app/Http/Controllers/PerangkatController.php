<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use App\Models\Perangkat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StorePerangkatRequest;
use App\Http\Requests\UpdatePerangkatRequest;

class PerangkatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $perangkat = Perangkat::orderBy('id', 'desc');

        if(request('search')){
            $perangkat->where('penduduk_id', 'like', '%' . request('search') . '%');
        }
        return view('perangkat-desa.data-perangkat', [
            'title' => 'Data Perangkat Desa',
            'perangkats' => $perangkat->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('perangkat-desa.tambah-perangkat', [
            'title' => 'Tambah Data Perangkat Desa',
            'penduduks' => Penduduk::all()
        ]);

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePerangkatRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'penduduk_id' => 'required',
            'jabatan' => 'required',
            'study' => 'required',
            'foto_perangkat' => 'image|file|max:5120',

        ]);

        if ($request->file('foto_perangkat')) {
            $validatedData['foto_perangkat'] = $request->file('foto_perangkat')->store('foto-perangkat');
        }

        Perangkat::create($validatedData);
        return redirect('/perangkat')->with('success', 'Data Perangkat Desa berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function show(Perangkat $perangkat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function edit(Perangkat $perangkat)
    {
        return view('perangkat-desa.edit-perangkat', [
            'title' => 'Edit Data Perangkat Desa',
            'perangkat' => $perangkat,
            'penduduks' => Penduduk::all(),

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePerangkatRequest  $request
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Perangkat $perangkat)
    {
        $rules = [
            'penduduk_id' => 'required',
            'jabatan' => 'required',
            'study' => 'required',
            'foto_perangkat' => 'image|file|max:5120',

        ];

        $validatedData = $request->validate($rules);

        if ($request->file('foto_perangkat')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $validatedData['foto_perangkat'] = $request->file('foto_perangkat')->store('foto-perangkat');
        }

        Perangkat::where('id', $perangkat->id)->update($validatedData);
        return redirect('/perangkat')->with('success', 'Data Perangkat Desa berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Perangkat  $perangkat
     * @return \Illuminate\Http\Response
     */
    public function destroy(Perangkat $perangkat)
    {
        if ($perangkat->foto_perangkat) {
            Storage::delete($perangkat->foto_perangkat);
        }

        Perangkat::destroy($perangkat->id);
        return redirect('/perangkat')->with('success', 'Data Bantuan Sosial telah dihapus');
    }
}
