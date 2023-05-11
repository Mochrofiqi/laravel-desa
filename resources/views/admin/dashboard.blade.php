@extends('admin.layouts.master')

@section('content')

@can('admin')
    <div class="box2" style="margin-top: 80px">
        <div class="row" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
            <div class="col-3">
                <div class="card">
                    <div class="row" style="padding-left: 10px">
                        <div class="col-5 p-4 mt-2">
                            <img src="img/ikon/people.png" width="10" class="card-img-top" alt="...">
                        </div>
                        <div class="col-6 pt-3 pb-1">
                            <h4 style="padding-left: 14px">User</h4>
                            <h4 style="padding-left: 37px">{{ $user_count }}</h4>
                            <a href="/user" class="btn btn-info"><strong>More Info </strong></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="row" style="padding-left: 10px">
                        <div class="col-5 p-4 mt-2">
                            <img src="img/ikon/team1.png" width="10" class="card-img-top" alt="...">
                        </div>
                        <div class="col-7 pt-3 pb-1">
                            <h4>Penduduk</h4>
                            <h4 style="padding-left: 40px">{{ $penduduk_count }}</h4>
                            <a href="/penduduk" class="btn btn-info"><strong>More Info </strong></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="row" style="padding-left: 0px">
                        <div class="col-5 p-4 mt-1">
                            <img src="img/ikon/tent.png" width="" class="card-img-top" alt="...">
                        </div>
                        <div class="col-7 pt-3 pb-1">
                            <h4 class="">Dusun</h4>
                            <h4 style="padding-left: 37px">{{ $dusun_count }}</h4>
                            <a href="/dusun" class="btn btn-info"><strong>More Info </strong></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="row" style="padding-left: 10px">
                        <div class="col-5 p-4 mt-2">
                            <img src="img/ikon/care.png" width="10" class="card-img-top" alt="...">
                        </div>
                        <div class="col-6 pt-3 pb-1">
                            <h4 style="padding-left: 14px">Bantuan</h4>
                            <h4 style="padding-left: 37px">{{ $bantuan_count }}</h4>
                            <a href="/bantuan" class="btn btn-info"><strong>More Info </strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="box2" style="margin-top: 10px">
        <div class="row" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
           <div class="col-3">
                <div class="card">
                    <div class="row" style="padding-left: 5px">
                        <div class="col-5 p-4 mt-3">
                            <img src="img/ikon/employees.png" width="" class="card-img-top" alt="...">
                        </div>
                        <div class="col-7 pt-3 pb-1">
                            <h4 class="">Perangkat Desa</h4>
                            <h4 style="padding-left: 40px">{{ $perangkat_count }}</h4>
                            <a href="/perangkat" class="btn btn-info"><strong>More Info </strong></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="row" style="padding-left: 10px">
                        <div class="col-5 p-4 mt-4">
                            <img src="img/ikon/target.png" width="10" class="card-img-top" alt="...">
                        </div>
                        <div class="col-7 pt-3 pb-1">
                            <h4>Jenis Bantuan</h4>
                            <h4 style="padding-left: 40px">{{ $jenis_bantuan_count }}</h4>
                            <a href="/jenis_bantuan" class="btn btn-info"><strong>More Info </strong></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="row" style="padding-left: 5px">
                        <div class="col-5 p-4 mt-3">
                            <img src="img/ikon/id-card.png" width="" class="card-img-top" alt="...">
                        </div>
                        <div class="col-7 pt-3 pb-1">
                            <h4 class="">Pelayanan KTP</h4>
                            <h4 style="padding-left: 40px">{{ $ktp_count }}</h4>
                            <a href="/ktp" class="btn btn-info"><strong>More Info </strong></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="row" style="padding-left: 0px">
                        <div class="col-5 p-4 mt-3">
                            <img src="img/ikon/application.png" width="" class="card-img-top" alt="...">
                        </div>
                        <div class="col-7 pt-3 pb-1">
                            <h4 class="">Pelayanan Kematian</h4>
                            <h4 style="padding-left: 37px">{{ $kematian_count }}</h4>
                            <a href="/kematian" class="btn btn-info"><strong>More Info </strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endcan

    @can('user')

    <div class="box3" style="margin-top: 80px">
        <div class="row justify-content-center" style="font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
           <h2 class="text-center text-white pb-2">Hasil Laporan Pelayanan</h2>
            <div class="col-3">
                <div class="card">
                    <div class="row" style="padding-left: 5px">
                        <div class="col-5 p-4 mt-3">
                            <img src="img/ikon/id-card.png" width="" class="card-img-top" alt="...">
                        </div>
                        <div class="col-7 pt-3 pb-1">
                            <h4 class="">Pelayanan KTP</h4>
                            <h4 style="padding-left: 40px">{{ $ktp_user }}</h4>
                            <a href="/ktp" class="btn btn-info"><strong>More Info </strong></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-3">
                <div class="card">
                    <div class="row" style="padding-left: 0px">
                        <div class="col-5 p-4 mt-3">
                            <img src="img/ikon/application.png" width="" class="card-img-top" alt="...">
                        </div>
                        <div class="col-7 pt-3 pb-1">
                            <h4 class="">Pelayanan Kematian</h4>
                            <h4 style="padding-left: 37px">{{ $kematian_user }}</h4>
                            <a href="/kematian" class="btn btn-info"><strong>More Info </strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @endcan

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4" style="padding-bottom: 20px" >
        <div
            class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Dashboard</h1>
            <div class="btn-toolbar mb-2 mb-md-0">
            </div>
        </div>

        <div class="row align-items-center"  style="padding-top: 30px" >
            <div class="col-md-3">
                <img src="img/gambar/gambar.png" width="300" alt="">
            </div>

            <div class="col-md-9" style="padding-left: 0px">
                <h3 class="font-30" style="font-family: Lucida Sans Unicode">
                    <strong>SELAMAT DATANG</strong>
                    <h2 class="weight-700 font-40 fs-1 text-success"
                        style="font-family: 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif">
                        <strong>{{ auth()->user()->nama }}</strong>
                    </h2>
                </h3>
                <h5 class="font-20" style="padding-right: 0">Selamat datang di halaman dashboard SINDERAN
                    (Sistem Informasi Desa Panglipuran).</h5>
            </div>
        </div>

    </main>
@endsection
