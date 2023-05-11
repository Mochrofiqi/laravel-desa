@extends('admin.layouts.master')

@section('content')
    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Data Saran dan Kritikan</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>
        <h2 class="text-center" style="font-family: Lucida Sans" style="color: rgb(78, 71, 61)">Tambah Data Saran dan
            Kritikan</h2>

        <form action="/saran" method="POST" class="m-4">
            @csrf
            <section>
                <div class="saran">
                    <div class="form-group row mt-3">
                        <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Nama Lengkap</p>
                        <div class="col-sm-12 col-md-10">
                            <input readonly class="form-control" name="user_id" id="user_id" type="text" placeholder="Masukkan nama"
                            value="{{ $user->nama }}">
                        </div>
                        @error('user_id')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group row mt-3">
                        <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Jenis Kelamin</p>
                        <div class="col-sm-12 col-md-10">
                            <select class="form-select" name="jk_saran" aria-label="Default select example">
                                <option value="">Pilih Jenis Kelamin</option>
                                <option value="laki-laki">Laki-laki</option>
                                <option value="perempuan">Perempuan</option>
                            </select>
                        </div>
                        @error('jk_saran')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group row mt-3">
                        <p class="col-sm-12 col-md-2 col-form-label h6" style="font-size: 17px">Alamat</p>
                        <div class="col-sm-12 col-md-10">
                            <input type="text" class="form-control" name="alamat_saran" placeholder="Alamat">
                        </div>
                        @error('alamat_saran')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group row mt-3">
                        <p class="col-sm-12 col-md-2 col-form-label h6 " style="font-size: 17px">Saran atau Kritikan</p>
                        <div class="col-sm-12 col-md-10">

                            <input id="saran" type="hidden" name="saran" placeholder="Tulis Disini">
                            <trix-editor input="saran" class="trix-content bg-white"></trix-editor>
                        </div>
                        @error('saran')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <br>
                    <div class="text-center">
                        <a href="/saran" class="btn btn-danger">Back</a>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </section>
        </form>
    </main>

    <script type="text/javascript">
        document.addEventListener("trix-file-accept", function(event) {
          event.preventDefault();
        });
      </script>

@endsection
