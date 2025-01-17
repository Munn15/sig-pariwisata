<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Login Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="Assets/Admin/assets/img/kulonprogo.png" rel="icon">
  <link href="Assets/Admin/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.gstatic.com" rel="preconnect">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="Assets/Admin/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="Assets/Admin/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="Assets/Admin/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="Assets/Admin/assets/vendor/quill/quill.snow.css" rel="stylesheet">
  <link href="Assets/Admin/assets/vendor/quill/quill.bubble.css" rel="stylesheet">
  <link href="Assets/Admin/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="Assets/Admin/assets/vendor/simple-datatables/style.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="Assets/Admin/assets/css/style.css" rel="stylesheet">

</head>

<body>

  <main>
    <div class="container">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="/dashboard" class="logo d-flex align-items-center w-auto">
                  <span class="d-none d-lg-block">Web Pariwisata Pleret</span>
                </a>
              </div>

              <div class="card mb-3">
                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login Admin</h5>
                    <p class="text-center small">Masukkan username & password untuk login</p>
                  </div>

                  <!-- Alert -->
                  <?php if (session()->getFlashdata('error')) : ?>
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                      <?= session()->getFlashdata('error') ?>
                      <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                  <?php endif; ?>
                  <!-- End Alert -->

                  <form action="/login/authenticate" method="post" class="row g-3 needs-validation" novalidate>

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <span class="input-group-text" id="inputGroupPrepend">@</span>
                        <input type="text" name="username" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12 py-3">
                      <button class="btn btn-primary w-100" type="submit">Login</button>
                    </div>
                  </form>

                </div>
              </div>

            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <!-- Vendor JS Files -->
  <script src="Assets/Admin/assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="Assets/Admin/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="Assets/Admin/assets/vendor/chart.js/chart.umd.js"></script>
  <script src="Assets/Admin/assets/vendor/echarts/echarts.min.js"></script>
  <script src="Assets/Admin/assets/vendor/quill/quill.js"></script>
  <script src="Assets/Admin/assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="Assets/Admin/assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="Assets/Admin/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="Assets/Admin/assets/js/main.js"></script>

</body>

</html>