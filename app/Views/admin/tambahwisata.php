<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Tambah Wisata</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item"><a href="/wisata">Wisata</a></li>
        <li class="breadcrumb-item active">Tambah Wisata</li>
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
            <h5 class="card-title">Tambah Wisata</h5>

            <form action="/wisata/save" method="post" enctype="multipart/form-data">
              <?= csrf_field() ?>
              <div class="mb-3">
                <label for="nama" class="form-label">Nama Wisata</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?= old('nama') ?>" required>
              </div>
              <div class="mb-3">
                <label for="alamat" class="form-label">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?= old('alamat') ?>" required>
              </div>
              <div class=" mb-3">
                <label for="gambar" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="gambar" name="gambar" required>
              </div>
              <div class="mb-3">
                <label for="deskripsi" class="form-label">Deskripsi</label>
                <div id="quill-editor"></div>
                <input type="hidden" name="deskripsi" id="quill-content" value="<?= old('deskripsi') ?>">
              </div>
              <div class=" mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control" id="latitude" name="latitude" value="<?= old('latitude') ?>" required>
              </div>
              <div class=" mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control" id="longitude" name="longitude" value="<?= old('longitude') ?>" required>
              </div>
              <button type="submit" class="btn btn-primary">Simpan</button>
              <a href="/wisata" class="btn btn-secondary">Close</a>
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

              fetch('/wisata/uploadImage', {
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

    // Set initial content
    var initialContent = document.querySelector('#quill-content').value;
    quill.root.innerHTML = initialContent;

    // Update hidden input on form submit
    document.querySelector('form').onsubmit = function() {
      var content = quill.root.innerHTML;
      document.querySelector('#quill-content').value = content;
    };
  });
</script>

<?= $this->endSection(); ?>