<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="assets/media/logo profil.png">
    <!-- Map CSS -->
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.css" />
    
    <!-- Libs CSS -->
    <link rel="stylesheet" href="./assets1/css/libs.bundle.css" />
    
    <!-- Theme CSS -->
    <link rel="stylesheet" href="./assets1/css/theme.bundle.css" />
    
    <!-- Title -->
    <title>TKIT AL-Qolam</title>
  </head>
  <body>

    <!-- CONTENT -->
    <section class="section-border border-primary">
      <div class="container d-flex flex-column">
        <div class="row align-items-center justify-content-center gx-0 min-vh-100">
          <div class="col-8 col-md-6 col-lg-7 offset-md-1 order-md-2 mt-auto mt-md-0 pt-8 pb-4 py-md-11">

            <!-- Image -->
            <img src="assets/media/banner/coba 2.png" alt="..." class="img-fluid">

          </div>
          <div class="col-12 col-md-5 col-lg-4 order-md-1 mb-auto mb-md-0 pb-8 py-md-11">

            <!-- Heading -->
            <h1 class="mb-0 fw-bold text-center">
              Masuk
            </h1>

            <!-- Text -->
            <p class="mb-6 text-center text-muted">
              Pendaftaran siswa TKIT AL-Qolam
            </p>

            <!-- Form -->
            <form class="mb-6">

              <!-- Email -->
              <div class="form-group">
                <label class="form-label" for="email">
                  Alamat email
                </label>
                <input type="email" class="form-control" id="email" placeholder="name@address.com">
              </div>
              <!-- Password -->
              <div class="form-group mb-5">
                <label class="form-label" for="password">
                 Kata Sandi
                </label>
                <input type="password" class="form-control" id="password" placeholder="Enter your password">
              </div>

              <!-- Submit -->
              <a href="{{'/formulir'}}" class="btn w-100 btn-primary" type="submit">Masuk</a>

            </form>

            <!-- Text -->
            <p class="mb-0 fs-sm text-center text-muted">
                Belum Punya Akun? <a href="{{'/pendaftaran'}}">Daftar</a>.
            </p>

          </div>
        </div> <!-- / .row -->
      </div> <!-- / .container -->
    </section>

    <!-- JAVASCRIPT -->
    <!-- Map JS -->
    <script src='https://api.mapbox.com/mapbox-gl-js/v0.53.0/mapbox-gl.js'></script>
    
    <!-- Vendor JS -->
    <script src="./assets/js/vendor.bundle.js"></script>
    
    <!-- Theme JS -->
    <script src="./assets/js/theme.bundle.js"></script>

  </body>
</html>
