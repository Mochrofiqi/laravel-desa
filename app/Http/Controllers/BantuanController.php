<?php

namespace App\Http\Controllers;

use App\Models\Bantuan;
use App\Models\Penduduk;
use App\Models\JenisBantuan;
use Illuminate\Http\Request;
use App\Http\Requests\StoreBantuanRequest;
use App\Http\Requests\UpdateBantuanRequest;

class BantuanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bantuan = Bantuan::orderBy('id', 'desc');

        if(request('search')){
            $bantuan->where('nama', 'like', '%' . request('search') . '%');
        }
        return view('bantuan-sosial.data-bansos', [
            'title' => 'Data Bantuan Sosial',
            'bantuans' => $bantuan->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('bantuan-sosial.tambah-bansos', [
            'title' => 'Tambah Data Bantuan Sosial',
            'penduduks' => Penduduk::all(),
            'jenis_bantuans' => JenisBantuan::all()

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreBantuanRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'penduduk_id' => 'required',
            'jenis_bantuan_id' => 'required',
            'ket_bansos' => 'required'

        ]);

        Bantuan::create($validatedData);
        return redirect('/bantuan')->with('success', 'Data Bantuan Sosial berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function show(Bantuan $bantuan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function edit(Bantuan $bantuan)
    {
        return view('bantuan-sosial.edit-bansos', [
            'title' => 'Edit Data Bantuan Sosial',
            'bantuan' => $bantuan,
            'penduduks' => Penduduk::all(),
            'jenis_bantuans' => JenisBantuan::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateBantuanRequest  $request
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bantuan $bantuan)
    {
        $rules = [
            'penduduk_id' => 'required',
            'jenis_bantuan_id' => 'required',
            'ket_bansos' => 'required'

        ];

        $validatedData = $request->validate($rules);

        Bantuan::where('id', $bantuan->id)->update($validatedData);
        return redirect('/bantuan')->with('success', 'Data Bantuan Sosial berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Bantuan  $bantuan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bantuan $bantuan)
    {
        Bantuan::destroy($bantuan->id);
        return redirect('/bantuan')->with('success', 'Data Bantuan Sosial telah dihapus');
    }
}
