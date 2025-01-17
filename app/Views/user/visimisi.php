<?= $this->extend('user/layout'); ?>

<?= $this->section('content'); ?>

<style>
  .bg-light {
    color: black;
  }
</style>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/Assets/User/images/masri2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">PROFIL POKDARWIS</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span><span class="mr-2">Profil <i class="ion-ios-arrow-forward"></i></span><span>Visi Misi <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<section class="ftco-counter img" id="section-counter" style="padding-top: 3em; padding-bottom: 7em;">
  <div class="container">
    <div class="row justify-content-center pb-4">
      <div class="col-md-7 text-center heading-section ftco-animate">
        <h2 class="mb-4">Visi Misi</h2>
      </div>
    </div>
    <div class="row d-flex">
      <div class="col-md-12 pl-md-5">
        <div class="row justify-content-start pb-3">
          <div class="col-md-12 heading-section ftco-animate">
            <div class="bg-light p-4" style="border: 1px solid #ddd; border-radius: 5px;">
              <?= $content ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?= $this->endSection(); ?>