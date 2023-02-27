<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon" />
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet" />

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/animate.css/animate.min.css" rel="stylesheet" />
    <link href="assets/vendor/aos/aos.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" />
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet" />
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet" />
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet" />
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet" />

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet" />
  </head>
  <body>
    <header id="header" class="fixed-top">
      <div class="container d-flex align-items-center">
  
        <h1 class="logo me-auto"><a href="index.html"><span>MI</span>X</a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html" class="logo me-auto me-lg-0"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
  
        <nav id="navbar" class="navbar order-last order-lg-0">
          <ul>
            <li><a href="index.html">Home</a></li>
  
            <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
              <ul>
                <li><a href="about.html">About Us</a></li>
                <li><a href="team.html">Team</a></li>
                <li><a href="testimonials.html">Testimonials</a></li>
              </ul>
            </li>
  
            <li><a href="services.html">Services</a></li>
            <li><a href="portfolio.html" class="active">Portfolio</a></li>
            <li><a href="pricing.html">Pricing</a></li>
            <li><a href="blog.html">Blog</a></li>
            <li><a href="contact.html">Contact</a></li>
  
          </ul>
          <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
  
        <div class="header-social-links d-flex">
          <a href="#" class="twitter"><i class="bu bi-twitter"></i></a>
          <a href="#" class="facebook"><i class="bu bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bu bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bu bi-linkedin"></i></i></a>
        </div>
  
      </div>
    </header><!-- End Header -->

    <main id="main">
      <section id="reservasi">
        <div class="container mt-5 col-6 bg-white shadow-sm p-3 mb-5 bg-body-tertiary rounded">
          <h1>Form Reservasi</h1>
          <hr />
  
          <form>
            <div class="mb-3">
              <label for="nama" class="form-label">Nama Lengkap</label>
              <input type="text" class="form-control" id="nama" name="nama" />
            </div>
  
            <div class="mb-3">
              <label for="email" class="form-label">Email</label>
              <input type="email" class="form-control" id="email" name="email" />
            </div>
  
            <div class="mb-3">
              <label for="telepon" class="form-label">Nomor Telepon</label>
              <input type="tel" class="form-control" id="telepon" name="telepon" />
            </div>
  
            <div class="mb-3">
              <label for="alamat" class="form-label">Alamat Lengkap</label>
              <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
            </div>
  
            <div class="mb-3">
              <label for="tanggal" class="form-label">Tanggal Reservasi</label>
              <input type="date" class="form-control" id="tanggal" name="tanggal" />
            </div>
  
            <div id="selectCategoryPaket" class="mb-3">
              <label for="paket" class="form-label" ">Paket</label>
              <select  class="form-select" id="kamar" name="kamar" onchange="showPaket(this)">
                <option value="1">Potraits</option>
                <option>-----------------</option>
                <option value="1">Potraits</option>
                <option value="2">Family</option>
                <option value="3">Paket 3</option>
                <option value="4">Custom</option>
              </select>
            </div>

            <div id="pilihPaket" class="mb-3 d-none">
              <label for="paket" class="form-label">Potrait</label>
              <select  class="form-select" name="kamar">
                <option value="">Pilih</option>
                <option disabled>-----------------</option>
                <option value="paketa">Paket A</option>
                <option value="paket2">Paket 3</option>
                <option value="custom">Custom</option>
              </select>
            </div>
            
  
            <!-- <div class="mb-3">
              <label for="jumlah" class="form-label">Jumlah Kamar</label>
              <input type="number" class="form-control" id="jumlah" name="jumlah" min="1" max="10" />
            </div> -->
  
            <button type="submit" class="btn btn-primary">Submit</button>
          </form>
        </div>
      </section>
    </main>

    <script type="text/javascript">
      function showPaket(answer) {
        console.log(answer.value);
      };
      // function showPaket(answer) {
      //   console.log(answer.value);
//           if (answer.value == 0) {
//             document.getElementById("pilihPaket").classList.remove("d-none");
//         } else {
//             document.getElementById("pilihPaket").classList.add("d-none");
//     }
// }
    </script>
    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </body>
</html>