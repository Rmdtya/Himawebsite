<!-- <?php
session_start();
if(!isset($_SESSION["session"])){
	header("location:login.php");
}

include "../proses/koneksi_db.php";

?> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Ninestars Bootstrap Template - Index</title>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round"> 
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  

  <!-- Template Main CSS File -->
  <link href="../css/peminjaman.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a class="logo me-auto" href="#"><img src="../Image/HimaLogo.png" alt="logo"></a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../../index.php">Home</a></li>
          <li><a class="nav-link scrollto" href=" ">Informasi</a></li>
          <li><a class="nav-link scrollto" href=" ">Kabinet</a></li>
          <li><a class="nav-link scrollto active" href=" ">Peminjaman</a></li>
          <li><a class="nav-link scrollto " href=" ">Pemilu</a></li>
          <li class="dropdown"><a href="#"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
          <?php
              if (isset($_SESSION['session'])) {
                // Session login aktif, tampilkan tombol profile
                echo '<li><a class="getstarted scrollto" id="login" href="#about">Profile</a></li>';
            } else {
                // Tidak ada session login aktif, tampilkan tombol login
                echo '<li><a class="getstarted scrollto" id="login" href="assets/page/Login.php">Get Started</a></li>';
            }
          ?>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->
    </div>
  </header><!-- End Header -->

  <main id="main">

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="../Image/about-img.svg" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Inventory HIMA Rekayasa Perangkat Lunak</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Laman bagi mahasiswa UPI Cibiru yang memerlukan pinjaman barang dari inventory Himpunan Mahasiswa Rekayasa Perangkat Lunak untuk kepentingan akademik atau non-akademik
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class="bx bx-receipt"></i>
                <h4>Untuk Semua Mahasiswa</h4>
                <p>Barang diperuntukan bagi semua mahasiswa aktif Universitas Pendidikan Indonesia Kampus Daerah Cibiru</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class="bx bx-cube-alt"></i>
                <h4>Berbagai Jenis Barang</h4>
                <p>Menyediakan berbagai jenis barang penunjang kegiatan mahasiswa dalam kampus maupun luar kampus</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

     <!-- ======= Frequently Asked Questions Section ======= -->
     <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Privacy Policy</h2>
          <p>Syarat dan Ketentuan Peminajam</p>
        </div>

        <div class="faq-list">
          <ul>
            <li data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" class="collapse" data-bs-target="#faq-list-1">Syarat Peminjaman Barang<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-1" class="collapse show" data-bs-parent=".faq-list">
                <p>
                   Semua mahasiswa aktif UPI kampus Cibiru dan telah melakukan login dengan data yang valid.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-2" class="collapsed">Lama Peminjaman Barang<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-2" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Maksimal peminjaman barang selama 7 hari setelah barang di boking dan pengambilan barang maksimal 1 hari setelah pengajuan peminjaman.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="300">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-3" class="collapsed">Waktu dan Tempat Peminjaman<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-3" class="collapse" data-bs-parent=".faq-list">
                <p>
                   Peminjaman dan pengembalian barang dilakukan di ruang sekre HIMA RPL. Tidak melayani pengambilan dan pengembalian barang di hari weekend.
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="400">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-4" class="collapsed">Kerusakan dan Keterlambatan Pengembalian <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-4" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Harap melapor jika terjadi kerusakan pada barang. Kerusakan dan keterlambatan akan dikenakan biaya denda  
                </p>
              </div>
            </li>

            <li data-aos="fade-up" data-aos-delay="500">
              <i class="bx bx-help-circle icon-help"></i> <a data-bs-toggle="collapse" data-bs-target="#faq-list-5" class="collapsed">Perpanjangan Peminjaman Barang<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
              <div id="faq-list-5" class="collapse" data-bs-parent=".faq-list">
                <p>
                  Sistem antrian berlaku dan perpanjangan bisa dilakukan jika tidak ada antrian dan batas peminjaman belum melebihi 7 hari.  
                </p>
              </div>
            </li>

          </ul>
        </div>

      </div>
    </section><!-- End Frequently Asked Questions Section -->
    
    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Inventory</h2>
          <p>List Barang Yang Tersedia</div>

        <ul id="portfolio-flters" class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
          <li data-filter="*" class="filter-active">All</li>
          <li data-filter=".filter-app">Elektronik</li>
          <li data-filter=".filter-card">Alat-Alat</li>
          <li data-filter=".filter-web">Lain-Lain</li>
        </ul>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

        <?php

            $query = mysqli_query($koneksi, "SELECT * FROM tbl_inventory");
            while($data = mysqli_fetch_array($query)) { ?>

              <div class="col-lg-4 col-md-6 portfolio-item filter-<?php echo $data['filter']; ?>">
                <div class="portfolio-img"><img src="../Image/barang/<?php echo $data['image']; ?>" class="img-fluid" alt=""></div>
                <div class="portfolio-info">
                  <h4>
                      <?php echo $data['nama_barang']; ?>
                  </h4>
                  <p>
                      <?php echo $data['deskripsi']; ?>
                  </p>
                  <p hidden>
                      <?php echo $data['kode_barang']; ?>
                  </p>
                  <p> Sisa 
                      <?php echo " " . $data['stok']; ?>
                  </p>
                  <a href="../Image/barang/<?php echo $data['image'];?>" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $data['nama_barang']; ?>" ><i class="bx bx-plus"></i></a>
                  <a href="#" type="button" class="details-link pinjambtn" data-bs-toggle="modal" data-toggle="modal" title="More Details"><i data-toggle="tooltip" data-bs-toggle="tooltip" class="bx bx-link"></i></a>
                </div>
              </div>
        <?php
        }
        ?>
        </div>

      </div>
    </section><!-- End Portfolio Section -->


    <!-- Edit Modal HTML -->
    <div id="editEmployeeModal" class="modal fade">
      <div class="modal-dialog">
        <div class="modal-content">
          <?php
              $nim_target=$_SESSION['nim'];
          ?>
        <form action="../proses/peminjaman.php" method="POST">
            <div class="modal-header">						
              <h4 class="modal-title">Pinjam Barang</h4>
              <button type="button" class="close" data-bs-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <input type="hidden" name="target_kode" id="target_kode" value="#target_kode">
              <input type="hidden" name="nim" id="nim" value="<?php echo $nim_target; ?>">						
              <div class="form-group">
                <label>Lama Pinjam</label>			
                <select class="form-select form-select-lg mb-3 pilihan" name="lama_pinjam" #faq-list-5aria-label=".form-select-sm example" style="font-size:15px" required>
                  <option value="1" selected>1 Hari</option>
                  <option value="2">2 Hari</option>
                  <option value="3">3 Hari</option>
                  <option value="4">4 Hari</option>
                  <option value="5">5 Hari</option>
                  <option value="6">6 Hari</option>
                  <option value="7">7 Hari</option>
                </select>
              </div>
              <div class="form-group">
                <label>Jumlah</label>
                <input type="number" name="jumlah" class="form-control" required>
              </div>	
              <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control" name="deskripsi" required></textarea>
              </div>
            </div>
            <div class="modal-footer">
              <input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
              <input type="submit" class="btn btn-success" name="pinjambarang" value="Pinjam">
            </div>
          </form>
        </div>
      </div>
    </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-newsletter">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-6">
            <h4>Follow Us</h4>
            <p>Dapatkan Berbagai Info Terupdate tentang HIMA RPL</p>
            <form action="" method="post">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Ninestars</h3>
            <p>
              A108 Adam Street <br>
              New York, NY 535022<br>
              United States <br><br>
              <strong>Phone:</strong> +1 5589 55488 55<br>
              <strong>Email:</strong> info@example.com<br>
            </p>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Terms of service</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Privacy policy</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Design</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Web Development</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Product Management</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Graphic Design</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Social Networks</h4>
            <p>Cras fermentum odio eu feugiat lide par naso tierra videa magna derita valies</p>
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

    <div class="container py-4">
      <div class="copyright">
        &copy; Copyright <strong><span>Ninestars</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/ninestars-free-bootstrap-3-theme-for-creative/ -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>
  </footer><!-- End Footer -->

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

  <a href="../Image/barang/<?php echo $data['image']; ?>.png" data-gallery="portfolioGallery" class="portfolio-lightbox preview-link" title="<?php echo $data['nama_barang']; ?>" ><i class="bx bx-plus"></i></a>
                  <a href="#" type="button" class="details-link pinjambtn" data-bs-toggle="modal" data-toggle="modal" title="More Details"><i data-toggle="tooltip" data-bs-toggle="tooltip" class="bx bx-link"></i></a>
                
  <script>
        $(document).ready(function () {

            $('.pinjambtn').on('click', function () {

                $('#editEmployeeModal').modal('show');

                $tr = $(this).closest('div');

                var data = $tr.children("p").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#target_kode').val(data[1]);
                $('#sisa').val(data[2]);
            });
        });
    </script>

    

  

</body>

</html>