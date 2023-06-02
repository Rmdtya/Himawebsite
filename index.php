<?php
session_start();
include "assets/proses/koneksi_db.php";


if (isset($_POST["subs"])) {
  $email_subs = $_POST["email_subs"];

  // Mengecek apakah email sudah tersedia dalam tabel
  $checkQuery = "SELECT * FROM tbl_subscribe WHERE email='$email_subs'";
  $result = $koneksi->query($checkQuery);

  if ($result->num_rows > 0) {
      // Jika email sudah tersedia dalam tabel
  } else {
      // Jika email belum tersedia dalam tabel, lakukan operasi INSERT
      $insertQuery = "INSERT INTO tbl_subscribe (email) VALUES ('$email_subs')";

      if ($koneksi->query($insertQuery) === TRUE) {
          // Jika operasi INSERT berhasil
      } else {
          // Jika terjadi kesalahan dalam operasi INSERT
          echo "Error: " . $insertQuery . "<br>" . $koneksi->error;
      }
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ninestars Bootstrap Template - Index</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  
  

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">

  <script src="//code.jquery.com/jquery-1.9.1.js"></script>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a class="logo me-auto" href="#"><img src="assets/Image/HimaLogo.png" alt="logo"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="assets/Page/informasi.php">Informasi</a></li>
          <li><a class="nav-link scrollto" href="assets/Page/kabinet.php">Kabinet</a></li>
          <li><a class="nav-link scrollto" href="assets/Page/peminjaman.php">Peminjaman</a></li>
          <li><a class="nav-link scrollto" href="assets/Page/pemilu.php">Pemilu</a></li>
          <li><a class="nav-link scrollto " href="assets/Page/About.php">About</a></li>

          <?php
          if (isset($_SESSION['session'])) {
              if($_SESSION["session_admin"]== true){
                echo '<li><a class="getstarted scrollto" id="login" href="assets\Page\tabel\dashboard.php">Admin</a></li>';
              }else{
              echo '<li><a class="getstarted scrollto" id="login" href="assets/page/Profile.php">Profile</a></li>';
              }
          }  
            else {
                // Tidak ada session login aktif, tampilkan tombol login
                echo '<li><a class="getstarted scrollto" id="login" href="assets/page/Login.php">Get Started</a></li>';
            }
          ?>
          
          
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
          <h1>HIMA</h1>
          <h1>Rekayasa Perangkat Lunak</h1>
          <h2>Hello World, </h2>
          <P>Membangun kampus yang merdeka dan menjamin hak dan kebebasan seluruh Mahasiswa. 
            Mewadahi semua kegiatan mahasiswa dan mendukung penuh potensi diri masing-masing mahasiswa</P>

          <div class="media-social">
            <a href="#"><i class='bx bxl-facebook'></i></a>
            <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
            <a href="#"><i class='bx bxl-tiktok' ></i></a>
        </div>
          <div>
            <a href="#footer" class="btn-get-started scrollto primary">Get Started</a>
            <a href="#about" class="btn-get-started scrollto secondary"> Let's Join </a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img">
          <img src="assets/Image/HomeLogos.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Services</h2>
          <p>Temukan Informasi Tentang Seputar</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">PDKT Dengan HIMA RPL</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Temukan Informasi Sesuai Career Anda</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Tentukan Masa Depan HIMA RPL</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="400">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Pilih Kandidat Ketua HIMA</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


     <!-- ======= Why Us Section ======= -->
     <section id="why-us" class="why-us section-bg">
      <div class="container-fluid" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-7 d-flex flex-column justify-content-center align-items-stretch  order-2 order-lg-1">

            <div class="content">
              <h3>Visi dan Misi <strong>HIMA Rekayasa Perangkat Lunak</strong></h3>
              <p>
                Mewujudkan Cita - Cita Mahasiswa Rekayasa Perangkat Lunak. Mewadahi Seluruh Aspirasi, Minat dan Bakat Mahasiswa RPL.
              </p>
            </div>

            <div class="accordion-list">
              <ul>
                <li>
                  <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Visi HIMA Rekayasa Perangkat Lunak <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
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

          <div class="col-lg-5 align-items-stretch order-1 order-lg-2 img" style='background-image: url("assets/img/why-us.png");' data-aos="zoom-in" data-aos-delay="150">&nbsp;</div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Team Section ======= -->
    <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Demisioner</h2>
          <p>Ketua HIMA Rekayasa Perangkat</p>
        </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
              <img src="assets\Image\rama_01.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Rayhan</h4>
                  <span>Kabinet Inisiator</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="member">
              <img src="assets\Image\rafid_01.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Muhammad Reynaldi</h4>
                  <span>Kabinet Inspira</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="member">
              <img src="assets\Image\faiz_01.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Ali Aziz Fadilah</h4>
                  <span>Kabinet Explora</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="member">
              <img src="assets\Image\cherry_01.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4>Calzy Akmal</h4>
                  <span>Kabinet Manifest</span>
                </div>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Team Section -->


  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Follow Us</h4>
            <p>Dapatkan Berbagai Info Terupdate tentang HIMA RPL</p>
            <form action=" " method="POST" id="form_subs">
              <input id="subscribe" type="email" name="email_subs" id="email_subs">
              <input type="submit" value="submit" onclick="return clickButton();" name="subs" id="submit_subs">
            </form>
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