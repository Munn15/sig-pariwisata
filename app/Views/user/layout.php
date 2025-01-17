<!DOCTYPE html>
<html lang="en">

<head>
    <title><?= $title; ?></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <!-- <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" /> -->
    <link href="/Assets/Admin/assets/img/kulonprogo.png" rel="icon">

    <link rel="stylesheet" href="/Assets/User/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="/Assets/User/css/animate.css">

    <link rel="stylesheet" href="/Assets/User/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/Assets/User/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/Assets/User/css/magnific-popup.css">

    <link rel="stylesheet" href="/Assets/User/css/aos.css">

    <link rel="stylesheet" href="/Assets/User/css/ionicons.min.css">

    <link rel="stylesheet" href="/Assets/User/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="/Assets/User/css/jquery.timepicker.css">

    <link rel="stylesheet" href="/Assets/User/css/flaticon.css">
    <link rel="stylesheet" href="/Assets/User/css/icomoon.css">
    <link rel="stylesheet" href="/Assets/User/css/style.css">
    <link href="/Assets/Admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">

    <style>
        .project-destination {
            margin-bottom: 40px;
        }

        .project-destination .img {
            transition: transform 0.3s ease;
        }

        .project-destination .img:hover {
            transform: scale(1.1);
        }

        .dropdown-item.active {
            background-color: gold !important;
            color: black !important;
        }

        .ql-size-small {
            font-size: 0.75em !important;
        }

        .ql-size-large {
            font-size: 1.5em !important;
        }

        .ql-size-huge {
            font-size: 2.5em !important;
        }

        .artikel img {
            max-width: 100%;
            height: auto;
            display: block;
            margin: 0 auto;
        }
    </style>
</head>

<?php

use App\Models\Admin\UmkmModel;

