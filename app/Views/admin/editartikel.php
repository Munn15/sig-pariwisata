<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Edit Artikel</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="/artikel">Artikel</a></li>
        <li class="breadcrumb-item active">Edit Artikel</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- alert -->
  <?php if (session()->getFlashdata('error')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <?= session()->getFlashdata('error') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <!-- alert -->

  <section class="section">
    <div class="row">
      <div class="col-lg-12">

        <div class="card">
          <div class="card-body">
            <h5 class="card-title">Edit Artikel</h5>

            <form action="/artikel/update/<?= $artikel['id_artikel'] ?>" method="post" enctype="multipart/form-data" id="formEditArtikel">
              <div class="mb-3">
                <label for="judul" class="form-label">Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" value="<?= $artikel['judul'] ?>" required>
              </div>
              <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="<?= date('Y-m-d', strtotime($artikel['tanggal'])) ?>" required>
              </div>
              <div class="mb-3">
                <label for="foto" class="form-label">Foto</label>
                <input type="file" class="form-control" id="foto" name="foto" accept="image/*">
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <div id="quill-editor"><?= $artikel['deskripsi']; ?></div>
                <textarea name="deskripsi" id="deskripsi" style="display: none;"><?= $artikel['deskripsi']; ?></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="/artikel" class="btn btn-secondary ms-2">Batal</a>
            </form>

          </div>
        </div>

      </div>
    </div>
  </section>

</main><!-- End #main -->

<script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill-image-uploader@1.2.3/dist/quill.imageUploader.min.js"></script>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    // Register imageUploader module
    Quill.register('modules/imageUploader', ImageUploader);

    // Inisialisasi Quill editor 
    var toolbarOptions = [
      [{
        'size': ['small', false, 'large', 'huge']
      }], // size options
      ['bold', 'italic', 'underline', 'strike'], // basic formatting
      [{
        'list': 'ordered'
      }, {
        'list': 'bullet'
      }], // lists
      ['link', 'image'], // links and images
      ['clean'] // remove formatting button
    ];

    var quill = new Quill('#quill-editor', {
      theme: 'snow',
      modules: {
        toolbar: toolbarOptions,
        imageUploader: {
          upload: file => {
            return new Promise((resolve, reject) => {
              var formData = new FormData();
              formData.append('image', file);

              fetch('/artikel/uploadImage', {
                  method: 'POST',
                  body: formData
                })
                .then(response => response.json())
                .then(result => {
                  if (result.success) {
                    resolve(result.url);
                  } else {
                    reject('Upload failed');
                  }
                })
                .catch(error => {
                  reject('Upload failed');
                  console.error('Error:', error);
                });
            });
          }
        }
      }
    });

    // Set konten awal dari nilai textarea yang tersembunyi
    var deskripsi = document.querySelector('#deskripsi').value;
    quill.root.innerHTML = deskripsi.trim();

    // Saat form dikirim, ambil konten dari Quill dan masukkan ke textarea yang tersembunyi
    document.querySelector('#formEditArtikel').onsubmit = function() {
      var content = quill.root.innerHTML.trim();
      document.querySelector('#deskripsi').value = content;
    };

  });
</script>

<?= $this->endSection(); ?>