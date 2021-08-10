<?php
    /**
		* Fungsi ini berguna untuk menampilkan navigation bar yang terletak pada bagian atas halaman web.
        * Fungsi ini hanya perlu dipanggil sekali pada setiap halaman web.
	*/
    function pageHeader() {
        // Tampilkan navigation bar berisi link sosial media
        print('
            <nav class="navbar top-navbar bg-blue navbar-dark">
                <div class="container-fluid">
                    <div class="navbar-logo">
                        <a href="https://facebook.com/bpptik"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/bpptik"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.instagram.com/bpptik"><i class="fa fa-instagram" aria-hidden="true"></i></a>
                        <a href="https://www.youtube.com/c/BPPTIKKementerianKominfo"><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                        <a href="http://bit.ly/lokasibpptik"><i class="fa fa-map-marker" aria-hidden="true"></i></a>
                    </div>
                </div>
            </nav>
        ');

        // Tampilkan navigation bar berisi menu utama website LSP BPPTIK
        print('
            <nav class="navbar navbar-expand-lg sticky-top navbar-light bg-light">
                <div class="container-fluid">
                    <a class="navbar-brand navbar-logo" href="index.php">
                        <img src="img/content/lsp-bpptik.png" alt="Lembaga Sertifikasi BPPTIK" class="logo-bpptik" height="60px">
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
                        <div class="offcanvas-header">
                            <a class="navbar-brand" href="index.php">
                                <img src="img/content/lsp-bpptik.png" alt="Lembaga Sertifikasi BPPTIK" class="logo-bpptik" height="60px">
                            </a>
                            <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>
                        <div class="offcanvas-body">
                            <hr class="dropdown-divider">
                            <ul class="navbar-nav justify-content-end flex-grow-1 pe-3">
                                <li class="nav-item">
                                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#profil.php" id="offcanvasNavbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Profil
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="offcanvasNavbarDropdown">
                                        <li><a class="dropdown-item" href="profil.php">Profil LSP</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="profil.php#visi-misi">Visi & Misi</a></li>
                                        <li>
                                            <hr class="dropdown-divider">
                                        </li>
                                        <li><a class="dropdown-item" href="profil.php#struktur-organisasi">Struktur Organisasi</a></li>       
                                    </ul>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pelatihan.php">Pelatihan</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="skema-sertifikasi.php">Skema Sertifikasi</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="berita.php">Berita</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link disabled" href="galeri.php">Galeri</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
        ');
    }
