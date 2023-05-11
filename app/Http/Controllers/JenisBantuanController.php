<?php

namespace App\Http\Controllers;

use App\Models\JenisBantuan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreJenisBantuanRequest;
use App\Http\Requests\UpdateJenisBantuanRequest;

class JenisBantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $jenisBantuan = JenisBantuan::orderBy('id', 'desc');

        if(request('search')){
            $jenisBantuan->where('nama_bansos', 'like', '%' . request('search') . '%');
        }
        return view('jenis-bansos.data-jenis-bansos', [
            'title' => 'Data Jenis Bansos',
            'jenis_bantuans' => $jenisBantuan->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('jenis-bansos.tambah-jenis-bansos', [
            'title' => 'Tambah Data Jenis Bansos'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreJenisBantuanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store (Request $request)
    {
        $validatedData = $request->validate([
            'nama_bansos' => 'required|max:255',
            'periode_bansos' => 'required',
            'penerima_bansos' => 'required',
            'kategori_bansos' => 'required',
            'barang_bansos' => 'required'
        ]);

        JenisBantuan::create($validatedData);
        return redirect('/jenis_bantuan')->with('success', 'Data Jenis Bansos berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\JenisBantuan  $jenisBantuan
     * @return \Illuminate\Http\Response
     */
    public function show(JenisBantuan $jenisBantuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\JenisBantuan  $jenisBantuan
     * @return \Illuminate\Http\Response
     */
    public function edit(JenisBantuan $jenisBantuan)
    {
        return view('jenis-bansos.edit-jenis-bansos', [
            'title' => 'Edit Data Jenis Bansos',
            'jenis_bantuan' => $jenisBantuan

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateJenisBantuanRequest  $request
     * @param  \App\Models\JenisBantuan  $jenisBantuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, JenisBantuan $jenisBantuan)
    {
        $rules = [
            'nama_bansos' => 'required|max:255',
            'periode_bansos' => 'required',
            'penerima_bansos' => 'required',
            'kategori_bansos' => 'required',
            'barang_bansos' => 'required'
        ];

        $validatedData = $request->validate($rules);

        JenisBantuan::where('id', $jenisBantuan->id)->update($validatedData);
        return redirect('/jenis_bantuan')->with('success', 'Data Jenis Bansos berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\JenisBantuan  $jenisBantuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(JenisBantuan $jenisBantuan)
    {
        JenisBantuan::destroy($jenisBantuan->id);
        return redirect('/jenis_bantuan')->with('success', 'Data Jenis Bansos telah dihapus');
    }
}
