@extends('utama.layouts.master')

@section('content')

    <div class="box3">
        <main class="form-signup">
            <h1 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Saran dan Kritikan</h1><hr>
            <form action="/saran/create" method="POST">
                @csrf
                <section>
                    <div class="saran">
                        <div class="form-group row pt-1">
                            <p class="col-sm-4 col-form-label h6">Nama Lengkap</p>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nama_saran" placeholder="Nama">
                            </div>
                            @error('nama')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <p class="col-sm-4 col-form-label h6">Jenis Kelamin</p>
                            <div class="col-sm-12">
                                <select class="form-select" name="jk_saran" aria-label="Default select example">
                                    <option selected>Pilih</option>
                                    <option value="laki-laki">Laki-Laki</option>
                                    <option value="perempuan">Perempuan</option>
                                </select>
                            </div>
                            @error('jk_saran')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <p class="col-sm-4 col-form-label h6">Alamat</p>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="alamat_saran" placeholder="Alamat">
                            </div>
                            @error('alamat_saran')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="pt-2">
                            <p for="exampleFormControlTextarea1" class="form-label h6">Saran atau Kritikan</p>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="saran"
                                placeholder="Tulis Disini"></textarea>
                            @error('saran')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="text-center">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Kirim</button>
                        </div>
                    </div>
                </section>
            </form>
        </main>
    </div>
    @endsection
