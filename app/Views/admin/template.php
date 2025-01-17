<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title><?= $title; ?></title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="/Assets/Admin/assets/img/kulonprogo.png" rel="icon">
    <link href="/Assets/Admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.gstatic.com" rel="preconnect">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/Assets/Admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/Assets/Admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/Assets/Admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/Assets/Admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="/Assets/Admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.snow.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="/Assets/Admin/assets/css/style.css" rel="stylesheet">

</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">

        <div class="d-flex align-items-center justify-content-between">
            <a href="/dashboard" class="logo d-flex align-items-center">
                <img src="/Assets/Admin/assets/img/kulonprogo.png" alt="">
                <span class="d-none d-lg-block">Kalurahan Pleret</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <nav class="header-nav ms-auto">
            <ul class="d-flex align-items-center">

                <li class="nav-item dropdown pe-3">

                    <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
                        <img src="/Assets/Admin/assets/img/person.jpg" alt="Profile" class="rounded-circle">
                        <span class="d-none d-md-block ps-2">Admin Pleret</span>
                    </a><!-- End Profile Iamge Icon -->

                    <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
                        <li class="dropdown-header">
                            <h6>Admin Pleret</h6>
                        </li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>

                        <li>
                            <a class="dropdown-item d-flex align-items-center" href="<?= base_url('/logout') ?>">
                                <i class="bi bi-box-arrow-right"></i>
                                <span>Logout</span>
                            </a>
                        </li>

                    </ul><!-- End Profile Dropdown Items -->

                </li><!-- End Profile Nav -->

            </ul>
        </nav><!-- End Navigation -->


    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <aside id="sidebar" class="sidebar">

        <ul class="sidebar-nav" id="sidebar-nav">

            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'dashboard') ? 'active' : 'collapsed' ?>" href="/dashboard">
                    <i class="bi bi-grid"></i>
                    <span>Dashboard</span>
                </a>
            </li><!-- End Dashboard Nav -->

            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'visimisi' || $current_page == 'gambaranumum' || $current_page == 'strukturorganisasi') ? '' : 'collapsed' ?>" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                    <i class="bi bi-people"></i><span>Profil Pokdarwis</span><i class="bi bi-chevron-down ms-auto"></i>
                </a>
                <ul id="components-nav" class="nav-content <?= ($current_page == 'visimisi' || $current_page == 'gambaranumum' || $current_page == 'strukturorganisasi') ? 'show' : 'collapse' ?>" data-bs-parent="#sidebar-nav">
                    <li>
                        <a href="/visimisi" class="<?= ($current_page == 'visimisi') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Visi Misi</span>
                        </a>
                    </li>
                    <li>
                        <a href="/gambaranumum" class="<?= ($current_page == 'gambaranumum') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Gambaran Umum</span>
                        </a>
                    </li>
                    <li>
                        <a href="/strukturorganisasi" class="<?= ($current_page == 'strukturorganisasi') ? 'active' : '' ?>">
                            <i class="bi bi-circle"></i><span>Struktur Organisasi</span>
                        </a>
                    </li>
                </ul>
            </li><!-- End Profil Pokdarwis Nav -->

            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'wisata' || $current_page == 'tambahwisata' || $current_page == 'editwisata') ? 'active' : 'collapsed' ?>" href="/wisata">
                    <i class="bi bi-map"></i><span>Wisata</span>
                </a>
            </li><!-- End Wisata Nav -->

            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'artikel' || $current_page == 'tambahartikel' || $current_page == 'editartikel') ? 'active' : 'collapsed' ?>" href="/artikel">
                    <i class="bi bi-layout-text-window-reverse"></i><span>Artikel</span>
                </a>
            </li><!-- End Artikel Nav -->

            <!-- UMKM Nav (Menu Baru) -->
            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'umkm' || $current_page == 'tambahumkm' || $current_page == 'editumkm') ? 'active' : 'collapsed' ?>" href="/umkm">
                    <i class="bi bi-shop"></i><span>UMKM</span>
                </a>
            </li><!-- End UMKM Nav -->

            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'gallery' || $current_page == 'tambahgallery' || $current_page == 'editgallery') ? 'active' : 'collapsed' ?>" href="/gallery">
                    <i class="bi bi-images"></i><span>Gallery</span>
                </a>
            </li><!-- End Gallery Nav -->

            <li class="nav-item">
                <a class="nav-link <?= ($current_page == 'pesan') ? 'active' : 'collapsed' ?>" href="/pesan">
                    <i class="bi bi-chat-right-dots"></i><span>Pesan</span>
                </a>
            </li><!-- End Pesan Nav -->

        </ul>

    </aside><!-- End Sidebar-->

    <?= $this->renderSection('content'); ?>

    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer">
        <div class="copyright">
            Copyright &copy; 2024 All rights reserved
        </div>
        <div class="credits">
            Proudly Presented for Tourism in Pleret
        </div>
    </footer><!-- End Footer -->

    <!-- Vendor JS Files -->
    <script src="/Assets/Admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
    <script src="/Assets/Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="/Assets/Admin/assets/vendor/chart.js/chart.umd.js"></script>
    <script src="/Assets/Admin/assets/vendor/echarts/echarts.min.js"></script>
    <script src="/Assets/Admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
    <script src="/Assets/Admin/assets/vendor/tinymce/tinymce.min.js"></script>
    <script src="/Assets/Admin/assets/vendor/php-email-form/validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js"></script>

    <!-- Template Main JS File -->
    <script src="/Assets/Admin/assets/js/main.js"></script>

</body>

</html>