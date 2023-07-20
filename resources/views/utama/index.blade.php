@extends('utama.layouts.master')

@section('content')
    <div class="box4">
        <div class="row m-1 justify-content-center">
            <h3 class="text-center fs-2" style="font-family: Lucida Sans">Selamat Datang di SINDERAN</h3>
            <h3 class="text-center pb-2 fs-2" style="font-family: Lucida Sans">(Sistem Informasi Desa Panglipuran)</h3>

            <div class="col-7 pb-2">
                <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                            aria-current="true" aria-label="Slide 1"></button>
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
            <div class="box5 mb-5 text-center" style="font-family: Verdana">
                <p class="h6">Desa Adat Panglipuran merupakan satu kawasan pedesaan yang memiliki tatanan
                    spesifik dari struktur desa tradisional, sehingga mampu menampilkan wajah pedesaan yang asri. Penataan
                    fisik dari struktur desa tersebut tidak terlepas dari budaya masyarakatnya yang sudah berlaku turun
                    temurun. Sehingga dengan demikian Desa Adat Penglipuran merupakan obyek wisata budaya.
                </p>
            </div>
        </div>

        <section>
            <div class="container">
                <div class="row">
                    <h3 class="mt-5" style="text-align: center">Desa Panglipuran</h3>
                    <h6 class="mt-2 mb-5" style="text-align: center">Desa yang memiliki daya tarik wisata budaya, tradisi,
                        dan bangunan arsitektur yang telah dilestarikan turun temurun.</h6>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="300">
                        <div class="box-feature mt-3" style="text-align: center">
                            <img src="img/ikon/houses.png" alt="" width="70px" class="mb-3">
                            <h5 class="mb-3">Desa Terbersih</h5>
                            <p style="color: rgb(78, 78, 78)">
                                Desa Penglipuran adalah desa terbersih ketiga di dunia menurut Green Destinations
                                Foundation.
                                Tidak ada sampah berserakan, bising kemacetan, dan polusi udara di desa ini.
                            </p>
                            {{-- <p><a href="#" class="learn-more">Learn More</a></p> --}}
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="500">
                        <div class="box-feature mt-3" style="text-align: center">
                            <img src="img/ikon/layout.png" alt="" width="70px" class="mb-3">
                            <h5 class="mb-3">Tata Ruang Unik</h5>
                            <p style="color: rgb(78, 78, 78)">
                                Desa Penglipuran adalah desa adat yang masih menjunjung tinggi nilai-nilai luhur nenek
                                moyang.
                                Nilai-nilai tersebut turut dituangkan ke tata ruang desa, yakni mengusung konsep Tri
                                Mandala.
                            </p>
                            {{-- <p><a href="#" class="learn-more">Learn More</a></p> --}}
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="400">
                        <div class="box-feature mt-3" style="text-align: center">
                            <img src="img/ikon/comedy.png" alt="" width="70px" class="mb-3">
                            <h5 class="mb-3">Keaslian Budaya</h5>
                            <p style="color: rgb(78, 78, 78)">
                                Desa Panglipuran mempertahankan keaslian dan kesucian budaya Bali.
                                Wisatawan dapat merasakan suasana Bali yang klasik dan tradisional di Desa Panglipuran.
                            </p>
                            {{-- <p><a href="#" class="learn-more">Learn More</a></p> --}}
                        </div>
                    </div>
                    <div class="col-6 col-lg-3" data-aos="fade-up" data-aos-delay="600">
                        <div class="box-feature mt-3" style="text-align: center">
                            <img src="img/ikon/heart.png" alt="" width="70px" class="mb-3">
                            <h5 class="mb-3">Berbagai Kerajinan Tangan</h5>
                            <p style="color: rgb(78, 78, 78)">
                                Di Desa Panglipuran banyak warga membuat berbagai kerajinan tangan lokal, seperti anyaman
                                bambu,
                                kain tradisional, dan patung kayu sebagai cinderamata atau souvenir unik sebagai
                                kenang-kenangan.
                            </p>
                            {{-- <p><a href="#" class="learn-more">Learn More</a></p> --}}
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row justify-content-center text-center mt-5 mb-5">
                    <div class="mt-5">
                        <h3 class="">
                            Sistem Informasi Desa Panglipuran
                        </h3>
                        <h6>
                            Menyediakan infomasi desa dan layanan masyarakat desa panglipuran secara online tanpa datang ke kantor balai desa.
                        </h6>
                    </div>
                </div>
                <div class="row justify-content-between mb-5 m-4">
                    <div class="col-lg-7 mb-5 mb-lg-0 order-lg-1">
                        <div class="img-about dots">
                            <img src="img/gambar/3.jpg" alt="Image" class="img-fluid" />
                        </div>
                    </div>

                    <div class="col-lg-5">
                        <div class="d-flex feature-h">
                            <span class="wrap-icon me-3">
                                <img src="img/ikon/pass.png" alt="" width="60px" class="m-2">
                            </span>
                            <div class="feature-text">
                                <h5 class="heading">Pembuatan KTP</h5>
                                <p class="text-black-50">
                                    Pembuatan KTP dapat offline maupun secara online dengan login pada sistem dan memasukkan data identitas secara lengkap.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex feature-h">
                            <span class="wrap-icon me-3">
                                <img src="img/ikon/death-certificate.png" alt="" width="60px" class="m-2">
                            </span>
                            <div class="feature-text">
                                <h5 class="heading">Pembuatan Akta Kematian</h5>
                                <p class="text-black-50">
                                    Pembuatan Akta Kematian dapat offline maupun secara online dengan login pada sistem dan memasukkan data identitas secara lengkap.
                                </p>
                            </div>
                        </div>

                        <div class="d-flex feature-h">
                            <span class="wrap-icon me-3">
                                <img src="img/ikon/workers.png" alt="" width="60px" class="m-2">
                            </span>
                            <div class="feature-text">
                                <h5 class="heading">Informasi Perangkat Desa</h5>
                                <p class="text-black-50">
                                    Menyediakan informasi mengenai perangkat Desa Panglipuran terdapat dalam website.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex feature-h">
                            <span class="wrap-icon me-3">
                                <img src="img/ikon/nation.png" alt="" width="60px" class="m-2">
                            </span>
                            <div class="feature-text">
                                <h5 class="heading">Informasi Data Kependudukan</h5>
                                <p class="text-black-50">
                                    Menyediakan informasi mengenai jumlah penduduk, dusun, bantuan sosial, dan lainya dalam bentuk statistik dalam website.
                                </p>
                            </div>
                        </div>
                        <div class="d-flex feature-h">
                            <span class="wrap-icon me-3">
                                <img src="img/ikon/support.png" alt="" width="60px" class="m-2">
                            </span>
                            <div class="feature-text">
                                <h5 class="heading">Informasi Bantuan Sosial</h5>
                                <p class="text-black-50">
                                    Menyediakan informasi mengenai masyarakat yang mendapat bantuan sosial dan status bantuan tersebut dalam website.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row section-counter mt-5">
                </div>
            </div>
        </section>
    </div>
@endsection
