<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Service</title>
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

<body>

  <!-- ======= Header ======= -->
  @include('layouts.body.header')

  <!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    {{-- <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
          <h2>Pricing</h2>
          <ol>
            <li><a href="index.html">Home</a></li>
            <li>Pricing</li>
          </ol>
        </div>

      </div>
    </section><!-- End Breadcrumbs --> --}}

    

    <!-- ======= Pricing Section ======= -->
    <section id="pricing" class="pricing">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="mt-5">
            <h1 class="justify-content-center text-center text-dark">POTRAITS</h1>
            <hr class="w-25 mx-auto">
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="box featured">
              <h3>Package A</h3>
              <h4><sup>IDR</sup>150<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>5 pose, 5 edit foto</li>
                <li>max 2 orang</li>
                <li>1 kostum (bawa sendiri)</li>
                <li>1 background</li>
                <li>1 cetak ukuran 4R</li>
                <!-- <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> -->
              </ul>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Package B</h3>
              <h4><sup>IDR</sup>200<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>10 pose,10 edit foto</li>
                <li>max 2 orang</li>
                <li>1 kostum (bawa sendiri)</li>
                <li>2 background</li>
                <li>5 cetak ukuran 4R</li>

                <!-- <li class="na">* khusus makanan tidak ada kostum</li> -->
              </ul>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Package C</h3>
              <h4><sup>IDR</sup>250<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>Pose sepuasnya selama 1 jam, 10 edit</li>
                <li>max 2 orang</li>
                <li>2 kostum (bawa sendiri)</li>
                <li>2 background</li>
                <li>1 cetak ukuran 12R + bingkai</li>

              </ul>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Custom</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Paket Custom</li>
                <li>.</li>
                <li>.</li>
                <li>.</li>
                <li>.</li>
              </ul>
           
            </div>
          </div>

        </div>
        <div class="row">

          <div class="mt-5">
            <h1 class="justify-content-center text-center text-dark">FAMILY</h1>
            <hr class="w-25 mx-auto">
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="box featured">
              <h3>Package A</h3>
              <h4><sup>IDR</sup>150<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>5 pose, 5 edit foto</li>
                <li>max 5 orang</li>
                <li>1 kostum (bawa sendiri)</li>
                <li>1 background</li>
                <li>1 cetak ukuran 4R</li>
                <!-- <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> -->
              </ul>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Package B</h3>
              <h4><sup>IDR</sup>200<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>10 pose,10 edit foto</li>
                <li>max 6 orang</li>
                <li>1 kostum (bawa sendiri)</li>
                <li>2 background</li>
                <li>5 cetak ukuran 4R</li>

                <!-- <li class="na">* khusus makanan tidak ada kostum</li> -->
              </ul>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Package C</h3>
              <h4><sup>IDR</sup>250<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>Pose sepuasnya selama 1 jam, 10 edit</li>
                <li>max 6 orang</li>
                <li>2 kostum (bawa sendiri)</li>
                <li>2 background</li>
                <li>1 cetak ukuran 12R + bingkai</li>

              </ul>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Custom</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Paket Custom</li>
                <li>.</li>
                <li>.</li>
                <li>.</li>
                <li>.</li>
              </ul>
              
            </div>
          </div>

        </div>
        <div class="row">

          <div class="mt-5">
            <h1 class="justify-content-center text-center text-dark">MATERNITY</h1>
            <hr class="w-25 mx-auto">
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="box featured">
              <h3>Package A</h3>
              <h4><sup>IDR</sup>150<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>5 pose, 5 edit foto</li>
                <li>max 2 orang</li>
                <li>1 kostum (bawa sendiri)</li>
                <li>1 background</li>
                <li>1 cetak ukuran 4R</li>
                <!-- <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> -->
              </ul>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Package B</h3>
              <h4><sup>IDR</sup>200<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>10 pose,10 edit foto</li>
                <li>max 2 orang</li>
                <li>1 kostum (bawa sendiri)</li>
                <li>2 background</li>
                <li>5 cetak ukuran 4R</li>

                <!-- <li class="na">* khusus makanan tidak ada kostum</li> -->
              </ul>
            
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Package C</h3>
              <h4><sup>IDR</sup>250<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>Pose sepuasnya selama 1 jam, 10 edit</li>
                <li>max 2 orang</li>
                <li>2 kostum (bawa sendiri)</li>
                <li>2 background</li>
                <li>1 cetak ukuran 12R + bingkai</li>

              </ul>
             
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Custom</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Paket Custom</li>
                <li>.</li>
                <li>.</li>
                <li>.</li>
                <li>.</li>
              </ul>
             
            </div>
          </div>

        </div>
        <div class="row">

          <div class="mt-5">
            <h1 class="justify-content-center text-center text-dark">FOOD</h1>
            <hr class="w-25 mx-auto">
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="box featured">
              <h3>Package A</h3>
              <h4><sup>IDR</sup>150<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>5 pose, 5 edit foto</li>
                <li>max 1 makanan</li>
                <li>1 background</li>
                <li>1 cetak ukuran 4R</li>
                <!-- <li class="na">Pharetra massa</li>
                <li class="na">Massa ultricies mi</li> -->
              </ul>
            
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-md-0">
            <div class="box featured">
              <h3>Package B</h3>
              <h4><sup>IDR</sup>200<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>10 pose,10 edit foto</li>
                <li>max 1 makanan</li>
                <li>2 background</li>
                <li>5 cetak ukuran 4R</li>

                <!-- <li class="na">* khusus makanan tidak ada kostum</li> -->
              </ul>
              
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box featured">
              <h3>Package C</h3>
              <h4><sup>IDR</sup>250<span> / Package</span></h4>
              <ul>
                <li>File pemotretan</li>
                <li>Pose sepuasnya selama 1 jam, 10 edit</li>
                <li>max 2 makanan</li>
                <li>2 kostum (bawa sendiri)</li>
                <li>2 background</li>
                <li>1 cetak ukuran 12R + bingkai</li>

              </ul>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-4 mt-lg-0">
            <div class="box">
              <span class="advanced">Advanced</span>
              <h3>Custom</h3>
              <h4><sup>$</sup>49<span> / month</span></h4>
              <ul>
                <li>Paket Custom</li>
                <li>.</li>
                <li>.</li>
                <li>.</li>
                <li>.</li>
              </ul>
             
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Pricing Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    {{-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questions</h2>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Non consectetur a erat nam at lectus urna duis? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                  Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Feugiat scelerisque varius morbi enim nunc? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Dolor sit amet consectetur adipiscing elit? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque.
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section --> --}}

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  @include('layouts.body.footer')

  <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('frontend/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('frontend/asets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('frontend/assets/vendor/php-email-form/validate.js') }}"></script>


  <!-- Template Main JS File -->
  <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

</body>

</html>