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
        <link href="faq.css" rel="stylesheet">

      
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
            color: #955BA5;
            text-decoration: none;
         }
        
         a:hover {
            color: #a678b3;
            text-decoration: none;
         }
         
         h1, h2, h3, h4, h5, h6, .font-primary {
            font-family: "Raleway", sans-serif;
 
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
                <li class="dropdown"><a href="profil.php"><span>Profil</span> <i class="bi bi-chevron-down"></i></a>
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
                <li><a href="portfolio.php">Portofolio</a></li>
                <li><a href="form.php">Pemesanan</a></li>
                <li><a class="nav-link scrollto active" href="#">F.A.Q</a></li>
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
      
        <!-- ======= FAQ Section ======= -->
        <section id="hero" class="d-flex align-items-center">
      
          <div class="container">
            <div class="row gy-4">
              <div class="col-lg-6 order-2 order-lg-1 d-flex flex-column justify-content-center">
                <h1>F.A.Q</h1>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 hero-img">
                <img src="assets/img/pisces-01-01.png" class="img-fluid animated" alt="">
              </div>
            </div>
          </div>
      
        </section><!-- End Hero -->
      
        <main id="main">
     
      
      <section id="portfolio" class="portfolio">
          <div class="section-title">
            <p>Frequently Asked Questions</p>
          </div>
      
        <section class="main-content">
		<div class="container">

			<div class="row">
				<div class="col-sm-6">
					<img src="assets/img/portfolio/faq2.png" alt="FAQ" class="img-fluid">
				</div>
				<div class="col-sm-6">
					<div id="accordion">
						
                        <div class="accordion-card">
							<div class="accordion-card__header" id="headingOne" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
								<h5 class="mb-0">
									<span>Apakah bisa memesan desain selain yang tertera pada katalog?</span>
								</h5>
								<i class="fa fa-caret-down drop-icon"></i>
							</div>					  
							<div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
								<div class="accordion-card__body">
								Boleh banget, semua jenis desain boleh di diskusikan terlebih dahulu dengan admin.
								</div>
							</div>
						</div>
						
                        <div class="accordion-card">
							<div class="accordion-card__header collapsed" id="headingTwo" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
								<h5 class="mb-0">
									<span>Apakah ada batas revisi desain?</span>
								</h5>
								<i class="fa fa-caret-down drop-icon"></i>
							</div>
							<div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
								<div class="accordion-card__body">
								Kami memberikan free revisi <b> 1 kali </b> untuk setiap desainnya. Jika ingin revisi kembali dikenakan charge <b>10k/revisi</b>.
								</div>
							</div>
						</div>
						
                        <div class="accordion-card">
							<div class="accordion-card__header collapsed" id="headingThree" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
								<h5 class="mb-0">
									<span>Apakah saya boleh memesan langsung di lokasi Pisces Idea?</span>
								</h5>
								<i class="fa fa-caret-down drop-icon"></i>
							</div>
							<div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
								<div class="accordion-card__body">
								Untuk saat ini kami hanya melayani pemesanan melalui <b>online</b>. Namun, jika ingin mengunjungi lokasi kami silahkan menghubungi admin kami <b>H-1</b> sebelum anda datang berkunjung.
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

        </div>
      </section>
  <!-- End FAQ Section -->
  
   
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
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <script src="js/script.js"></script>
  
</body>

</html>