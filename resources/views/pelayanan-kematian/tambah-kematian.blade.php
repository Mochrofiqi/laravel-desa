@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Pelayanan Kematian</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Tambah Data Pelayanan Kematian
        </h2>

        <form action="/kematian" method="POST" enctype="multipart/form-data" class="m-4">
            @csrf

            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Pelapor</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="nama_pengirim">
                        <option selected>Pilih Nama</option>

                        @foreach ($penduduks as $penduduk)
                            <option value="{{ $penduduk->nama_penduduk }}">{{ $penduduk->nama_penduduk }}</option>
                        @endforeach

                    </select>
                    @error('nama_pengirim')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Lengkap </p>
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
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Tempat Tanggal Kematian</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="ttl_kematian" type="text" placeholder="Masukkan tempat tanggal kematian">
                    @error('ttl_kematian')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Pukul Kematian</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="pukul" type="text" placeholder="Masukkan pukul kematian">
                    @error('pukul')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Penyebab Kematian</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="penyebab" type="text" placeholder="Masukkan penyebab kematian">
                    @error('penyebab')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px" for="ttd_kematian">Tanda Tangan Pelapor</p>
                <div class="custom-file col-sm-12 col-md-10 ">
                    <input type="file" id="ttd_kematian" name="ttd_kematian"
                        class="custom-file-input form-control @error('ttd_kematian') is-invalid @enderror"
                        onchange="previewImage() ">
                    @error('ttd_kematian')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-12 col-md-10 image" style="margin-left: 200px !important;">
                    <img class="img-preview img-fluid" width="200">
                </div>
            </div>


            <div class="text-center pt-3">
                <a href="/kematian" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>

    <script>
        function previewImage() {
            const gambar = document.getElementById('ttd_kematian');
            const img = document.querySelector('.img-preview');

            img.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent) {
                img.src = oFREvent.target.result;
            }
        }
    </script>

@endsection
