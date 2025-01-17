<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

    <div class="pagetitle">
        <h1>Detail Pesan</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/pesan">Pesan</a></li>
                <li class="breadcrumb-item active">Detail Pesan</li>
            </ol>
        </nav>
    </div><!-- End Page Title -->

    <!-- Notifikasi -->
    <?php if (session()->has('success')) : ?>
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <?= session('success') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    <?php endif; ?>
    <!-- End Notifikasi -->

    <section class="section">
        <div class="row">
            <div class="col-lg-12">

                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Detail Pesan</h5>
                        <table class="table">
                            <tbody>
                                <tr>
                                    <th>Nama</th>
                                    <td><?= $message['nama'] ?></td>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <td><?= $message['email'] ?></td>
                                </tr>
                                <tr>
                                    <th>Pesan</th>
                                    <td><?= $message['message'] ?></td>
                                </tr>
                                <tr>
                                    <th>Subscribe</th>
                                    <td><?= $message['subscribe'] ? 'Ya' : 'Tidak' ?></td>
                                </tr>
                                <tr>
                                    <th>Waktu Kirim</th>
                                    <td><?= date('d F Y H:i:s', strtotime($message['created_at'])) ?></td>
                                </tr>
                            </tbody>
                        </table>
                        <a href="/pesan" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>

            </div>
        </div>
    </section>

</main><!-- End #main -->

<?= $this->endSection(); ?>