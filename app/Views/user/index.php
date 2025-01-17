<?= $this->extend('user/layout'); ?>

<?= $this->section('content'); ?>

<style>
  .logo-wrapper {
    position: absolute;
    top: 100px;
    left: 190px;
    text-align: center;
  }

  /* Untuk ukuran layar di bawah 768px */
  @media (max-width: 768px) {
    .logo-wrapper {
      position: relative;
      top: 0;
      left: 0;
      display: flex;
      justify-content: center;
      align-items: center;
      flex-wrap: wrap;
    }

    .logo-wrapper div {
      margin-right: 10px;
      text-align: center;
    }

    .logo-wrapper img {
      height: 40px;
      /* Ukuran logo lebih kecil untuk mobile */
    }

    .logo-wrapper div span {
      font-size: 8px;
      text-align: center;
      /* Ukuran teks lebih kecil untuk mobile */
    }

    .logo-wrapper div:last-child {
      margin-right: 0;
    }
  }
</style>

<div class="hero-wrap js-fullheight" style="background-image: url('Assets/User/images/bg_7.png');" data-stellar-background-ratio="0.5">
  <div class="logo-wrapper">
    <div style="display: inline-block; margin-right: 5px;">
      <img src="/Assets/User/images/ujb.png" alt="Universitas Janabadra" style="height: 50px;">
      <div style="color: white; font-size: 10px; margin-top: 5px;">
        <span style="font-weight: bold;">Universitas</span><br>
        <span style="font-weight: bold;">Janabadra</span>
      </div>
    </div>
    <div style="display: inline-block; margin-right: 5px;">
      <img src="/Assets/User/images/kemendikbud.png" alt="Kemendikbud" style="height: 50px;">
      <div style="color: white; font-size: 10px; margin-top: 5px;">
        <span style="font-weight: bold;">Kemendikbud</span><br>
        <span style="font-weight: bold;">Ristek</span>
      </div>
    </div>
    <div style="display: inline-block;">
      <img src="/Assets/User/images/kulonprogo.png" alt="Kulonprogo" style="height: 50px;">
      <div style="color: white; font-size: 10px; margin-top: 5px;">
        <span style="font-weight: bold;">Kabupaten</span><br>
        <span style="font-weight: bold;">Kulonprogo</span>
      </div>
    </div>
  </div>
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center" data-scrollax-parent="true">
      <div class="col-md-9 text text-center ftco-animate" data-scrollax=" properties: { translateY: '70%' }">
        <a href="https://www.youtube.com/watch?v=7cNk7wVHeY0" class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
          <span class="ion-ios-play"></span>
        </a>
        <p class="caps" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Travel to the any corner of the world, without going around in circles</p>
        <h1 data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Make Your Tour Amazing With Us</h1>
      </div>
    </div>
  </div>
</div>

<section class="ftco-section services-section bg-light">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 heading-section ftco-animate">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-1 mt-2"><?= $pantai['nama'] ?></h2>
          </div>
          <div class="col-md-12" style="min-height: 304px;">
            <p><?= truncate($pantai['deskripsi'], 430) ?></p>
          </div>
          <div class="col-md-12 mt-3">
            <p><a href="/destinasi/pantai-mlarangan-asri" class="btn btn-primary py-3 px-4">Lihat Selengkapnya</a></p>
          </div>
        </div>
      </div>
      <div class="col-md-6 order-md-last order-first d-flex pl-md-5">
        <div class="img d-flex align-self-stretch w-100" style="background-image: url('/uploads/wisata/<?= $pantai['gambar'] ?>'); background-size: cover; background-position: center;">
          <img src="/uploads/wisata/<?= $pantai['gambar'] ?>" alt="<?= $pantai['nama'] ?>" class="img-fluid">
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter img" id="section-counter" style="padding-top: 7em; padding-bottom: 3em;">
  <div class="container">
    <div class="row d-flex">
      <div class="col-md-6 d-flex">
        <div class="img d-flex align-self-stretch" style="background-image:url(/uploads/wisata/<?= $sawah['gambar'] ?>);"></div>
      </div>
      <div class="col-md-6 order-md-last heading-section pl-md-5 ftco-animate">
        <div class="row">
          <div class="col-md-12">
            <h2 class="mb-1 mt-2"><?= $sawah['nama'] ?></h2>
          </div>
          <div class="col-md-12" style="min-height: 304px;">
            <p><?= truncate($sawah['deskripsi'], 430) ?></p>
          </div>
          <div class="col-md-12 mt-3">
            <p><a href="/destinasi/sawah-surjan" class="btn btn-primary py-3 px-4">Lihat Selengkapnya</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="ftco-section">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <h2 class="mb-4">Artikel Terkini</h2>
      </div>
    </div>
    <div class="row d-flex">
      <?php foreach ($articles as $article) : ?>
        <div class="col-md-4 d-flex ftco-animate">
          <div class="blog-entry justify-content-end">
            <a href="/isiberita/<?= $article['id_artikel'] ?>" class="block-20" style="background-image: url('/uploads/artikel/<?= $article['foto'] ?>');">
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
              <p><?= truncate(strip_tags($article['deskripsi'], 100)) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>


<?= $this->endSection(); ?>