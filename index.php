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

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <h1 class="text-light"><a href="index.php"><span>Pisces Idea</span></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Beranda</a></li>
          <li class="dropdown"><a href="profil.php"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="profil.php">Deskripsi Usaha</a></li>
              <li><a href="profil.php">Anggota & Struktur Usaha</a></li>
              <li><a href="profil.php">Aktivitas</a></li>
            </ul>
          <li class="dropdown"><a href="layanan.php"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="layanan.php">Produk</a></li>
              <li><a href="layanan.php">Paket Layanan</a></li>
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
          <h1>Hello!</h1>
          <h2>Pisces Idea menawarkan jasa desain sosial media maupun produk dengan harga yang terjangkau</h2>
          <div>
            <a href="#about" class="btn-get-started scrollto">Selengkapnya</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/img/pisces-01-01.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Alasan memilih kami Section ======= -->
    <section id="about" class="about">

        <div class="container" data-aos="fade-up">

          <div class="section-title">
            <p style="font-size: 33px;">Alasan Memilih Kami</p>
          </div>
            <div class="row">
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-checkbox-checked"></i>
                <h4>Kualitas Terjamin</h4>
                <p></p>
              </div>
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-money"></i>
                <h4>Harga Terjangkau</h4>
                <p></p>
              </div>
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="300">
                <i class="bx bx-mail-send"></i>
                <h4>Pelayanan Cepat</h4>
                <p></p>
              </div>
              <div class="col-md-3" data-aos="fade-up" data-aos-delay="400">
                <i class="bx bx-user-check"></i>
                <h4>Desainer Berpengalaman</h4>
                <p></p>
              </div>

            </div>
          </div>
        </div>

      </div>
    </section><!-- End Alasan memilih kami Section -->

    <!-- ======= Layanan Kami Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Layanan Kami</p>
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
    <!-- End Layanan kami Section -->

    <!-- ======= Harga kami Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <p>Harga</p>
        </div>

        <div class="row" data-aos="fade-up" data-aos-delay="100">
          <div class="col-lg-12">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Desain Media Promosi</li>
              <li data-filter=".filter-card">Product</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/FEEDS MOCKUP-01.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/FEEDS MOCKUP-01.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="START FROM Rp.90.000-Rp.170.000"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>LOGO/BRANDING LOGO</h4>
                <p>Rp.90.000/Rp.170.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/FEEDS MOCKUP-05.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/FEEDS MOCKUP-05.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="START FROM Rp.27.000-Rp.100.000"><i class="bi bi-plus"></i></a>
              </div>
              <div class="portfolio-info">
                <h4>POSTER</h4>
                <p>Rp.27.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/FEEDS MOCKUP-03.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/FEEDS MOCKUP-03.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="START FROM Rp.9.000-Rp.50.000"><i class="bi bi-plus"></i></a>
              
              </div>
              <div class="portfolio-info">
                <h4>INSTAGRAM HIGHLIGHT</h4>
                <p>Rp.9.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/FEEDS MOCKUP-04.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/FEEDS MOCKUP-04.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="START FROM Rp.27.000-Rp.150.000"><i class="bi bi-plus"></i></a>
            
              </div>
              <div class="portfolio-info">
                <h4>INSTAGRAM FEEDS</h4>
                <p>Rp.27.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/MERCHAND-05.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/MERCHAND-05.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="START FROM Rp.50.000-Rp.75.000"><i class="bi bi-plus"></i></a>
            
              </div>
              <div class="portfolio-info">
                <h4>BINDER/TOTEBAG</h4>
                <p>Rp.50.000/Rp.60.000</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <div class="portfolio-wrap">
              <img src="assets/img/portfolio/FEEDS MOCKUP-06.jpg" class="img-fluid" alt="">
              <div class="portfolio-links">
                <a href="assets/img/portfolio/FEEDS MOCKUP-06.jpg" data-gallery="portfolioGallery" class="portfolio-lightbox" title="START FROM Rp.100.000-Rp.200.000"><i class="bi bi-plus"></i></a>
     
              </div>
              <div class="portfolio-info">
                <h4>MICROBLOG</h4>
                <p>Rp.100.000</p>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Harga kami Section -->

      <!-- ======= Our System Section ======= -->
      <section id="services" class="services section-bg">
        <div class="container" data-aos="fade-up">
  
          <div class="section-title">
            <p>Our System</p>
            <img src="assets/img/portfolio/system.png" class="img-fluid">
          </div>
  
        </div>
      </section><!-- End Our System Section -->
  
   
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
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Logo</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Feeds Instagram</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Poster</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Microblog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Highlight Instagram</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Merchandise</a></li>
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

</body>

</html>