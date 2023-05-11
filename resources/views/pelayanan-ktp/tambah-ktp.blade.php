@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Pelayanan KTP</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Tambah Data Pelayanan KTP
        </h2>

        <form action="/ktp" method="POST" enctype="multipart/form-data" class="m-4">
            @csrf

            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Lengkap</p>
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
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Golongan Darah</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="darah">
                        <option selected>Pilih Golongan Darah</option>
                        <option value="-">-</option>
                        <option value="A">A</option>
                        <option value="B">B</option>
                        <option value="O">O</option>
                        <option value="AB">AB</option>
                    </select>
                    @error('darah')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Status Perkawinan</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="status">
                        <option selected>Pilih Status Perkawinan</option>
                        <option value="Belum Menikah">Belum Menikah</option>
                        <option value="Sudah Menikah">Sudah Menikah</option>
                    </select>
                    @error('status')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Pekerjaan</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="pekerjaan" type="text" placeholder="Masukkan pekerjaan">
                    @error('perkerjaan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Kewarganegaraan</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="kewarganegaraan" type="text" placeholder="Masukkan kewarganegaraan">
                    @error('kewarganegaraan')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px" for="kk">Kartu Keluarga</p>
                <div class="custom-file col-sm-12 col-md-10 ">
                    <input type="file" id="kk" name="kk"
                        class="custom-file-input form-control @error('kk') is-invalid @enderror" onchange="previewImage2() ">
                    @error('kk')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-12 col-md-10 image" style="margin-left: 200px !important;">
                    <img class="img2-preview img-fluid" width="200">
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px" for="foto_ktp">Foto KTP</p>
                <div class="custom-file col-sm-12 col-md-10 ">
                    <input type="file" id="foto_ktp" name="foto_ktp"
                        class="custom-file-input form-control @error('foto_ktp') is-invalid @enderror"
                        onchange="previewImage() ">
                    @error('foto_ktp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-12 col-md-10 image" style="margin-left: 200px !important;">
                    <img class="img-preview img-fluid" width="200">
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px" for="ttd_ktp">Tanda Tangan</p>
                <div class="custom-file col-sm-12 col-md-10 ">
                    <input type="file" id="ttd_ktp" name="ttd_ktp"
                        class="custom-file-input form-control @error('ttd_ktp') is-invalid @enderror"
                        onchange="previewImage1() ">
                    @error('ttd_ktp')
                        <div class="invalid-feedback">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="col-sm-12 col-md-10 image" style="margin-left: 200px !important;">
                    <img class="img1-preview img-fluid" width="200">
                </div>
            </div>


            <div class="text-center pt-3">
                <a href="/ktp" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>

    <script>
        function previewImage() {
            const gambar = document.getElementById('foto_ktp');
            const img = document.querySelector('.img-preview');

            img.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar.files[0]);

            oFReader.onload = function(oFREvent) {
                img.src = oFREvent.target.result;
            }
        }
    </script>
    <script>
        function previewImage1() {
            const gambar1 = document.getElementById('ttd_ktp');
            const img1 = document.querySelector('.img1-preview');

            img1.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar1.files[0]);

            oFReader.onload = function(oFREvent) {
                img1.src = oFREvent.target.result;
            }
        }
    </script>
    <script>
        function previewImage2() {
            const gambar2 = document.getElementById('kk');
            const img2 = document.querySelector('.img2-preview');

            img2.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar2.files[0]);

            oFReader.onload = function(oFREvent) {
                img2.src = oFREvent.target.result;
            }
        }
    </script>
    <script>
        function previewImage3() {
            const gambar3 = document.getElementById('file_ktp');
            const img3 = document.querySelector('.img3-preview');

            img3.style.display = 'block';

            const oFReader = new FileReader();
            oFReader.readAsDataURL(gambar3.files[0]);

            oFReader.onload = function(oFREvent) {
                img3.src = oFREvent.target.result;
            }
        }
    </script>
@endsection
