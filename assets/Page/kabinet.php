<?php
session_start();
include "../proses/koneksi_db.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Kabinet HIMARPL</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="../img/favicon.png" rel="icon">
  <link href="../img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="../vendor/aos/aos.css" rel="stylesheet">
  <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="../css/kabinet.css" rel="stylesheet">

  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a class="logo me-auto" href="#"><img src="../Image/HimaLogo.png" alt="logo"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="../img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
            <li><a class="nav-link scrollto" href="../../index.php">Home</a></li>
            <li><a class="nav-link scrollto" href="Informasi.php">Informasi</a></li>
            <li><a class="nav-link scrollto active" >Kabinet</a></li>
            <li><a class="nav-link scrollto" href="Peminjaman.php">Peminjaman</a></li>
            <li><a class="nav-link scrollto " href="Pemilu.php">Pemilu</a></li>
            <li><a class="nav-link scrollto " href="About.php">About</a></li>

          <?php
          if (isset($_SESSION['session'])) {
              if($_SESSION["session_admin"]== true){
                echo '<li><a class="getstarted scrollto" id="login" href="tabel\dashboard.php">Admin</a></li>';
              }else{
              echo '<li><a class="getstarted scrollto" id="login" href="Profile.php">Profile</a></li>';
              }
          }  
            else {
                // Tidak ada session login aktif, tampilkan tombol login
                echo '<li><a class="getstarted scrollto" id="login" href="Login.php">Get Started</a></li>';
            }
          ?>
          
          
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
     <section id="why-us" class="why-us section-bg">
      <div class="container first" data-aos="fade-up">

        <div class="row">

        <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center img order-2 order-lg-1">
            <img src="../Image/explora.png">
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-1 order-lg-2 ">

            <div class="content">
              <h3>Kabinet <strong>EXPLORA</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Makna dan Definisi Explora <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Mewujudkan dan mengoptimalkan HIMA RPL yang kompetitif
                      unggul dan kreatif dengan menjunjung tinggi budaya kekeluargaan yang demokratis
                      Menjaga Hak Seluruh Mahasiswa RPL
                      Menjaga Hak Mahasiswa RPL
                      Menjaga Hak Mahasiswa RPL.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Misi HIMA Rekayasa Perangkat Lunak <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Tujuan HIMA Rekayasa Perangkat Lunak <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <section id="why-us" class="why-us section-bg2">
      <div class="container second" data-aos="fade-up">

        <div class="row">

        <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center img order-2 order-lg-2">
            <img src="../Image/explora.png">
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-1 order-lg-1 ">

            <div class="content">
              <h3>Kabinet <strong>EXPLORA</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Makna dan Definisi Explora <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Mewujudkan dan mengoptimalkan HIMA RPL yang kompetitif
                      unggul dan kreatif dengan menjunjung tinggi budaya kekeluargaan yang demokratis
                      Menjaga Hak Seluruh Mahasiswa RPL
                      Menjaga Hak Mahasiswa RPL
                      Menjaga Hak Mahasiswa RPL.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Misi HIMA Rekayasa Perangkat Lunak <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Tujuan HIMA Rekayasa Perangkat Lunak <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <section id="why-us" class="why-us section-bg">
      <div class="container second" data-aos="fade-up">

        <div class="row">

        <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center img order-2 order-lg-1">
            <img src="../Image/explora.png">
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-1 order-lg-2 ">

            <div class="content">
              <h3>Kabinet <strong>EXPLORA</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Makna dan Definisi Explora <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Mewujudkan dan mengoptimalkan HIMA RPL yang kompetitif
                      unggul dan kreatif dengan menjunjung tinggi budaya kekeluargaan yang demokratis
                      Menjaga Hak Seluruh Mahasiswa RPL
                      Menjaga Hak Mahasiswa RPL
                      Menjaga Hak Mahasiswa RPL.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Misi HIMA Rekayasa Perangkat Lunak <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Tujuan HIMA Rekayasa Perangkat Lunak <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <section id="why-us" class="why-us section-bg2">
      <div class="container second" data-aos="fade-up">

        <div class="row">

        <div class="col-lg-5 d-flex flex-column justify-content-center align-items-center img order-2 order-lg-2">
            <img src="../Image/explora.png">
          </div>

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-1 order-lg-1 ">

            <div class="content">
              <h3>Kabinet <strong>EXPLORA</strong></h3>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Makna dan Definisi Explora <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                    <p>
                      Mewujudkan dan mengoptimalkan HIMA RPL yang kompetitif
                      unggul dan kreatif dengan menjunjung tinggi budaya kekeluargaan yang demokratis
                      Menjaga Hak Seluruh Mahasiswa RPL
                      Menjaga Hak Mahasiswa RPL
                      Menjaga Hak Mahasiswa RPL.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Misi HIMA Rekayasa Perangkat Lunak <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
                    </p>
                  </div>
                </li>

                <li>
                  <a data-bs-toggle="collapse" data-bs-target="#accordion-list-3" class="collapsed"><span>03</span> Tujuan HIMA Rekayasa Perangkat Lunak <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                  <div id="accordion-list-3" class="collapse" data-bs-parent=".accordion-list">
                    <p>
                      Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
                    </p>
                  </div>
                </li>

              </ul>
            </div>

          </div>

          
        </div>

      </div>
    </section><!-- End Why Us Section -->

   <!-- ======= Footer ======= -->
<footer style="padding:0;" id="footer">

<div class="footer-newsletter">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-6">
        <h4>Follow Us</h4>
        <p>Dapatkan Berbagai Info Terupdate tentang HIMA RPL</p>
      </div>
    </div>
  </div>
</div>

<div class="footer-top">
  <div class="container">
    <div class="row">

      <div class="col-lg-3 col-md-6 footer-contact">
        <h3>HIMARPL</h3>
        <p>
          Jl. Pendidikan No.15, Cibiru Wetan<br>
          Kec. Cileunyi, Kabupaten Bandung<br>
          Jawa Barat 40625 <br><br>
          <strong>Phone:</strong> +62 851 5663 8465<br>
          <strong>Email:</strong> himarpl@gmail.com<br>
        </p>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Useful Links</h4>
        <ul>
          <li><i class="bx bx-chevron-right active"></i> <a href="#">Home</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="assets/Page/Informasi.php">Informasi</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="assets/Page/Kabinet.php">Kabinet</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="assets/Page/About.php">About</a></li>
          <li><i class="bx bx-chevron-right"></i> <a href="assets/Page/Pemilu.php">Pemilu</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Services</h4>
        <ul>
          <li><i class="bx bx-chevron-right"></i> <a >Advokasi</a></li>
          <li><i class="bx bx-chevron-right"></i> <a >Bantuan</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-6 footer-links">
        <h4>Our Social Networks</h4>
        <p>Follow Berbagai Informasi Lainnya di Platform Lainnya</p>
        <div class="social-links mt-3">
          <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
          <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
          <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
          <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>

    </div>
  </div>
</div>
</footer>
<!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="../vendor/aos/aos.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="../js/main.js"></script>
  

</body>

</html>