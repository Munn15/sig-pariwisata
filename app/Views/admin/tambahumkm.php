<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Tambah UMKM</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/umkm">UMKM</a></li>
                <li class="breadcrumb-item active">Tambah UMKM</li>
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
                        <h5 class="card-title">Form Tambah UMKM</h5>
                        <form action="/umkm/save" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto" required>
                            </div>
                            <div class="form-group mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <div id="quill-editor"></div>
                                <input type="hidden" name="deskripsi" id="quill-content">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Tambah</button>
                            <a href="/umkm" class="btn btn-secondary mt-3">Close</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Tambahkan script Quill.js -->
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

                            fetch('/umkm/uploadImage', {
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