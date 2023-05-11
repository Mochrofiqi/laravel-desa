<?php

namespace App\Http\Controllers;

use App\Models\Kematian;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Http\Requests\StoreKematianRequest;
use App\Http\Requests\UpdateKematianRequest;

class KematianController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $kematian = Kematian::orderBy('id', 'asc');

        if(auth()->user()->level === 'Admin') {
            $kematian = Kematian::orderBy('id', 'desc');
        }else{
            $kematian = Kematian::where('user_id', auth()->user()->id)->orderBy('id', 'desc');
        }

        if(request('search')){
            $kematian->where('penduduk_id', 'like', '%' . request('search') . '%');
        }
        return view('pelayanan-kematian.data-kematian', [
            'title' => 'Data Pelayanan Kematian',
            'kematians' => $kematian->get()

        ]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelayanan-kematian.tambah-kematian', [
            'title' => 'Tambah Data Pelayanan Kematian',
            'penduduks' => Penduduk::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKematianRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'penduduk_id' => 'required',
            'nama_pengirim' => 'required',
            'ttl_kematian' => 'required',
            'pukul' => 'required',
            'penyebab' => 'required',
            'ttd_kematian' => 'image|file|max:5120',

        ]);

        if ($request->file('ttd_kematian')) {
            $validatedData['ttd_kematian'] = $request->file('ttd_kematian')->store('file-kematian');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Kematian::create($validatedData);
        return redirect('/kematian')->with('success', 'Data Pelayanan Kematian berhasil ditambahkan');
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function show(Kematian $kematian)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function edit(Kematian $kematian)
    {
        return view('pelayanan-kematian.edit-kematian', [
            'title' => 'Edit Data Pelayanan Kematian',
            'kematian' => $kematian,
            'penduduks' => Penduduk::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKematianRequest  $request
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Kematian $kematian)
    {
        $rules = [
            'penduduk_id' => 'required',
            'nama_pengirim' => 'required',
            'ttl_kematian' => 'required',
            'pukul' => 'required',
            'penyebab' => 'required',
            'ttd_kematian' => 'image|file|max:5120',
            'ket_kematian' => 'required',
            'akte_kematian' => 'file|max:5120',


        ];

        $validatedData = $request->validate($rules);

        if ($request->file('ttd_kematian')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $validatedData['ttd_kematian'] = $request->file('ttd_kematian')->store('file-kematian/ttd');
        }
        if ($request->file('akte_kematian')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $validatedData['akte_kematian'] = $request->file('akte_kematian')->store('file-kematian/akte-kematian');
        }

        Kematian::where('id', $kematian->id)->update($validatedData);
        return redirect('/kematian')->with('success', 'Data Pelayanan Kematian berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Kematian  $kematian
     * @return \Illuminate\Http\Response
     */
    public function destroy(Kematian $kematian)
    {
        if ($kematian->ttd_kematian) {
            Storage::delete($kematian->ttd_kematian);
        }
        if ($kematian->akte_kematian) {
            Storage::delete($kematian->akte_kematian);
        }

        Kematian::destroy($kematian->id);
        return redirect('/kematian')->with('success', 'Data Pelayanan Kematian telah dihapus');
    }

    public function download(Kematian $kematian){

        return Storage::download($kematian->akte_kematian );

    }
}
