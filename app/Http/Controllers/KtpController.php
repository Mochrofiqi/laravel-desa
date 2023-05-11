<?php

namespace App\Http\Controllers;

use App\Models\Ktp;
use App\Models\Penduduk;
use Illuminate\Http\Request;
use App\Http\Requests\StoreKtpRequest;
use App\Http\Requests\UpdateKtpRequest;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\TryCatch;

class KtpController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $ktp = Ktp::orderBy('id', 'asc');

        if(auth()->user()->level === 'Admin') {
            $ktp = Ktp::orderBy('id', 'desc');
        }else{
            $ktp = Ktp::where('user_id', auth()->user()->id)->orderBy('id', 'desc');
        }

        if(request('search')){
            $ktp->where('penduduk_id', 'like', '%' . request('search') . '%');
        }
        return view('pelayanan-ktp.data-ktp', [
            'title' => 'Data Pelayanan KTP',
            'ktps' => $ktp->get()

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pelayanan-ktp.tambah-ktp', [
            'title' => 'Tambah Data Pelayanan KTP',
            'penduduks' => Penduduk::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreKtpRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'penduduk_id' => 'required',
            'darah' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'kk' => 'image|file|max:5120',
            'foto_ktp' => 'image|file|max:5120',
            'ttd_ktp' => 'image|file|max:5120',

        ]);

        if ($request->file('kk')) {
            $validatedData['kk'] = $request->file('kk')->store('file-ktp/kk');
        }
        if ($request->file('foto_ktp')) {
            $validatedData['foto_ktp'] = $request->file('foto_ktp')->store('file-ktp/profile');
        }
        if ($request->file('ttd_ktp')) {
            $validatedData['ttd_ktp'] = $request->file('ttd_ktp')->store('file-ktp/ttd');
        }

        $validatedData['user_id'] = auth()->user()->id;

        Ktp::create($validatedData);
        return redirect('/ktp')->with('success', 'Data Pelayanan KTP berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function show(Ktp $ktp)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function edit(Ktp $ktp)
    {
        return view('pelayanan-ktp.edit-ktp', [
            'title' => 'Edit Data Pelayanan KTP',
            'ktp' => $ktp,
            'penduduks' => Penduduk::all()

        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateKtpRequest  $request
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ktp $ktp)
    {
        $rules = [
            'penduduk_id' => 'required',
            'darah' => 'required',
            'status' => 'required',
            'pekerjaan' => 'required',
            'kewarganegaraan' => 'required',
            'kk' => 'image|file|max:5120',
            'foto_ktp' => 'image|file|max:5120',
            'ttd_ktp' => 'image|file|max:5120',
            'ket_ktp' => 'required',
            'file_ktp' => 'file|max:5120',

        ];

        $validatedData = $request->validate($rules);

        if ($request->file('kk')) {
            if ($request->fotoLama) {
                Storage::delete($request->fotoLama);
            }
            $validatedData['kk'] = $request->file('kk')->store('file-ktp/kk');
        }
        if ($request->file('foto_ktp')) {
            if ($request->fotoLama1) {
                Storage::delete($request->fotoLama1);
            }
            $validatedData['foto_ktp'] = $request->file('foto_ktp')->store('file-ktp/profile');
        }
        if ($request->file('ttd_ktp')) {
            if ($request->fotoLama2) {
                Storage::delete($request->fotoLama2);
            }
            $validatedData['ttd_ktp'] = $request->file('ttd_ktp')->store('file-ktp/ttd');
        }
        if ($request->file('file_ktp')) {
            if ($request->fotoLama3) {
                Storage::delete($request->fotoLama3);
            }
            $validatedData['file_ktp'] = $request->file('file_ktp')->store('file-ktp/ktp');
        }

        Ktp::where('id', $ktp->id)->update($validatedData);
        return redirect('/ktp')->with('success', 'Data Pelayanan KTP berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Ktp  $ktp
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ktp $ktp)
    {
        if ($ktp->foto_ktp) {
            Storage::delete($ktp->foto_ktp);
        }
        if ($ktp->ttd_ktp) {
            Storage::delete($ktp->ttd_ktp);
        }
        if ($ktp->kk) {
            Storage::delete($ktp->kk);
        }
        if ($ktp->file_ktp) {
            Storage::delete($ktp->file_ktp);
        }

        Ktp::destroy($ktp->id);
        return redirect('/ktp')->with('success', 'Data Pelayanan KTP telah dihapus');
    }

    public function download(Ktp $ktp){

        return Storage::download($ktp->file_ktp );

    }
}
