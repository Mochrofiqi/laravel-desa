@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Perangkat Desa</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Tambah Data Perangkat Desa</h2>

        <form action="/perangkat/ {{ $perangkat->id }}" enctype="multipart/form-data" method="POST" class="m-4">
            @method('put')
            @csrf

            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Lengkap</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="penduduk_id"
                        value="{{ old('penduduk_id', $perangkat->penduduk->id) }}">
                        <option selected>Pilih Nama</option>

                        @foreach ($penduduks as $penduduk)
                            @if (old('penduduk_id', $perangkat->penduduk_id) == $penduduk->id)
                                <option value="{{ $penduduk->id }}" selected>{{ $penduduk->nama_penduduk }}</option>
                            @else
                                <option value="{{ $penduduk->id }}">{{ $penduduk->nama_penduduk }}</option>
                            @endif
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
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Jabatan</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="jabatan" type="text" placeholder="Masukkan jabatan"
                        value="{{ old('jabatan', $perangkat->jabatan) }}">
                    @error('jabatan')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Pendidikan Terakhir</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="study" type="text" placeholder="Masukkan pendidikan terakhir"
                        value="{{ old('study', $perangkat->study) }}">
                    @error('study')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" for="foto_perangkat">Foto</p>
                <div class="custom-file col-sm-12 col-md-10 ">
                    <input type="file" id="foto_perangkat" name="foto_perangkat"
                        class="custom-file-input form-control @error('foto_perangkat') is-invalid @enderror"
                        onchange="previewImage()">
                        <label class="custom-file-label"> Pilih file foto</label>
                        @error('foto_perangkat')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-sm-12 col-md-10 image" style="margin-left: 200px !important;">
                    <input type="hidden" name="fotoLama" value="{{ $perangkat->foto_perangkat }}">

                    @if ($perangkat->foto_perangkat)
                    <img src="{{ asset('storage/' . $perangkat->foto_perangkat) }}" class="img-preview img-fluid" width="200">
                    @else
                    <img class="img-preview img-fluid" width="200">
                    @endif

                </div>
            </div>

            <div class="text-center pt-3">
                <a href="/perangkat" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>

    <script>
        function previewImage(){
            const gambar = document.getElementById('foto_perangkat');
            const img = document.querySelector('.img-preview');

            img.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function (oFREvent) {
                img.src = oFREvent.target.result;
            }
        }
    </script>

@endsection
