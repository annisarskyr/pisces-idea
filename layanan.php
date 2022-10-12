<?php

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PISCES IDEA</title>

  <!-- Favicons -->
  <link href="assets/img/faviconpisces-01.png" rel="icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <link href="assets/css/style.css" rel="stylesheet">
  <link href="layanan.css" rel="stylesheet">


</head>


<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.html"><span>Pisces Idea</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Beranda</a></li>
          <li class="dropdown"><a href="profil.php"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Deskripsi Usaha</a></li>
              <li><a href="#">Anggota & Struktur Usaha</a></li>
              <li><a href="#">Aktivitas</a></li>
            </ul>
          <li class="dropdown"><a class="nav-link scrollto active" href="#"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Produk</a></li>
              <li><a href="#">Paket Layanan</a></li>
            </ul>
          <li><a href="portfolio.php">Portofolio</a></li>
          <li><a href="form.php">Pemesanan</a></li>
          <li><a href="faq.php">F.A.Q</a></li>
          <?php if(isset($_SESSION['username'])) : ?>
                  <li><a href="logout.php"><i class="bx bxs-user"></i> Logout</a></li>
                <?php else : ?>
                  <li><a href="login.php"><i class="bx bxs-user"></i> Login</a></li>
                <?php endif; ?>
              </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
          <h1>Layanan Kami</h1>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/pisces-01-01.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Produk Kami Section ======= -->
    <section id="services" class="services section-bg">
    <div class="container" data-aos="fade-up">
      
        <div class="section-title">
          <p>Produk Kami</p>
        </div>

        <div class="row">
          <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-copyright"></i></div>
              <h4 class="title"><a href="">Logo</a></h4>
              <p class="description">Layanan logo UKM dibuat untuk memudahkan pengusaha UKM dalam meningkatkan kualitas visual branding bisnisnya.</p>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-instagram"></i></div>
              <h4 class="title"><a href="">Feeds Instagram</a></h4>
              <p class="description">Jadikan Instagram Feeds Anda sebagai katalog atau etalase produk jualan Anda lebih estetik sehingga menarik konsumen untuk belanja di toko online Anda.</p>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-image-alt"></i></div>
              <h4 class="title"><a href="">Poster</a></h4>
              <p class="description">Poster menjadi salah satu media promosi atau iklan yang sering digunakan hingga saat ini. Poster harus mampu menarik perhatian audiens dalam waktu singkat lewat desain dan pesan yang menarik. </p>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-images"></i></div>
              <h4 class="title"><a href="">Microblog</a></h4>
              <p class="description">Microblog juga bisa digunakan sebagai media untuk mempromosikan produk ataupun membuat konten kreatif</p>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tone"></i></div>
              <h4 class="title"><a href="">Highlight Instagram  </a></h4>
              <p class="description">Highlight sangat membantu untuk mengelola & mengkategorikan arsip story produk</p>
            </div>
          </div>

          <div class="col-lg-4 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-shopping-bag"></i></div>
              <h4 class="title"><a href="">Merchandise</a></h4>
              <p class="description">Merchandise yang memiliki desain sesuai keinginanmu dengan harga terjangkau</p>
            </div>
          </div>

        </div>

      </div>
    </section>
    <!-- End Produk Kami Section -->

  <!-- Paket Section -->
 <section id="about" class="about">
 <div class="container" data-aos="fade-up">
        
      <div class="section-title">
        <p style="font-size: 33px;">Paket Layanan</p>
      </div>

        <div class="pricing pricing-palden">
            <div class="pricing-item">
                <div class="pricing-deco">
                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
                        <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                                            <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                    </svg>
                    <div class="pricing-price"><span class="pricing-currency">Rp</span>212K+
                        <!-- <span class="pricing-period">/ mo</span> -->
                    </div>
                    <h3 class="pricing-title">PAKET SAGITTARIUS</h3>
                </div>
                <ul class="pricing-feature-list">
                    <li class="pricing-feature">3 DESAIN CAMPUR (STORY + FEEDS INSTAGRAM)</li>
                    <li class="pricing-feature">4 SLIDE MICROBLOG</li>
                    <li class="pricing-feature">4 INSTAGRAM HIGHLIGHT</li>
                </ul>
                <br>
                <br>
                <a href="http://wa.me/628875080664"><button class="pricing-action">Pilih Paket</button></a>
            </div>


            <div class="pricing-item pricing__item--featured">
                <div class="pricing-deco">
                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
                        <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                                            <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                    </svg>
                    <div class="pricing-price"><span class="pricing-currency">Rp</span>440K+
                    </div>
                    <h3 class="pricing-title">PAKET CAPRICORN</h3>
                </div>
                <ul class="pricing-feature-list">
                    <li class="pricing-feature">6 DESAIN CAMPUR (STORY + FEEDS INSTAGRAM)</li>
                    <li class="pricing-feature">6 SLIDE MICROBLOG</li>
                    <li class="pricing-feature">HANYA LOGO</li>
                    <li class="pricing-feature">4 INSTAGRAM HIGHLIGHT</li>
                </ul>
                <a href="http://wa.me/628875080664"><button class="pricing-action">Pilih Paket</button></a>
            </div>
            
            <div class="pricing-item">
                <div class="pricing-deco">
                    <svg class="pricing-deco-img" enable-background="new 0 0 300 100" height="100px" id="Layer_1" preserveAspectRatio="none" version="1.1" viewBox="0 0 300 100" width="300px" x="0px" xml:space="preserve" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns="http://www.w3.org/2000/svg" y="0px">
                        <path class="deco-layer deco-layer--1" d="M30.913,43.944c0,0,42.911-34.464,87.51-14.191c77.31,35.14,113.304-1.952,146.638-4.729
                        c48.654-4.056,69.94,16.218,69.94,16.218v54.396H30.913V43.944z" fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--2" d="M-35.667,44.628c0,0,42.91-34.463,87.51-14.191c77.31,35.141,113.304-1.952,146.639-4.729
                        c48.653-4.055,69.939,16.218,69.939,16.218v54.396H-35.667V44.628z" fill="#FFFFFF" opacity="0.6"></path>
                                            <path class="deco-layer deco-layer--3" d="M43.415,98.342c0,0,48.283-68.927,109.133-68.927c65.886,0,97.983,67.914,97.983,67.914v3.716
                        H42.401L43.415,98.342z" fill="#FFFFFF" opacity="0.7"></path>
                                            <path class="deco-layer deco-layer--4" d="M-34.667,62.998c0,0,56-45.667,120.316-27.839C167.484,57.842,197,41.332,232.286,30.428
                        c53.07-16.399,104.047,36.903,104.047,36.903l1.333,36.667l-372-2.954L-34.667,62.998z" fill="#FFFFFF"></path>
                    </svg>
                    <div class="pricing-price"><span class="pricing-currency">Rp</span>666K+
                    </div>
                    <h3 class="pricing-title">PAKET AQUARIUS</h3>
                </div>
                <ul class="pricing-feature-list">
                    <li class="pricing-feature">9 DESAIN CAMPUR (STORY + FEEDS INSTAGRAM)</li>
                    <li class="pricing-feature">8 SLIDE MICROBLOG</li>
                    <li class="pricing-feature">BRANDING LOGO</li>
                    <li class="pricing-feature">4 INSTAGRAM HIGHLIGHT</li>
                </ul>
                <a href="http://wa.me/628875080664"><button class="pricing-action">Pilih Paket</button></a>
            </div>
        </div>
