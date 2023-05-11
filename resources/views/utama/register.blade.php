@extends('utama.layouts.master')

@section('content')

    <div class="box3">
        <main class="form-signup">
            <h1 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Register</h1><hr>
            <form action="/register" method="POST">
                @csrf
                <section >
                    <div class="register" >
                        <div class="form-group row pb-2 pt-2">
                            <p class="col-sm-4 col-form-label h6">Level</p>
                            <div class="col-sm-8">
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
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Nama Lengkap</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="nama" placeholder="Nama">
                            </div>
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Jenis Kelamin</p>
                            <div class="col-sm-8">
                                <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                                    <option selected>Pilih</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                  </select>
                            </div>
                            @error('jeniskelamin')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Telepon</p>
                            <div class="col-sm-8">
                                <input type="number" class="form-control" name="telepon" placeholder="Telepon">
                            </div>
                            @error('telepon')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                         @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Username*</p>
                            <div class="col-sm-8">
                                <input type="text" class="form-control" name="username" placeholder="Username">
                            </div>
                            @error('username')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Email Address*</p>
                            <div class="col-sm-8">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                            @error('email')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row pb-2 pt-1">
                            <p class="col-sm-4 col-form-label h6">Password*</p>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password" placeholder="Password">
                            </div>
                            @error('password')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Create Account</button>
                        </div>
                    </div>
                </section>
            </form>
        </main>
    </div>

    @endsection
