<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">
    <div class="pagetitle">
        <h1>Edit UMKM</h1>
        <nav>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
                <li class="breadcrumb-item"><a href="/umkm">UMKM</a></li>
                <li class="breadcrumb-item active">Edit UMKM</li>
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
                        <h5 class="card-title">Form Edit UMKM</h5>

                        <form action="/umkm/update/<?= $umkm['id_umkm'] ?>" method="post" enctype="multipart/form-data">
                            <?= csrf_field() ?>
                            <input type="hidden" name="fotoLama" value="<?= $umkm['foto'] ?>">

                            <div class="form-group mb-3">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" name="nama" value="<?= $umkm['nama'] ?>" required>
                            </div>

                            <div class="form-group mb-3">
                                <label for="foto">Foto</label>
                                <input type="file" class="form-control" id="foto" name="foto">
                                <p class="mt-2">Foto saat ini: <br>
                                    <img src="/uploads/umkm/<?= $umkm['foto'] ?>" alt="<?= $umkm['nama'] ?>" width="100">
                                </p>
                            </div>

                            <div class="form-group mb-3">
                                <label for="deskripsi" class="form-label">Deskripsi</label>
                                <div id="quill-editor"><?= $umkm['deskripsi']; ?></div>
                                <textarea name="deskripsi" id="deskripsi" style="display: none;"><?= $umkm['deskripsi']; ?></textarea>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3">Simpan</button>
                            <a href="/umkm" class="btn btn-secondary mt-3">Batal</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<!-- Tambahin Quill.js -->
<script src="https://cdn.jsdelivr.net/npm/quill@1.3.7/dist/quill.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/quill-image-uploader@1.2.3/dist/quill.imageUploader.min.js"></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Daftarin imageUploader ke Quill
        Quill.register('modules/imageUploader', ImageUploader);

        // Konfigurasikan toolbar Quill
        var toolbarOptions = [
            [{
                'size': ['small', false, 'large', 'huge']
            }],
            ['bold', 'italic', 'underline', 'strike'],
            [{
                'list': 'ordered'
            }, {
                'list': 'bullet'
            }],
            ['link', 'image'],
            ['clean']
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
                                        reject('Upload gagal!');
                                    }
                                })
                                .catch(error => {
                                    reject('Upload error!');
                                    console.error('Error:', error);
                                });
                        });
                    }
                }
            }
        });

        // Ambil deskripsi lama dan taruh di Quill editor
        var deskripsi = document.querySelector('#deskripsi').value;
        quill.root.innerHTML = deskripsi.trim();

        // Update textarea sebelum submit
        document.querySelector('form').onsubmit = function() {
            var content = quill.root.innerHTML.trim();
            document.querySelector('#deskripsi').value = content;
        };
    });
</script>

<?= $this->endSection(); ?>