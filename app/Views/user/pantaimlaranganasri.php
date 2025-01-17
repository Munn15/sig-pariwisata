<?= $this->extend('user/layout'); ?>

<?= $this->section('content'); ?>

<style>
	.bg-light {
		color: black;
	}

	.bg-light img {
		max-width: 100%;
		height: auto;
	}
</style>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('/Assets/User/images/masri2.jpg');" data-stellar-background-ratio="0.5">
	<div class="overlay"></div>
	<div class="container">
		<div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
			<div class="col-md-9 ftco-animate pb-5 text-center">
				<h1 class="mb-3 bread">PANTAI MLARANGAN ASRI</h1>
				<p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span><span class="mr-2">Destinasi <i class="ion-ios-arrow-forward"></i></span><span>Pantai Mlarangan Asri </span></p>
			</div>
		</div>
	</div>
</section>

<section class="ftco-section" style="padding-top: 5em;">
	<div class="container">
		<!-- Deskripsi Wisata -->
		<div class="row justify-content-center pb-4">
			<div class="col-md-12 heading-section ftco-animate">
				<div class="bg-light p-4" style="border: 1px solid #ddd; border-radius: 5px;">
					<?= $wisata['deskripsi'] ?>
				</div>
			</div>
		</div>

		<!-- Gallery -->
		<div class="row justify-content-center pt-5 pb-3">
			<div class="col-md-12 heading-section text-center ftco-animate">
				<h2 class="mb-4">Gallery</h2>
			</div>
		</div>
		<div class="row">
			<?php for ($i = 0; $i < count($photos); $i++) : ?>
				<?php if ($i > 0 && $i % 4 == 0) : ?>
		</div>
		<div class="row">
		<?php endif; ?>
		<div class="col-md-3 ftco-animate">
			<div class="project-destination">
				<a href="<?= base_url('uploads/gallery/' . $photos[$i]['foto']) ?>" class="img image-popup" style="background-image: url(<?= base_url('uploads/gallery/' . $photos[$i]['foto']) ?>);">
				</a>
			</div>
		</div>
	<?php endfor; ?>
		</div>
	</div>

	<!-- Pesan -->
	<div class="row justify-content-center pt-5 pb-3">
		<div class="col-md-12 heading-section text-center ftco-animate">
			<h2 class="mb-4">Kirim Pesan</h2>
		</div>
	</div>
	<div class="row justify-content-center">
		<div class="col-md-8">

			<div class="container">
				<form action="<?= base_url('pantai/sendMessage') ?>" method="post">
					<div class="form-row">
						<div class="form-group col-md-6 mb-3">
							<label for="nama">Nama</label>
							<input type="text" class="form-control" id="nama" name="nama" required>
						</div>
						<div class="form-group col-md-6 mb-3">
							<label for="email">Email</label>
							<input type="email" class="form-control" id="email" name="email" required>
						</div>
					</div>
					<div class="form-group mb-3">
						<label for="message">Pesan</label>
						<textarea class="form-control" id="message" name="message" rows="5" required></textarea>
					</div>
					<div class="form-group form-check mb-3">
						<input type="checkbox" class="form-check-input" id="subscribe" name="subscribe">
						<label class="form-check-label" for="subscribe">Ingin menerima informasi terbaru melalui email</label>
					</div>
					<button type="submit" class="btn btn-primary">Kirim Pesan</button>
				</form>
			</div>

		</div>
	</div>
</section>

<script>
	$(document).ready(function() {
		$('.image-popup').magnificPopup({
			type: 'image',
			gallery: {
				enabled: true
			}
		});
	});
</script>

<?= $this->endSection(); ?>