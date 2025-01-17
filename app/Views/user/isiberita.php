<?= $this->extend('user/layout'); ?>

<?= $this->section('content'); ?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/Assets/User/images/masri2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">DETAIL ARTIKEL</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span><span class="mr-2"><a href="/berita">Artikel <i class="ion-ios-arrow-forward"></i></a></span><span>Detail Artikel <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<!-- artikel -->
<section class="ftco-section" style="padding-top: 5em;">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-12 pl-md-5">
        <div class="row justify-content-start pb-3">
          <div class="col-md-12 heading-section ftco-animate">
            <div class="text-center">
              <img src="/uploads/artikel/<?= $artikel['foto'] ?>" alt="<?= $artikel['judul'] ?>" class="img-fluid mb-4">
            </div>
            <h3 class="mt-2"><?= $artikel['judul'] ?></h3>
            <p class="meta mb-3"><span class="mr-2">Tanggal: <?= date('d F Y', strtotime($artikel['tanggal'])) ?></span></p>
            <div class="artikel">
              <?= $artikel['deskripsi'] ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>