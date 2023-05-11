<header class="navbar navbar-dark sticky-top flex-md-nowrap p-1 shadow" style="background-color: rgb(50, 48, 48)">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3 fs-5" style="background-color: rgb(50, 48, 48)"
        href="/dashboard">DASHBOARD</a>
    <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse"
        data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <h4 class="text-light">SINDERAN (Sistem Informasi Desa Panglipuran)</h4>
    <div class="navbar-nav">
        <div class="nav-item text-nowrap">
            <form action="/logout" method="POST">
                @csrf
                <button class="btn text-light fs-5" type="submit"><i
                        class="dw dw-logout"></i>Logout</button>
                <img src="/img/ikon/logout.png" width="35" alt="">
            </form>
        </div>
    </div>
</header>

<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse"
            style="background-color:  rgb(66, 65, 65)">
            <div class="position-sticky pt-4">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-light active" aria-current="page" href="/dashboard">
                            <img src="/img/ikon/home.png" width="35">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light " aria-current="page" href="/profile">
                            <img src="/img/ikon/profile1.png" width="35">
                            Profil
                        </a>
                    </li>
                    @can('admin')

                    <li class="nav-item">
                        <a class="nav-link text-light " aria-current="page" href="/user">
                            <img src="/img/ikon/team.png" width="35">
                            Data Akun
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/penduduk">
                            <img src="/img/ikon/team1.png" width="35">
                            Data Penduduk
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/perangkat">
                            <img src="/img/ikon/employees.png" width="35">
                            Data Perangkat Desa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/dusun">
                            <img src="/img/ikon/tent.png" width="35">
                            Data Dusun
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/bantuan">
                            <img src="/img/ikon/care.png" width="35">
                            Data Bantuan Sosial
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/jenis_bantuan">
                            <img src="/img/ikon/target.png" width="35">
                            Data Jenis Bansos
                        </a>
                    </li>
                </ul>
                @endcan

                <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
                    <span>Pelayanan Masyarakat</span>
                    <a class="link-secondary" href="#" aria-label="Add a new report">
                        <span data-feather="plus-circle"></span>
                    </a>
                </h6>
                <ul class="nav flex-column mb-2">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/saran">
                            <img src="/img/ikon/social-media.png" width="35">
                            Data Saran dan Kritikan
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link text-light" href="/ktp">
                            <img src="/img/ikon/id-card.png" width="35">
                            Data Pelayanan KTP
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-light" href="/kematian">
                            <img src="/img/ikon/application.png" width="35">
                            Data Pelayanan Kematian
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
    </div>
</div>


