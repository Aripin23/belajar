<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">
                    <li class="nav-divider">
                        Menu
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="<?=base_url('dashboard')?>"><i
                                class="fa fa-home"></i>Dashboard</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-1" aria-controls="submenu-1"><i
                                class="fas fa-sitemap"></i>Data Master</a>
                        <div id="submenu-1" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('asosiasi')?>">Asosiasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('ras')?>">Ras</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('kodeEms')?>">Kode Ems</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-2" aria-controls="submenu-2"><i
                                class="fas fa-paw"></i>Hewan</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('hewan')?>">Daftar Hewan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('tambahHewan')?>">Tambah Hewan</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-3" aria-controls="submenu-3"><i
                                class="fa fa-user-circle"></i>Profil</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('detailProf')?>">Detail Profil</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('asosiasi')?>">Asosiasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('regAsosiasi')?>">Registrasi Asosiasi</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-4" aria-controls="submenu-4"><i
                                class="fas fa-clipboard-list"></i>Catree</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('daftarPedigree')?>">Daftar Pedigree</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('tambahPedigree')?>">Tambah Pedigree</a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-5" aria-controls="submenu-5"><i
                                class="fa fa-users"></i>Manajemen Pengguna</a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="<?= base_url('pengguna')?>">Data Pengguna</a>
                                </li>
                            </ul>
                        </div>
                    </li>




                </ul>
            </div>
        </nav>
    </div>
</div>