</section>
<!-- End Produk Kami Section -->

 <!-- ======= Footer ======= -->
 <footer id="footer">

  <div class="footer-top">
    <div class="container">
      <div class="row">

        <div class="col-lg-3 col-md-6 footer-contact">
          <h3>Pisces Idea</h3>
          <p> Adalah penyedia jasa desain grafis maupun produk dengan harga yang terjangkau. 
           
          </p>
        </div>

        <div class="col-lg-3 col-md-6 footer-links">
          <h4>Tentang Kami</h4>
          <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="profil.php">Deskripsi Usaha</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="profil.php">Anggota & Struktur Usaha</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="profil.php">Aktivitas</a></li>
        </div>
        <div class="col-lg-3 col-md-6 footer-links">
            <h4>Layanan Kami</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#portfolio">Logo</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#portfolio">Feeds Instagram</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#portfolio">Poster</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#portfolio">Microblog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#portfolio">Highlight Instagram</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php#portfolio">Merchandise</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
                <h4>Hubungi Kami</h4>
              <strong>Phone:</strong> +62 887-5080-664 <br>
              <strong>Email:</strong> admin@pisces.id<br></p>
            <div class="social-links mt-3">
              <a href="http://wa.me/628875080664" class="whatsapp"><i class="bx bxl-whatsapp"></i></a>
              <a href="http://instagram.com/piscees.id" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://pisces-idea.business.site/?utm_source=gmb&utm_medium=referral" class="web"><i class="bx bx-world"></i></a>
            </div>
            <br>
            <h4>Lokasi Kami</h4>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3973.5415532400098!2d119.47415721412794!3d-5.177175653701639!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbee37a95a97ecb%3A0x701996781a5645b1!2sPisces%20Idea!5e0!3m2!1sid!2sid!4v1665560715812!5m2!1sid!2sid" width="300" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </div>

      </div>
    </div>
  </div>

  <div class="container py-4">
    <div class="copyright">
      &copy; Copyright <strong><span>Pisces Idea</span></strong>. All Rights Reserved
    </div>
    <div class="credits">
    </div>
  </div>
</footer><!-- End Footer -->

<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="assets/vendor/aos/aos.js"></script>
 <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
 <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>

 <!-- Template Main JS File -->
 <script src="assets/js/main.js"></script>
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

</body>
</html>