<?= $this->extend('user/layout'); ?>

<?= $this->section('content'); ?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('Assets/User/images/masri2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">ARTIKEL WISATA</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Artikel <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section id="konten-artikel" class="ftco-section" style="padding-top: 5em;">
  <div class="container">
    <div class="row d-flex">
      <?php foreach ($articles as $article) : ?>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <a href="/isiberita/<?= $article['id_artikel'] ?>" class="block-20" style="background-image: url('<?= base_url('uploads/artikel/' . $article['foto']) ?>');">
            </a>
            <div class="text mt-3 float-right d-block">
              <div class="d-flex align-items-center mb-4 topp">
                <div class="one">
                  <span class="day"><?= date('d', strtotime($article['tanggal'])) ?></span>
                </div>
                <div class="two" style="margin-left: 10px;">
                  <span class="yr"><?= date('Y', strtotime($article['tanggal'])) ?></span>
                  <span class="mos"><?= date('F', strtotime($article['tanggal'])) ?></span>
                </div>
              </div>
              <h3 class="heading"><a href="/isiberita/<?= $article['id_artikel'] ?>"><?= truncate(strip_tags($article['judul']), 55) ?></a></h3>
              <p><?= truncate(strip_tags($article['deskripsi']), 100) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

    <!-- Pagination -->
    <div class="row mt-5">
      <div class="col text-center">
        <nav aria-label="Page navigation">
          <ul class="pagination justify-content-center">
            <?= $pager->makeLinks($currentPage, $limit, $totalArticles, 'bootstrap_pagination') ?>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>