// Ambil data UMKM dari database
$umkmModel = new UmkmModel();
$umkmList = $umkmModel->findAll();
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
        <div class="container">
            <a class="navbar-brand" href="/">Pariwisata<span>Kalurahan Pleret</span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
            </button>

            <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item <?= ($activePage == '/') ? 'active' : ''; ?>"><a href="/" class="nav-link">Beranda</a></li>
                    <li class="nav-item <?= ($activePage == 'profil') ? 'active' : ''; ?> dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="navbarDropdownProfil" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profil</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownProfil">
                            <a class="dropdown-item <?= (isset($subPage) && $subPage == 'gambaran-umum') ? 'active' : ''; ?>" href="/profil/gambaran-umum">Gambaran Umum</a>
                            <a class="dropdown-item <?= (isset($subPage) && $subPage == 'visi-misi') ? 'active' : ''; ?>" href="/profil/visi-misi">Visi Misi</a>
                            <a class="dropdown-item <?= (isset($subPage) && $subPage == 'struktur-organisasi') ? 'active' : ''; ?>" href="/profil/struktur-organisasi">Struktur Organisasi</a>
                        </div>
                    </li>
                    <li class="nav-item <?= ($activePage == 'destinasi') ? 'active' : ''; ?> dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="navbarDropdownDestinasi" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Destinasi</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownDestinasi">
                            <a class="dropdown-item <?= (isset($subPage) && $subPage == 'pantai-mlarangan-asri') ? 'active' : ''; ?>" href="/destinasi/pantai-mlarangan-asri">Pantai Mlarangan Asri</a>
                            <a class="dropdown-item <?= (isset($subPage) && $subPage == 'sawah-surjan') ? 'active' : ''; ?>" href="/destinasi/sawah-surjan">Sawah Surjan</a>
                        </div>
                    </li>
                    <li class="nav-item <?= ($activePage == 'umkm') ? 'active' : ''; ?> dropdown">
                        <a href="javascript:void(0);" class="nav-link dropdown-toggle" id="navbarDropdownUMKM" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">UMKM</a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdownUMKM">
                            <?php foreach ($umkmList as $umkm): ?>
                                <a class="dropdown-item <?= (isset($subPage) && $subPage == $umkm['nama']) ? 'active' : ''; ?>" href="/umkm/<?= $umkm['id_umkm']; ?>"><?= $umkm['nama']; ?></a>
                            <?php endforeach; ?>
                        </div>
                    </li>
                    <li class="nav-item <?= ($activePage == 'berita') ? 'active' : ''; ?>"><a href="/berita" class="nav-link">Artikel</a></li>
                    <li class="nav-item <?= ($activePage == 'peta') ? 'active' : ''; ?>"><a href="/peta" class="nav-link">Peta Wisata</a></li>
                    <li class="nav-item cta"><a href="/login" class="nav-link">Login Admin</a></li>
                </ul>
            </div>

        </div>
    </nav>
    <!-- END nav -->

    <?= $this->renderSection('content'); ?>

    <!-- Footer -->
    <footer class="ftco-footer bg-bottom" style="background-image: url(/Assets/User/images/footer-bg.jpg);">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Vacation</h2>
                        <p>Dunia ini nggak hanya seluas meja kerja. Kamu harus ambil cuti untuk liburan bersama orang tercinta segera!</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                            <li class="ftco-animate"><a href="https://www.tiktok.com/@pantaimlaranganasri"><span class="bi bi-tiktok"></span></a></li>
                            <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                            <li class="ftco-animate"><a href="https://www.instagram.com/pantaimlaranganasri/"><span class="icon-instagram"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Hubungi Kami</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><span class="icon icon-map-marker"></span><span class="text">Dusun II, Pleret, Kec. Panjatan, Kabupaten Kulon Progo, Daerah Istimewa Yogyakarta</span></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+62 856 4383 4090</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">pemdespleretkp@gmail.com</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">
                    <?php if (current_url() == base_url('/')): ?>
                        <p>Jumlah Pengunjung: <?= isset($visitorCount) ? $visitorCount : 'Data tidak tersedia'; ?></p>
                    <?php endif; ?>
                    <p>Copyright &copy;2024 All rights reserved | Proudly Presented for Tourism in Pleret</p>
                </div>
            </div>
        </div>
    </footer>

    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    <script src="/Assets/User/js/jquery.min.js"></script>
    <script src="/Assets/User/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="/Assets/User/js/popper.min.js"></script>
    <script src="/Assets/User/js/bootstrap.min.js"></script>
    <script src="/Assets/User/js/jquery.easing.1.3.js"></script>
    <script src="/Assets/User/js/jquery.waypoints.min.js"></script>
    <script src="/Assets/User/js/jquery.stellar.min.js"></script>
    <script src="/Assets/User/js/owl.carousel.min.js"></script>
    <script src="/Assets/User/js/jquery.magnific-popup.min.js"></script>
    <script src="/Assets/User/js/aos.js"></script>
    <script src="/Assets/User/js/jquery.animateNumber.min.js"></script>
    <script src="/Assets/User/js/bootstrap-datepicker.js"></script>
    <script src="/Assets/User/js/scrollax.min.js"></script>
    <!-- <script src="/Assets/User/js/google-map.js"></script> -->
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpTjhRweOGfJ9OMW5oLLaPQC-md46Q428&callback=initMap&libraries=places&v=weekly" async></script> -->
    <!-- <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script> -->
    <script src="/Assets/User/js/main.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const pathsToScroll = [
                '/berita',
                '/peta',
                '/profil/gambaran-umum',
                '/profil/visi-misi',
                '/profil/struktur-organisasi',
                '/destinasi/pantai-mlarangan-asri',
                '/destinasi/sawah-surjan'
            ];
            const currentPath = window.location.pathname;

            // Fungsi untuk cek apakah path adalah halaman UMKM
            const isUmkmPage = currentPath.startsWith('/umkm/');

            // Jika currentPath ada di pathsToScroll atau merupakan halaman UMKM
            if (pathsToScroll.includes(currentPath) || isUmkmPage) {
                window.scrollTo(0, 360);
            }
        });
    </script>

</body>

</html>