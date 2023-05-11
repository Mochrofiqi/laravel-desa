@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Penduduk</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Edit Data Penduduk</h2>

        <form action="/penduduk/{{ $penduduk->id }}" method="POST" class="m-4">
            @method('put')
            @csrf

            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Penduduk</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nama_penduduk" type="text" placeholder="Masukkan nama"
                        value="{{ old('nama_penduduk', $penduduk->nama_penduduk) }}">
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
                    <input class="form-control" name="nik_penduduk" type="number" placeholder="Masukkan NIK"
                        value="{{ old('nik_penduduk', $penduduk->nik_penduduk) }}">
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
                        placeholder="Masukkan tempat tanggal lahir"
                        value="{{ old('ttl_penduduk', $penduduk->ttl_penduduk) }}">
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

                        @if (old('jk_penduduk', $penduduk->jk_penduduk) == 'Perempuan')
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan" selected>Perempuan</option>
                        @else
                            <option value="Laki-Laki" selected>Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        @endif
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
                    <input class="form-control" name="agama" type="text" placeholder="Masukkan Agama"
                        value="{{ old('agama', $penduduk->agama) }}">
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
                    <select class="form-select" name="dusun_id" value="{{ old('dusun_id', $penduduk->dusun->id) }}">
                        <option selected>Pilih Dusun</option>

                        @foreach ($dusuns as $dusun)
                            @if (old('dusun_id', $penduduk->dusun_id) == $dusun->id)
                                <option value="{{ $dusun->id }}" selected>{{ $dusun->nama_dusun }}</option>
                            @else
                                <option value="{{ $dusun->id }}">{{ $dusun->nama_dusun }}</option>
                            @endif
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
                    <input class="form-control" name="alamat_penduduk" type="text" placeholder="Masukkan Alamat"
                        value="{{ old('alamat_penduduk', $penduduk->alamat_penduduk) }}">
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

                        @if (old('ket_penduduk', $penduduk->ket_penduduk) == 'Wafat')
                            <option value="Hidup">Hidup</option>
                            <option value="Wafat" selected>Wafat</option>
                        @else
                            <option value="Hidup" selected>Hidup</option>
                            <option value="Wafat">Wafat</option>
                        @endif
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
