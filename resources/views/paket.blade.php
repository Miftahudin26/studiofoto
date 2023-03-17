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

</head>

<body style="background-color:#000000;">

<!-- ======= Header ======= -->
<header id="header" class="fixed-top">
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
          {{-- <li><a href="">Contact</a></li> --}}
  
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
  
      {{-- <div class="header-social-links d-flex">
        <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
      </div> --}}
    </div>
  </header>

  <!-- End Header -->

  <!-- ======= Hero Section ======= -->
    <!-- @include('layouts.body.slider') -->
  <!-- End Hero -->

  {{-- Main --}}
  <main id="main" class="">
    <div class="mt-5 pt-5 service-center" >
        <h1 class="">SERVICES</h1>
    </div>
    <div id="services" class="container">
        <div class="row d-flex align-items-center">
            <div  id="serviceImg" class="col">
                <img style="width:400px"src="/frontend/potrait.png">
            </div>
            <div id="servicesKonten" class="col">
                <div class="bg-white width-services">
                    <div id="textContent" class="konten-service text-dark">
                        <h3>Potret</h3>
                        <hr>
                        <h5 class="mt-3">3 jam</h5>
                        <h5 class="mt-3">Varian & Harga</h5>
                        <button type="button" class="btn btn-outline-dark mt-3">Book Now</button>

                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center ">
            <div class="col">
                <img style="width:400px"src="/frontend/family.png">
            </div>
            <div id="servicesKonten" class="col">
                <div class="bg-white width-services">
                    <div id="textContent" class="konten-service text-dark">
                        <h3>Grup</h3>
                        <hr>
                        <h5 class="mt-3">3 jam</h5>
                        <h5 class="mt-3">Varian & Harga</h5>
                        <button type="button" class="btn btn-outline-dark mt-3">Book Now</button>

                    </div>
                    
                </div>
            </div>
        </div>
        <div class="row d-flex align-items-center ">
            <div class="col">
                <img style="width:400px"src="/frontend/maternity.png">
            </div>
            <div id="servicesKonten" class="col">
                <div class="bg-white width-services">
                    <div id="textContent" class="konten-service text-dark">
                        <h3>Maternity</h3>
                        <hr>
                        <h5 class="mt-3">1 jam 30 menit</h5>
                        <h5 class="mt-3">Varian & Harga</h5>
                        <button type="button" class="btn btn-outline-dark mt-3">Book Now</button>

                    </div>
                    
                </div>
            </div>
        </div>
        <div  class="row d-flex align-items-center ">
            <div  class="col">
                <img style="width:400px"src="/frontend/food.png">
            </div>
            <div id="servicesKonten" class="col">
                <div class="bg-white width-services">
                    <div id="textContent" class="konten-service text-dark">
                        <h3>Produk</h3>
                        <hr>
                        <h5 class="mt-3">1 jam 30 menit</h5>
                        <h5 class="mt-3">Varian & Harga</h5>
                        <button type="button" class="btn btn-outline-dark mt-3">Book Now</button>

                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
    <!-- @yield('home_content')

    <img src="" alt="">
    <a aria-label="Chat on WhatsApp" href="https://wa.me/1XXXXXXXXXX"> <img alt="Chat on WhatsApp" src="WhatsAppButtonGreenLarge.png" /> </a>
    <a aria-label="Chat on WhatsApp" href="https://wa.me/1XXXXXXXXXX"> <img alt="Chat on WhatsApp" src="WhatsAppButtonGreenLarge.svg" /> </a> -->
  </main>
  <!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.body.footer')
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