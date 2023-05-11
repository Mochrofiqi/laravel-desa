@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Jenis Bansos</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Edit Data Jenis Bansos</h2>

        <form action="/jenis_bantuan/{{ $jenis_bantuan->id }}" method="POST" class="m-4">
            @method('put')
            @csrf

            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Jenis Bansos</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nama_bansos" type="text" placeholder="Masukkan nama"
                        value="{{ old('nama_bansos', $jenis_bantuan->nama_bansos) }}">
                    @error('nama_bansos')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Periode Bansos</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="periode_bansos" type="text" placeholder="Masukkan periode"
                        value="{{ old('periode_bansos', $jenis_bantuan->periode_bansos) }}">
                    @error('periode_bansos')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Penerima Bansos</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="penerima_bansos" type="text" placeholder="Masukkan penerima"
                        value="{{ old('penerima_bansos', $jenis_bantuan->penerima_bansos) }}">
                    @error('penerima_bansos')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Kategori Bansos</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="kategori_bansos" type="text" placeholder="Masukkan kategori"
                        value="{{ old('kategori_bansos', $jenis_bantuan->kategori_bansos) }}">
                    @error('kategori_bansos')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Barang Bansos</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="barang_bansos" type="text" placeholder="Masukkan barang"
                        value="{{ old('barang_bansos', $jenis_bantuan->barang_bansos) }}">
                    @error('barang_bansos')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="/jenis_bantuan" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
@endsection
