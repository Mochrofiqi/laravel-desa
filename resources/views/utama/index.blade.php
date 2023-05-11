@extends('utama.layouts.master')

@section('content')
    <div class="box4">
        <div class="row m-1 justify-content-center">
            <h3 class="text-center fs-2" style="font-family: Lucida Sans">Selamat Datang di SINDERAN</h3>
            <h3 class="text-center pb-2 fs-2" style="font-family: Lucida Sans">(Sistem Informasi Desa Panglipuran)</h3>

            <div class="col-7 pb-2">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                            class="active" aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                            aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                            aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="/img/gambar/3.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/gambar/4.jpeg" class="d-block w-100" alt="...">
                        </div>
                        <div class="carousel-item">
                            <img src="/img/gambar/2.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="box5 text-center" style="font-family: Verdana">
                <p class="h6">Desa Adat Panglipuran merupakan satu kawasan pedesaan yang memiliki tatanan
                    spesifik dari struktur desa tradisional, sehingga mampu menampilkan wajah pedesaan yang asri. Penataan
                    fisik dari struktur desa tersebut tidak terlepas dari budaya masyarakatnya yang sudah berlaku turun
                    temurun. Sehingga dengan demikian Desa Adat Penglipuran merupakan obyek wisata budaya.
                </p>
            </div>
        </div>
    </div>
@endsection
