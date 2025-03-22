
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Halaman Utama</title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <link href="{{asset('template/img/favicon.png')}}" rel="icon">
  <link href="{{asset('template/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Raleway:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('template/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('templat/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('template/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="{{asset('template/css/main.css')}}" rel="stylesheet">q
</head>

<body class="index-page">

    <style>
        .navmenu ul li a {
            color: black !important; /* Ubah warna teks navbar menjadi hitam */
            font-weight: 600;
            transition: color 0.3s ease-in-out;
        }

        .navmenu ul li a:hover {
            color: #555 !important; /* Warna lebih gelap saat hover */
        }
    </style>

    <header id="header" class="header d-flex align-items-center fixed-top bg-white shadow">
        <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="{{asset('template/img/iconbsi.png')}}" alt="">
            </a>
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="#hero" class="active">Produk dan Layanan</a></li>
                    <li><a href="#about">Prioritas</a></li>
                    <li><a href="#services">Berita & Pembaruan</a></li>
                    <li><a href="#portfolio">Informasi Perusahaan</a></li>
                    <li><a href="#team">Hubungan Investor</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
        </div>
    </header>

    <br>
    <br>
    <br>

    <main class="main">
        <section id="hero" class="d-flex align-items-center"
            style="background: url('template/img/bgbsi.jpg') center/cover no-repeat;
                   height: 80vh; padding-top: 100px;">
            <div id="hero-carousel" class="container carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

                        <a class="carousel-control-prev rounded-circle d-flex align-items-center justify-content-center"
        href="#hero-carousel" role="button" data-bs-slide="prev" style="width: 50px; height: 50px; background-color: rgba(0, 0, 0, 0.5);">
            <span class="carousel-control-prev-icon bi bi-chevron-left text-white"></span>
        </a>

        <a class="carousel-control-next rounded-circle d-flex align-items-center justify-content-center"
        href="#hero-carousel" role="button" data-bs-slide="next" style="width: 50px; height: 50px; background-color: rgba(0, 0, 0, 0.5);">
            <span class="carousel-control-next-icon bi bi-chevron-right text-white"></span>
        </a>

            </div>
        </section>
    </main>



    <!-- About Section -->
    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title text-center" data-aos="fade-up">
        <h3>Assalamu'alaikum Warahmatullahi Wabarakatuh</h3>
        <p>Jadikan pengalaman Kamu lebih baik hari ini</p>
    </div>
    <!-- End Section Title -->

      <div class="container">

        <div class="row gy-4">

          <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
            <p>
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <ul>
              <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo consequat.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Duis aute irure dolor in reprehenderit in voluptate velit.</span></li>
              <li><i class="bi bi-check2-circle"></i> <span>Ullamco laboris nisi ut aliquip ex ea commodo</span></li>
            </ul>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
            <a href="#" class="read-more"><span>Read More</span><i class="bi bi-arrow-right"></i></a>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->
    <footer id="footer" class="footer bg-black text-white py-4 text-center">


        <div class="copyright">
          <span>Copyright</span> <strong class="px-1 sitename">Aliftourista</strong> <span>All Rights Reserved</span>
        </div>
    </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{asset('template/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('template/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('template/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('template/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('template/vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{asset('template/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('template/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{asset('template/js/main.js')}}"></script>

</body>

</html>
