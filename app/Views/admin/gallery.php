<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Gallery</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Gallery</li>
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
  <!-- End Alert -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Gallery</h5>
            <p>Foto-foto pada tabel di bawah akan ditampilkan pada halaman gallery setiap tempat wisata</p>

            <a href="/tambahgallery" class="btn btn-primary mb-3"><i class="bi bi-plus-circle me-2"></i>Tambah Foto</a>

            <!-- Table with stripped rows -->
            <table class="table datatable">
              <thead>
                <tr>
                  <th class="col-1">No</th>
                  <th class="col-6">Foto</th>
                  <th class="col-4">Kategori</th>
                  <th class="col-1">Aksi</th>
                </tr>
              </thead>
              <tbody>
                <?php foreach ($photos as $index => $photo) : ?>
                  <tr>
                    <td><?= $index + 1 ?></td>
                    <td><img src="<?= base_url('uploads/gallery/' . $photo['foto']) ?>" alt="<?= $photo['foto'] ?>" class="img-thumbnail" width="400"></td>
                    <td><?= $photo['nama_wisata'] ?></td>
                    <td>
                      <a href="/gallery/edit/<?= $photo['id_gallery']; ?>" class="btn btn-primary btn-sm"><i class="bi bi-pencil"></i></a>
                      <a href="/gallery/delete/<?= $photo['id_gallery']; ?>" class="btn btn-danger btn-sm delete-photo" data-id="<?= $photo['id_gallery']; ?>" onclick="return confirm('Apakah Anda yakin ingin menghapus foto ini?');"><i class="bi bi-trash"></i></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
            </table>
            <!-- End Table with stripped rows -->

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<script>
  document.addEventListener('DOMContentLoaded', function() {
    // Mendapatkan elemen pencarian
    var searchElement = document.querySelector('.datatable-search');

    // Memeriksa apakah elemen pencarian ditemukan
    if (searchElement) {
      // Hapus elemen pencarian
      searchElement.parentNode.removeChild(searchElement);
    }

    // Ubah nilai default dropdown datatable-selector menjadi 5
    var datatableSelector = document.querySelector('.datatable-selector');
    if (datatableSelector) {
      datatableSelector.value = 5;
      var event = new Event('change', {
        bubbles: true
      });
      datatableSelector.dispatchEvent(event);
    }

    // Inisialisasi DataTable dengan pengaturan yang diubah
    var table = $('.datatable').DataTable({
      pageLength: 5
    });

    // Ubah nilai dropdown saat DataTable diinisialisasi
    table.on('init', function() {
      datatableSelector.value = 5;
      datatableSelector.dispatchEvent(new Event('change', {
        bubbles: true
      }));
    });
  });
</script>

<?= $this->endSection(); ?>