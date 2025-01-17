<!-- editgallery.php -->

<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit Gallery</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="/gallery">Gallery</a></li>
        <li class="breadcrumb-item active">Edit Foto</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Alert -->
  <?php if (session()->getFlashdata('message')) : ?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('message') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>

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
            <h5 class="card-title">Edit Foto</h5>

            <form id="formEditFoto" action="/gallery/update/<?= $photo['id_gallery']; ?>" method="post" enctype="multipart/form-data">
              <!-- Gunakan enctype="multipart/form-data" untuk upload file -->
              <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
              </div>
              <div class="mb-3">
                <label for="id_wisata" class="form-label">Kategori</label>
                <select class="form-select" id="id_wisata" name="id_wisata" required>
                  <option selected disabled>-- Pilih Kategori Wisata --</option>
                  <?php foreach ($wisata as $wisata_item) : ?>
                    <option value="<?= $wisata_item['id_wisata']; ?>" <?= ($wisata_item['id_wisata'] == $photo['id_wisata']) ? 'selected' : ''; ?>>
                      <?= $wisata_item['nama']; ?>
                    </option>
                  <?php endforeach; ?>
                </select>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="/gallery" class="btn btn-secondary ms-2">Batal</a>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<?= $this->endSection(); ?>