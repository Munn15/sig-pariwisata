<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Gallery</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="/gallery">Gallery</a></li>
        <li class="breadcrumb-item active">Tambah Foto</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Alert -->
  <?php if (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('error') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <!-- End Alert -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Tambah Foto</h5>

            <form action="/gallery/save" method="post" enctype="multipart/form-data">
              <?= csrf_field() ?>

              <div class="mb-3">
                <label for="foto" class="form-label">Pilih Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" required>
              </div>

              <div class="mb-3">
                <label for="id_wisata" class="form-label">Kategori</label>
                <select class="form-control" id="id_wisata" name="id_wisata" required>
                  <option selected disabled>-- Pilih Kategori Wisata --</option>
                  <?php foreach ($wisata as $w) : ?>
                    <option value="<?= $w['id_wisata'] ?>"><?= $w['nama'] ?></option>
                  <?php endforeach; ?>
                </select>
              </div>

              <button type="submit" class="btn btn-primary">Simpan</button>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<?= $this->endSection(); ?>