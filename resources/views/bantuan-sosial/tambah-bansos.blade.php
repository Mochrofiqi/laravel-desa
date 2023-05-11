@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Bantual Sosial</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Tambah Data Bantuan Sosial</h2>

        <form action="/bantuan" method="POST" class="m-4">
            @csrf

            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Penerima</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="penduduk_id">
                        <option selected>Pilih Nama</option>

                        @foreach ($penduduks as $penduduk)
                            <option value="{{ $penduduk->id }}">{{ $penduduk->nama_penduduk }}</option>
                        @endforeach

                    </select>
                    @error('penduduk_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Jenis Bantuan Sosial</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="jenis_bantuan_id">
                        <option selected>Pilih Jenis Bantuan</option>

                        @foreach ($jenis_bantuans as $jenis_bantuan)
                            <option value="{{ $jenis_bantuan->id }}">{{ $jenis_bantuan->nama_bansos }}</option>
                        @endforeach

                    </select>
                    @error('jenis_bantuan_id')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Keterangan</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="ket_bansos">
                        <option selected>Pilih Keterangan</option>
                        <option value="Belum Diterima">Belum Diterima</option>
                        <option value="Sudah Diterima">Sudah Diterima</option>
                    </select>
                    @error('ket_bansos')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="text-center pt-4">
                <a href="/bantuan" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
@endsection
