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
        <link href="boot.css" rel="stylesheet">
      
         <!-- slider -->
       <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
       <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
       <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
       <!------ Include the above in your HEAD tag ---------->
       
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
       <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      
      </head>
      <style>
        body {
        font-family: "Open Sans", sans-serif;
        color: #000000;
      }
      
      a {
        color: blue;
        text-decoration: none;
      }
      
      a:hover {
        color: #a678b3;
        text-decoration: none;
      }
      
      h1, h2, h3, h4, h5, h6, .font-primary {
        font-family: Verdana, Geneva, Tahoma, sans-serif;
      }
      </style>
      
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
                <li class="dropdown"><a class="nav-link scrollto active" href="profil.php"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="#">Deskripsi Usaha</a></li>
                    <li><a href="#">Anggota & Struktur Usaha</a></li>
                    <li><a href="#">Aktivitas</a></li>
                  </ul>
                <li class="dropdown"><a href="layanan.php"><span>Layanan</span> <i class="bi bi-chevron-down"></i></a>
                  <ul>
                    <li><a href="layanan.php">Produk</a></li>
                    <li><a href="layanan.php">Paket Layanan</a></li>
                  </ul>
                <li><a  href="portfolio.php">Portofolio</a></li>
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
                <h1>Profil Usaha</h1>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="assets/img/pisces-01-01.png" class="img-fluid animated" alt="">
              </div>
            </div>
          </div>
      
        </section><!-- End Hero -->
      
        <main id="main">
      
        <!-- ======= About Section ======= -->
        <section id="about" class="about">
      
          <div class="container" data-aos="fade-up">
      
            <div class="section-title">
              <p style="font-size: 33px;">Deskripsi Usaha</p>
            </div>
              <div class="row">
               <p style="text-align: justify; font-size: 20px;"><b>Pisces Idea</b> merupakan usaha yang bergerak di bidang jasa desain, yang menyediakan atau menawarkan layanan berupa desain feeds instagram, microblogging, highlight, logo dan lain lain. Selain bergerak di bidang jasa, kami juga menyediakan dan menawarkan produk custom seperti cetak merchandise berupa tote bag dan binder yang akan dicetak sesuai keinginan pelanggan.</p>
          </div>
      
      </div>
      </section>
      <!-- End About Section -->
      
      <!-- Anggota & Struktur Usaha Section -->
      <section id="services" class="services section-bg">
          <div class="container" data-aos="fade-up">
      
            <div class="section-title">
              <p>Anggota & Struktur Usaha</p>
            </div>
      
              <img src="assets/img/OUR TEAM-01.png" class="img-fluid">
      
                        
            </div>
      </section>
      <!--  End Anggota & Struktur Usaha Section -->
  
      <!-- Aktivitas Section-->
      <section id="portfolio" class="portfolio">
          <div class="section-title">
            <p>Aktivitas</p>
          </div>
      
            <div class="row">
                <div class="col-md-12">
                    <div id="news-slider10" class="owl-carousel">
                        <div class="post-slide10">
                            <img class="pic-1" src="assets/img/portfolio/a1.jpg">
                            <div class="post-date">
                                <span class="month">Nov</span>
                                <span class="date">4</span>
                            </div>
                            <h3 class="post-title">
                                <a href="#">Entrepreneurship Expo & Job Fair 2021</a>
                            </h3>
                            <p class="post-description">
                              Foto bersama member Pisces Idea disela-sela kegiatan Entrepreneurship Expo & Job yang dilaksanakan oleh UPT Kewirausahaan Politeknik Negeri Ujung Pandang
                            </p>
                        </div>
         
                        <div class="post-slide10">
                            <img class="pic-1" src="assets/img/portfolio/a4.jpg">
                            <div class="post-date">
                                <span class="month">Nov</span>
                                <span class="date">4</span>
                            </div>
                            <h3 class="post-title">
                                <a href="#">Entrepreneurship Expo & Job Fair 2021</a>
                            </h3>
                            <p class="post-description">
                              Foto bersama member Pisces Idea dan bapak Hasdaryatmin Djufri, S.T., M.T sebagai Kepala UPT Kewirausahaan Politeknik Negeri Ujung Pandang saat mengunjungi di tenant Pisces Idea
                            </p>
                        </div>
                        
                        <div class="post-slide10">
                            <img class="pic-1" src="assets/img/portfolio/a3.jpg">
                            <div class="post-date">
                                <span class="month">Nov</span>
                                <span class="date">4</span>
                            </div>
                            <h3 class="post-title">
                                <a href="#">Entrepreneurship Expo & Job Fair 2021</a>
                            </h3>
                            <p class="post-description">
                              Potret Direktur Politeknik Negeri Ujung Pandang, bapak Prof. Muhammad Anshar saat mengunjungi tenant Pisces Idea sekaligus memberikan saran serta motivasi untuk perkembangan Pisces Idea
                            </p>
                        </div>
                        
                        <div class="post-slide10">
                            <img class="pic-1" src="assets/img/portfolio/a2.jpg">
                            <div class="post-date">
                                <span class="month">Nov</span>
                                <span class="date">4</span>
                            </div>
                            <h3 class="post-title">
                                <a href="#">Entrepreneurship Expo & Job Fair 2021</a>
                            </h3>
                            <p class="post-description">
                              Foto bersama member Pisces Idea disela-sela kegiatan Entrepreneurship Expo & Job yang dilaksanakan oleh UPT Kewirausahaan Politeknik Negeri Ujung Pandang
                            </p>
                        </div>
                        
                        <div class="post-slide10">
                            <img class="pic-1" src="assets/img/portfolio/a5.2.jpg">
                            <div class="post-date">
                                <span class="month">Nov</span>
                                <span class="date">3</span>
                            </div>
                            <h3 class="post-title">
                                <a href="#">Persiapan Entrepreneurship Expo & Job Fair 2021</a>
                            </h3>
                            <p class="post-description">
                              Potret kebersamaan member Pisces Idea saat melakukan persiapan kebutuhan dan perlengkapan Entrepreneurship Expo and Job Fair Politeknik Negeri Ujung Pandang yang akan dilaksanakan keesokan harinya
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        </div>
      </section>
      <!--  End Aktivitas Section -->
  
   
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
              <li><i class="bx bx-chevron-right"></i> <a href="#about">Deskripsi Usaha</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Anggota & Struktur Usaha</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#portfolio">Aktivitas</a></li>
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