<?php

namespace App\Http\Controllers;

use App\Models\Penduduk;
use Illuminate\Http\Request;
use App\Http\Requests\StorePendudukRequest;
use App\Http\Requests\UpdatePendudukRequest;
use App\Models\Dusun;

class PendudukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $penduduk = Penduduk::orderBy('id', 'desc');

        if(request('search')){
            $penduduk->where('nama_penduduk', 'like', '%' . request('search') . '%')
            ->orWhere('nik_penduduk', 'like', '%' . request('search') . '%')
            ->orWhere('ttl_penduduk', 'like', '%' . request('search') . '%');
        }
        return view('penduduk.data-penduduk', [
            'title' => 'Data Penduduk',
            'penduduks' => $penduduk->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('penduduk.tambah-penduduk', [
            'title' => 'Tambah Data Penduduk',
            'dusuns' => Dusun::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorePendudukRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_penduduk' => 'required|max:255',
            'nik_penduduk' => 'required',
            'ttl_penduduk' => 'required',
            'jk_penduduk' => 'required',
            'agama' => 'required',
            'dusun_id' => 'required',
            'alamat_penduduk' => 'required',
            'ket_penduduk' => 'required'

        ]);

        Penduduk::create($validatedData);
        return redirect('/penduduk')->with('success', 'Data Penduduk berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function show(Penduduk $penduduk)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function edit(Penduduk $penduduk)
    {
        return view('penduduk.edit-penduduk', [
            'title' => 'Edit Data Penduduk',
            'penduduk' => $penduduk,
            'dusuns' => Dusun::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatePendudukRequest  $request
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Penduduk $penduduk)
    {
        $rules = [
            'nama_penduduk' => 'required|max:255',
            'nik_penduduk' => 'required',
            'ttl_penduduk' => 'required',
            'jk_penduduk' => 'required',
            'agama' => 'required',
            'dusun_id' => 'required',
            'alamat_penduduk' => 'required',
            'ket_penduduk' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Penduduk::where('id', $penduduk->id)->update($validatedData);
        return redirect('/penduduk')->with('success', 'Data Penduduk berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Penduduk  $penduduk
     * @return \Illuminate\Http\Response
     */
    public function destroy(Penduduk $penduduk)
    {
        Penduduk::destroy($penduduk->id);
        return redirect('/penduduk')->with('success', 'Data Penduduk telah dihapus');
    }
}
