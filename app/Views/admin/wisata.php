<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Wisata</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Wisata</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Notifikasi -->
  <?php if (session()->has('success')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('success'); ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <!-- End Notifikasi -->

  <a href="/tambahwisata" class="btn btn-primary mb-3">
    <i class="bi bi-plus-circle me-2"></i>Tambah Wisata
  </a>

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="row">
          <!-- Loop through wisata data -->
          <?php foreach ($wisata as $w) : ?>
            <div class="col-md-4">
              <div class="card">
                <img src="<?= base_url('uploads/wisata/' . $w['gambar']); ?>" class="card-img-top" alt="<?= $w['nama']; ?>" style="height: 300px; object-fit: cover; width: 100%;">
                <div class="card-body">
                  <h5 class="card-title"><?= $w['nama']; ?></h5>
                  <p class="card-text"><?= $w['alamat']; ?></p>
                  <div class="d-flex justify-content-between mt-4">
                    <a href="/wisata/edit/<?= $w['id_wisata']; ?>" class="btn btn-primary">
                      <i class="bi bi-pencil-square"></i> Edit
                    </a>
                    <form action="/wisata/delete/<?= $w['id_wisata']; ?>" method="post">
                      <?= csrf_field(); ?>
                      <button class="btn btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?');">
                        <i class="bi bi-trash"></i> Hapus
                      </button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<?= $this->endSection(); ?>