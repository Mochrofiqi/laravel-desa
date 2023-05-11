@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Akun</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Tambah Data Akun</h2>

        <form action="/user" method="POST" class="m-4" enctype="multipart/form-data">
            @csrf

            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Level</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="level" aria-label="Default select example">
                        <option selected>Pilih</option>
                        <option value="user">User</option>
                        <option value="admin">Admin</option>
                      </select>
                </div>
                @error('level')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6"  style="font-size: 17px">Nama Lengkap</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nama" type="text" placeholder="Masukkan nama">
                    @error('nama')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Jenis Kelamin</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="jeniskelamin" >
                        <option selected>Pilih</option>
                        <option value="Laki-laki">Laki-laki</option>
                        <option value="Perempuan">Perempuan</option>
                    </select>
                    @error('jeniskelamin')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Telepon</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="telepon" type="number" placeholder="Masukkan telepon">
                    @error('telepon')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Username</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="username" type="text" placeholder="Masukkan username">
                    @error('username')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Email</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="email" type="text" placeholder="Masukkan email">
                    @error('email')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Password</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="password" type="password" placeholder="Masukkan password">
                    @error('password')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px" for="foto">Foto</p>
                <div class="custom-file col-sm-12 col-md-10 ">
                    <input type="file" id="foto" name="foto"
                        class="custom-file-input form-control @error('foto') is-invalid @enderror"
                        onchange="previewImage() ">
                    @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-sm-12 col-md-10 image" style="margin-left: 200px !important;">
                    <img class="img-preview img-fluid" width="200">
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="/user" class="btn btn-danger">Back</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </main>

    <script>
        function previewImage(){
            const gambar = document.getElementById('foto');
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
