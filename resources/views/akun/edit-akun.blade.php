@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Akun</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Edit Data Akun</h2>

        <form action="/user/{{ $user->id }}" method="POST" enctype="multipart/form-data" class="m-4">
            @method('put')
            @csrf

            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Level</p>
                <div class="col-sm-12 col-md-10">
                    <select class="form-select" name="level" aria-label="Default select example">
                        <option selected>Pilih Level</option>

                        @if (old('level', $user->level) == 'User')
                            <option value="Admin">Admin</option>
                            <option value="User" selected>User</option>
                        @else
                            <option value="Admin" selected>Admin</option>
                            <option value="User">User</option>
                        @endif
                    </select>
                </div>
                @error('level')
                    <div class="text-danger">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Lengkap</p>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" name="nama" type="text" placeholder="Masukkan nama"
                        value="{{ old('nama', $user->nama) }}">
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
                    <select class="form-select" name="jeniskelamin">
                        <option selected>Pilih Jenis Kelamin</option>

                        @if (old('jeniskelamin', $user->jeniskelamin) == 'Perempuan')
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan" selected>Perempuan</option>
                        @else
                            <option value="Laki-Laki" selected>Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        @endif

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
                    <input class="form-control" name="telepon" type="number" placeholder="Masukkan telepon"
                        value="{{ old('telepon', $user->telepon) }}">
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
                    <input class="form-control" name="username" type="text" placeholder="Masukkan username"
                        value="{{ old('username', $user->username) }}">
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
                    <input class="form-control" name="email" type="text" placeholder="Masukkan email"
                        value="{{ old('email', $user->email) }}">
                    @error('email')
                        <div class="text-danger">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
            </div>
            <div class="form-group row mt-3">
                <p class="col-sm-12 col-md-2 col-form-label h6" for="foto">Foto</p>
                <div class="custom-file col-sm-12 col-md-10 ">
                    <input type="file" id="foto" name="foto"
                        class="custom-file-input form-control @error('foto') is-invalid @enderror"
                        onchange="previewImage()">
                        <label class="custom-file-label"> Pilih file foto</label>
                        @error('foto')
                    <div class="invalid-feedback">
                        {{ $message }}
                    </div>
                    @enderror
                </div>
                <div class="col-sm-12 col-md-10 image" style="margin-left: 200px !important;">
                    <input type="hidden" name="fotoLama" value="{{ $user->foto }}">

                    @if ($user->foto)
                    <img src="{{ asset('storage/' . $user->foto) }}" class="img-preview img-fluid" width="200">
                    @else
                    <img class="img-preview img-fluid" width="200">
                    @endif

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
