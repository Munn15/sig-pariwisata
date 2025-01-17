<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Visi Misi</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item">Pokdarwis</li>
        <li class="breadcrumb-item active">Visi Misi</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <!-- Notifikasi -->
  <?php if (session()->has('message')) : ?>
    <div id="alert" class="alert <?= session()->getFlashdata('alert-class') ?> alert-dismissible fade show" role="alert">
      <?= session('message') ?>
      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
  <?php endif; ?>
  <!-- End Notifikasi -->

  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Visi Misi Pokdarwis</h5>

      <!-- Form text editor -->
      <form action="/visimisi/save" method="post">
        <div id="quill-editor">
          <!-- teks content -->
        </div>
        <input type="hidden" name="content" id="quill-content">
        <button type="submit" class="btn btn-primary mt-3">Simpan</button>
      </form>
      <!-- End Form -->

    </div>
  </div>

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

              fetch('/visimisi/uploadImage', {
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

    // Set initial content from server
    var initialContent = <?= json_encode($content) ?>;
    quill.root.innerHTML = initialContent;

    // Saat form dikirim, ambil konten dari Quill dan masukkan ke input hidden
    document.querySelector('form').onsubmit = function() {
      var content = quill.root.innerHTML.trim();
      document.querySelector('#quill-content').value = content;
    };
  });
</script>

<?= $this->endSection(); ?>