@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Penduduk</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Tambah Data Penduduk</h2>

        <form action="/penduduk" method="POST" class="m-4">
            @csrf

            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Penduduk</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nama_penduduk" type="text" placeholder="Masukkan nama">
                    @error('nama_penduduk')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">NIK Penduduk</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nik_penduduk" type="number" placeholder="Masukkan NIK">
                    @error('nik_penduduk')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Tempat Tanggal Lahir</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="ttl_penduduk" type="date"
                        placeholder="Masukkan tempat tanggal lahir">
                    @error('ttl_penduduk')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Jenis Kelamin</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="jk_penduduk">
                        <option selected>Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                    @error('jk_penduduk')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Agama</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="agama" type="text" placeholder="Masukkan Agama">
                    @error('agama')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Dusun</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="dusun_id">
                        <option selected>Pilih Dusun</option>

                        @foreach ($dusuns as $dusun)
                            <option value="{{ $dusun->id }}">{{ $dusun->nama_dusun }}</option>
                        @endforeach

                    </select>
                    @error('dusun_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Alamat</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="alamat_penduduk" type="text" placeholder="Masukkan Alamat">
                    @error('alamat_penduduk')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Keterangan</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="ket_penduduk">
                        <option selected>Pilih Keterangan</option>
                        <option value="Hidup">Hidup</option>
                        <option value="Wafat">Wafat</option>
                    </select>
                    @error('ket_penduduk')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="/penduduk" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
@endsection
