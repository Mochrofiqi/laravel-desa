<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <link href="/asset/css/bootstrap.min.css" rel="stylesheet">
    <link href="/css/utama.css" rel="stylesheet">
    <title>Formulir Kepentingan</title>

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>

</head>

<body>
    <header class="text-white pt-1" style="background-color: rgb(50, 48, 48)">
        <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
                <ul class="nav col-12 col-lg-6 me-lg-auto justify-content-center">
                    <h4><a href="/" class="nav-link text-white pb-1"><img src="/img/ikon/house.png" width="40" alt="">
                            SINDERAN (Sistem Informasi Desa Penglipuran)</a></h4>
                </ul>

                <div class="text-end">
                    <a href="/" class="btn btn-warning " style="font-family: Lucida Sans"><strong>Home</strong></a>
                </div>
            </div>
    </header>

    {{-- <div class="box2">
        <img src="/img/gambar/register.jpg" width="800" alt="">
    </div> --}}

    <div class="box3">
        <main class="form-signup">
            <h1 class="text-center text-primary" style="font-family: Lucida Sans">Formulir Kepentingan</h1>
            <form action="/register" method="POST">
                @csrf
                <section>
                    <div class="register">
                        <div class="form-group row pt-3">
                            <p class="col-sm-4 col-form-label h6">Nama Lengkap</p>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="nama">
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
                                <select class="form-control" name="jenis_kelamin" aria-label="Default select example">
                                    <option selected>Pilih</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            @error('jenis_kelamin')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <p class="col-sm-4 col-form-label h6">Alamat</p>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" name="alamat">
                            </div>
                            @error('alamat')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <p class="col-sm-4 col-form-label h6">Telepon</p>
                            <div class="col-sm-12">
                                <input type="number" class="form-control" name="telepon">
                            </div>
                            @error('telepon')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                         @enderror
                        </div>
                        <div class="pt-2">
                            <p for="exampleFormControlTextarea1" class="form-label h6">Urusan Kepentingan</p>
                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="urusan"
                                placeholder="Tulis Disini"></textarea>
                            @error('urusan')
                                <div class="text-danger">
                                    {{ $message }}
                                </div>
                            @enderror
                        </div>
                        <br>
                        <div class="text-center">
                            <a href="/" class="btn btn-danger btn-block ">Back</a>
                            <button class="btn btn-primary btn-block" type="submit">Kirim</button>
                        </div>
                    </div>
                </section>
            </form>
        </main>
    </div>

    <script src="/asset/js/bootstrap.bundle.min.js"></script>

</body>

</html>
