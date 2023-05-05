<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Mix Studio - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  
  <link href="{{ asset('frontend/assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('frontend/assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('frontend/assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

</head>

<body style="background-color:#000000;">

<!-- ======= Header ======= -->
{{-- <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
  
      <h1 class="logo me-auto"><a href="{{ route('home') }}"><span>MI</span>X</a></h1>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/" >Home</a></li>
          <li><a href="/about">About Us</a></li>
          <li><a href="/detail/service"class="active" >Services</a></li>
          <li><a href="/harga">Pricing</a></li>
          <li><a href="">Blog</a></li>  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header> --}}

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
    {{-- <!-- @include('layouts.body.slider') --> --}}
  <!-- End Hero -->

  {{-- Main --}}
  <<div class="container mt-6 p-6 ">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body text-center">
                    <h4 class="card-title">Transaksi Telah Berhasil</h4>
                    <p class="card-text">Silahkan lanjutkan untuk mencetak formulir.</p>
                    <a href="/exportpdf" class="btn btn-secondary" target="_blank">Cetak</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Tambahkan link JavaScript Bootstrap di sini -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  {{-- @include('layouts.body.footer') --}}
  <!-- End Footer -->

  <a href="" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>