<header id="header" class="fixed-top">
  <div class="container d-flex align-items-center">

    <h1 class="logo me-auto"><a href="{{ route('home') }}"><span>MI</span>X</a></h1>
    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a href="" class="active">Home</a></li>

        <li class="dropdown"><a href=""><span>About</span> <i class="bi bi-chevron-down"></i></a>
          <ul>
            <li><a href="">About Us</a></li>
            <li><a href="">Team</a></li>
            <li><a href="">Testimonials</a></li>
          </ul>
        </li>

        <li><a href="{{ route('layanan') }}">Services</a></li>
        <li><a href="">Portfolio</a></li>
        <li><a href="">Pricing</a></li>
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