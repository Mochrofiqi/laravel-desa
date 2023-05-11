<?php

namespace App\Http\Controllers;

use App\Models\Dusun;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use App\Http\Requests\StoreDusunRequest;
use App\Http\Requests\UpdateDusunRequest;
use Spatie\LaravelIgnition\Recorders\DumpRecorder\Dump;

class DusunController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dusun = Dusun::orderBy('id', 'desc');

        if(request('search')){
            $dusun->where('nama_dusun', 'like', '%' . request('search') . '%');
        }
        return view('dusun.data-dusun', [
            'title' => 'Data Dusun',
            'dusuns' => $dusun->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dusun.tambah-dusun', [
            'title' => 'Tambah Data Dusun',
            'penduduks' => Penduduk::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreDusunRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nama_dusun' => 'required|max:255',
            'rt' => 'required',
            'rw' => 'required',
            'kepala_dusun' => 'required',
            'kepala_rt' => 'required',
            'kepala_rw' => 'required',
            'jumlah_warga' => 'required'

        ]);

        Dusun::create($validatedData);
        return redirect('/dusun')->with('success', 'Data dusun berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Dusun  $dusun
     * @return \Illuminate\Http\Response
     */
    public function show(Dusun $dusun)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Dusun  $dusun
     * @return \Illuminate\Http\Response
     */
    public function edit(Dusun $dusun)
    {
        return view('dusun.edit-dusun', [
            'title' => 'Edit Data Dusun',
            'dusun' => $dusun,
            'penduduks' => Penduduk::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateDusunRequest  $request
     * @param  \App\Models\Dusun  $dusun
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Dusun $dusun)
    {
        $rules = [
            'nama_dusun' => 'required|max:255',
            'rt' => 'required',
            'rw' => 'required',
            'kepala_dusun' => 'required',
            'kepala_rt' => 'required',
            'kepala_rw' => 'required',
            'jumlah_warga' => 'required'
        ];

        $validatedData = $request->validate($rules);

        Dusun::where('id', $dusun->id)->update($validatedData);
        return redirect('/dusun')->with('success', 'Data Dusun berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Dusun  $dusun
     * @return \Illuminate\Http\Response
     */
    public function destroy(Dusun $dusun)
    {
        Dusun::destroy($dusun->id);
        return redirect('/dusun')->with('success', 'Data Dusun telah dihapus');
    }
}
