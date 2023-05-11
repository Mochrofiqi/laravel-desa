<div class="head">
    <h2><a href="/" class="nav-link text-white pb-1"><img src="/img/ikon/house.png" width="45" alt="">
            SINDERAN (Sistem Informasi Desa Panglipuran)</a></h2>
    <h3>Selamat Datang di Sistem Informasi Desa Panglipuran</h3>
</div>
<header>
    <nav class="navbar navbar-expand-lg text-white pt-1 navbar-dark" style="background-color: rgb(50, 48, 48)">
        <div class="container-fluid">
            <img src="/img/ikon/house.png" class="m-1" width="35">
            <a class="navbar-brand text-white" href="#">SINDERAN</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav fs-5">
                    <a href="/" class="nav-link {{ Request::is('/') ? 'active' : '' }}" aria-current="page"
                        href="#">Profil Desa</a>
                    <a href="/perangkatdesa" class="nav-link {{ Request::is('perangkatdesa') ? 'active' : '' }}" aria-current="page" style="font-family: Lucida Sans">Perangkat Desa</a>
                    <a href="chart" class="nav-link {{ Request::is('chart') ? 'active' : '' }}"
                        style="font-family: Lucida Sans">Statistik Desa</a>
                    <a href="/bansos" class="nav-link {{ Request::is('bansos') ? 'active' : '' }}" aria-current="page" style="font-family: Lucida Sans">Bantual Sosial</a>
                    <a href="/contactperson" class="nav-link {{ Request::is('contactperson') ? 'active' : '' }}" aria-current="page" style="font-family: Lucida Sans">Contact Person</a>
                </div>
            </div>
            <div class="text-end">
                @auth
                    @if (auth()->user()->foto)
                    <div style="font-family: Lucida Sans" class="btn btn-warning">
                        <img src="{{ asset('storage/' . auth()->user()->foto) }}" alt="image" width="40">
                           <strong> {{ auth()->user()->nama }} </strong>
                        </div>
                    @else
                        <img src="/img/slide/kosong.png" alt="image" width="40" class="m-1">
                    @endif
                @endauth
                @guest
                <a href="/login" class="btn btn-warning" style="font-family: Lucida Sans"><strong>Login <img
                    class="pl-1" src="/img/ikon/sign-in.png" width="30" alt=""></strong></a>
                @endguest

            </div>
        </div>
    </nav>
</header>
