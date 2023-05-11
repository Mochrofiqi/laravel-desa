@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Dusun</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Tambah Data Dusun</h2>

        <form action="/dusun" method="POST" class="m-4">
            @csrf

            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Dusun</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nama_dusun" type="text" placeholder="Masukkan nama dusun">
                    @error('nama_dusun')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">RT</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="rt" type="number" placeholder="Masukkan rt">
                    @error('rt')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">RW</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="rw" type="number" placeholder="Masukkan rw">
                    @error('rw')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Kepala Dusun</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="kepala_dusun">
                        <option selected>Pilih Nama</option>

                        @foreach ($penduduks as $penduduk)
                            <option value="{{ $penduduk->nama_penduduk }}">{{ $penduduk->nama_penduduk }}</option>
                        @endforeach

                    </select>
                    @error('kepala_dusun')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Kepala RT</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="kepala_rt">
                        <option selected>Pilih Nama</option>

                        @foreach ($penduduks as $penduduk)
                            <option value="{{ $penduduk->nama_penduduk }}">{{ $penduduk->nama_penduduk }}</option>
                        @endforeach

                    </select>
                    @error('kepala_rt')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Kepala RW</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="kepala_rw">
                        <option selected>Pilih Nama</option>

                        @foreach ($penduduks as $penduduk)
                            <option value="{{ $penduduk->nama_penduduk }}">{{ $penduduk->nama_penduduk }}</option>
                        @endforeach

                    </select>
                    @error('kepala_rw')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Jumlah Warga</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="jumlah_warga" type="number" placeholder="Masukkan jumlah warga">
                    @error('jumlah_warga')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="/dusun" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>
@endsection
