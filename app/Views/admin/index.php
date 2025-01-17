<?= $this->extend('admin/template'); ?>

<?= $this->section('content'); ?>

<main id="main" class="main">

  <div class="pagetitle">
    <h1>Dashboard</h1>
    <nav>
      <ol class="breadcrumb">
        <li class="breadcrumb-item"><a href="/dashboard">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </nav>
  </div><!-- End Page Title -->

  <section class="section dashboard">
    <div class="row">

      <!-- Top row columns -->
      <div class="col-lg-12">
        <div class="row d-flex">

          <!-- Wisata Card -->
          <div class="col-xxl-3 col-md-6 mb-3 d-flex align-items-stretch">
            <div class="card info-card sales-card w-100">

              <div class="card-body">
                <h5 class="card-title"><a href="/wisata">Data Wisata</a></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-tree"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= $jumlah_wisata ?> item</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Wisata Card -->

          <!-- Artikel Card -->
          <div class="col-xxl-3 col-md-6 mb-3 d-flex align-items-stretch">
            <div class="card info-card revenue-card w-100">

              <div class="card-body">
                <h5 class="card-title"><a href="/artikel">Data Artikel</a></h5>

                <div class="d-flex align-items-center">
                  <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                    <i class="bi bi-newspaper"></i>
                  </div>
                  <div class="ps-3">
                    <h6><?= $jumlah_artikel ?> item</h6>
                  </div>
                </div>
              </div>

            </div>
          </div><!-- End Artikel Card -->

        </div>
      </div><!-- End Top row columns -->

      <!-- Bottom row for latest articles -->
      <div class="col-lg-6">
        <div class="card">
          <div class="card-body pb-0">
            <h5 class="card-title">Artikel Terbaru</h5>

            <div class="news">
              <?php foreach ($latestArticles as $article) : ?>
                <div class="post-item clearfix">
                  <img src="<?= base_url('uploads/artikel/' . $article['foto']) ?>" alt="<?= $article['judul'] ?>">
                  <h4><a href="/isiberita/<?= $article['id_artikel'] ?>"><?= truncate($article['judul'], 50) ?></a></h4>
                  <p><?= truncate(strip_tags($article['deskripsi']), 100) ?></p>
                </div>
              <?php endforeach; ?>
            </div><!-- End sidebar recent posts-->

          </div>
        </div>
      </div><!-- End Bottom row for latest articles -->

    </div>
  </section>

</main><!-- End #main -->

<?= $this->endSection(); ?>