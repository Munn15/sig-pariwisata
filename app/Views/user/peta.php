<?= $this->extend('user/layout'); ?>

<?= $this->section('content'); ?>

<section class="hero-wrap hero-wrap-2 js-fullheight" style="background-image: url('Assets/User/images/masri2.jpg');" data-stellar-background-ratio="0.5">
  <div class="overlay"></div>
  <div class="container">
    <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
      <div class="col-md-9 ftco-animate pb-5 text-center">
        <h1 class="mb-3 bread">PETA WISATA</h1>
        <p class="breadcrumbs"><span class="mr-2"><a href="/">Beranda <i class="ion-ios-arrow-forward"></i></a></span> <span>Peta Wisata <i class="ion-ios-arrow-forward"></i></span></p>
      </div>
    </div>
  </div>
</section>

<!-- Maps -->
<section id="konten" class="ftco-section contact-section" style="padding-top: 5em;">
  <div class="container">
    <div class="row block-9">
      <div class="col-md-12 d-flex">
        <div id="map" class="bg-white" style="width: 100%; height: 500px;"></div>
      </div>
    </div>
  </div>
</section>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpTjhRweOGfJ9OMW5oLLaPQC-md46Q428&libraries=places"></script>
<script>
  var map;
  var wisataLocations = <?= json_encode($wisata); ?>; // mendapatkan data lokasi wisata
  var userLocation;
  var directionsService;
  var directionsRenderer;

  function initMap() {
    // titik pusat peta dan level zoom
    map = new google.maps.Map(document.getElementById('map'), {
      center: {
        lat: -7.9332258481378375,
        lng: 110.14691441407732
      },
      zoom: 12
    });

    // inisialisasi layanan dan renderer untuk rute
    directionsService = new google.maps.DirectionsService();
    directionsRenderer = new google.maps.DirectionsRenderer();
    directionsRenderer.setMap(map);

    var infoWindow = new google.maps.InfoWindow(); // informasi wisata

    wisataLocations.forEach(function(wisata) {
      var urlWisata = generateWisataUrl(wisata.nama); // Menentukan URL berdasarkan nama wisata
      var content = `
        <div class="card" style="width: 18rem;">
          <a href="${urlWisata}">
            <img class="card-img-top" src="/uploads/wisata/${wisata.gambar}" alt="${wisata.nama}">
          </a>
          <div class="card-body">
            <h5 class="card-title"><a href="${urlWisata}">${wisata.nama}</a></h5>
            <p class="card-text">Alamat: ${wisata.alamat}</p>
            <button class="btn btn-primary" onclick="showRoute(${wisata.latitude}, ${wisata.longitude})">Tampilkan Rute</button>
          </div>
        </div>
      `;

      // marker lokasi wisata
      var marker = new google.maps.Marker({
        position: {
          lat: parseFloat(wisata.latitude),
          lng: parseFloat(wisata.longitude)
        },
        map: map,
        title: wisata.nama
      });

      // event listener click menampilkan info window
      marker.addListener('click', function() {
        infoWindow.setContent(content);
        infoWindow.open(map, marker);
      });
    });

    // geolocation API untuk menampilkan lokasi pengguna
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(function(position) {
        userLocation = {
          lat: position.coords.latitude,
          lng: position.coords.longitude
        };

        // marker untuk lokasi pengguna
        var userMarker = new google.maps.Marker({
          position: userLocation,
          map: map,
          title: "Lokasi Anda",
          icon: 'http://maps.google.com/mapfiles/ms/icons/blue-dot.png'
        });

      }, function() {
        handleLocationError(true, infoWindow, map.getCenter());
      });
    } else {
      handleLocationError(false, infoWindow, map.getCenter());
    }
  }

  function generateWisataUrl(nama) {
    switch (nama.toLowerCase()) {
      case 'pantai mlarangan asri':
        return '/destinasi/pantai-mlarangan-asri';
      case 'sawah surjan':
        return '/destinasi/sawah-surjan';
      default:
        return '#'; // Default URL jika nama tidak sesuai
    }
  }

  // fungsi untuk menampilkan rute
  function showRoute(destinationLat, destinationLng) {
    if (!userLocation) {
      alert('Tidak dapat menentukan lokasi pengguna.');
      return;
    }

    var request = {
      origin: userLocation,
      destination: {
        lat: destinationLat,
        lng: destinationLng
      },
      travelMode: 'DRIVING' // mode perjalanan
    };

    // Meminta rute dari layanan directions dan menampilkannya di peta
    directionsService.route(request, function(result, status) {
      if (status == 'OK') {
        directionsRenderer.setDirections(result); // Menampilkan rute di peta
      } else {
        alert('Tidak dapat menampilkan rute: ' + status);
      }
    });
  }

  function handleLocationError(browserHasGeolocation, infoWindow, pos) {
    infoWindow.setPosition(pos);
    infoWindow.setContent(browserHasGeolocation ?
      'Error: The Geolocation service failed.' :
      'Error: Your browser doesn\'t support geolocation.');
    infoWindow.open(map);
  }

  // Memanggil fungsi initMap saat halaman dimuat
  window.onload = initMap;
</script>

<?= $this->endSection(); ?>