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

  <title>Pemilu HIMARPL</title>
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
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  
  
  
  

  <!-- Template Main CSS File -->
  <link href="../css/pemilu.css" rel="stylesheet">
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
          <li><a class="nav-link scrollto" href="Informasi.php">Informasi</a></li>
          <li><a class="nav-link scrollto" href="kabinet.php">Kabinet</a></li>
          <li><a class="nav-link scrollto" href="Peminjaman.php">Peminjaman</a></li>
          <li><a class="nav-link scrollto active">Pemilu</a></li>
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

  <main id="main">

     <!-- ======= Team Section ======= -->
     <section id="team" class="team">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Pemihan Umum</h2>
          <p>Calon Ketua HIMA Rekayasa Perangkat</p>
        </div>

        <div class="row">

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="100">
            <div class="member">
              <img src="../Image/previewcalon1.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4 style="background:none; border:none;" href="#" type="button" class="details-link calon1" data-bs-toggle="modal" data-toggle="modal" title="Vote Now">Ramaditya Firdaus</h4>
                  <span>RPL 2021</span>
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

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="member">
              <img src="../Image/previewcalon2.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4 style="background:none; border:none;" href="#" type="button" class="details-link calon2" data-bs-toggle="modal" data-toggle="modal" title="Vote Now">Muhammad Rafid</h4>
                  <span>RPL 2020</span>
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

          <div class="col-xl-4 col-lg-4 col-md-6" data-aos="zoom-in" data-aos-delay="400">
            <div class="member">
              <img src="../Image/previewcalon3.png" class="img-fluid" alt="">
              <div class="member-info">
                <div class="member-info-content">
                  <h4 style="background:none; border:none;" href="#" type="button" class="details-link calon3" data-bs-toggle="modal" data-toggle="modal" title="Vote Now">Cherry Adya</h4>
                  <span>RPL 2022</span>
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

<?php
  
    $izin_vote = false;
    $query = mysqli_query($koneksi, "SELECT *FROM tbl_pemilu");
    while($data = mysqli_fetch_array($query)) { 
      if($data['nim'] == $_SESSION['nim'] AND $data['voting_calon'] == null){
        $izin_vote = true;
      }
    }

$query = mysqli_query($koneksi, "SELECT * FROM tbl_calonketua");
while($data = mysqli_fetch_array($query)) { ?>

<!-- Modal Calon 1-->
<div class="modal fade" id="calon<?php echo $data['no_urut']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-weight:700;" id="exampleModalLabel">Calon Ketua HIMARPL No Urut <?php echo $data['no_urut']; ?></h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row">
        <div class="col-xl-4">
          <div class="card">
         
            <div style="padding-bottom:0; border:none;" class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <img style="width:92%;" src="../Image/<?php echo $data['image']; ?>" alt="Profile" class="shadow-4-strong img-fluid ">

            </div>
          </div>
        </div>

        <div class="col-xl-8">
                    <div class="card">
                      <div class="card-body pt-3" >
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered ">

                          <li class="nav-item">
                            <button class="nav-link <?php echo $data['no_urut']; ?> active" data-bs-toggle="tab" data-bs-target="#profile-overview<?php echo $data['no_urut']; ?>">Overview</button>
                          </li>

                          <li class="nav-item">
                            <button class="nav-link <?php echo $data['no_urut']; ?> " data-bs-toggle="tab" data-bs-target="#profile-edit<?php echo $data['no_urut']; ?>">Visi dan Misi</button>
                          </li>

                          <li class="nav-item">
                            <button class="nav-link <?php echo $data['no_urut']; ?> " data-bs-toggle="tab" data-bs-target="#profile-settings<?php echo $data['no_urut']; ?>">Program Kerja</button>
                          </li>
                        </ul>
                        <div class="tab-content pt-2">

                          <div class="tab-pane fade show active profile-overview" id="profile-overview<?php echo $data['no_urut']; ?>">
                            <h5 class="card-title">About</h5>
                            <p class="medium fst-italic">
                                <?php echo $data['about']; ?>
                            </p>

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label ">Full Name</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo ": " . $data['first_name'] . " " . $data['last_name']; ?>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">NIM</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo ": ". $data['nim']; ?>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Email</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo ": " . $data['email']; ?>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo ": " . $data['jenis_kelamin']; ?>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Program Studi</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo ": " . $data['program_studi']; ?>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Status</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo ": " . $data['status']; ?>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Phone Number</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo ": " . $data['phone']; ?>
                              </div>
                            </div>

                          </div>

                          <div class="tab-pane fade profile-edit pt-3" id="profile-edit<?php echo $data['no_urut']; ?>">

                            <!-- Profile Edit Form -->
                      
                                  <div class="why-us container second" data-aos="fade-up">
                                    <div class="row">
                                      <div class="col-lg-12 d-flex flex-column justify-content-center align-items-stretch  order-1 order-lg-1 ">
                                        <div class="accordion-list">
                                          <ul>
                                            <li>
                                              <a data-bs-toggle="collapse" class="collapse" data-bs-target="#accordion-list-1"><span>01</span> Visi Dalam Kepeminpinan<i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                              <div id="accordion-list-1" class="collapse show" data-bs-parent=".accordion-list">
                                                <p>
                                                    <?php echo $data['visi']; ?>
                                                </p>
                                              </div>
                                            </li>

                                            <li>
                                              <a data-bs-toggle="collapse" data-bs-target="#accordion-list-2" class="collapsed"><span>02</span> Misi HIMA Rekayasa Perangkat Lunak <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-chevron-up icon-close"></i></a>
                                              <div id="accordion-list-2" class="collapse" data-bs-parent=".accordion-list">
                                                <p>
                                                  <?php echo $data['misi']; ?>
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
                          </div>

                          <div class="tab-pane fade pt-3" id="profile-settings<?php echo $data['no_urut']; ?>">
                              <span>Help</span>
                          </div>
                        </div><!-- End Bordered Tabs -->

                      </div>
                    </div>
              </div>
          </div>
      </div>
      <div class="modal-footer">
          <?php
              if($izin_vote == true){?>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="button" href="#" type="button" class="btn btn-primary voting<?php echo $data['no_urut'];?>" data-bs-toggle="modal" data-toggle="modal" title="Vote Now">Vote Sekarang</button>

              <?php
              }
            ?>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="voting<?php echo $data['no_urut']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form action="../proses/pemilu_proses.php" method="POST">
          <input type="hidden" name="no_target" value="<?php echo $data['no_urut']; ?>">	
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Konfirmasi Pemilihan</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <p>
            Apakah anda yakin ingin memilih <span style="font-weight:bold"><?php echo $data['first_name'] . " " . $data['last_name'];?></span> Sebagai ketua HIMRPL?
          </P>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-success" name="submitvoting">Voting</button>
        </div>
      </form>
    </div>
  </div>
</div>

    <?php
        }
?>

<?php 
    $jumlahvote = "SELECT COUNT(*) as total_suara FROM tbl_pemilu WHERE voting_calon IS NOT NULL;";
    $result_row = mysqli_query($koneksi, $jumlahvote);
    
    if ($result_row) {
      $row = mysqli_fetch_assoc($result_row);
      $suara_masuk = $row['total_suara'];
      $suara_sisa = 314 - $suara_masuk;

    } else {

    }?>



    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Live Info</h2>
          <p>Suara Pemilihan Saat Ini</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 " data-aos="zoom-in" data-aos-delay="100">
            <div class="icon-box">
              <h4 class="title"><a href="">Total Suara</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
              <h4 class="suara total"><a href="">314</a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 " data-aos="zoom-in" data-aos-delay="200">
            <div class="icon-box">
              <h4 class="title"><a href="">Suara Masuk</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse</p>
              <h4 class="suara masuk"><a href=""><?php echo $suara_masuk;?></a></h4>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 " data-aos="zoom-in" data-aos-delay="300">
            <div class="icon-box">
              <h4 class="title"><a href="">Sisa Suara</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa </p>
              <h4 class="suara sisa"><a href=""><?php echo $suara_sisa;?></a></h4>
            </div>
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->

    

 <!-- ======= Footer ======= -->
<footer style="padding:0;" id="footer">

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
  <script src="../vendor/aos/aos.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../vendor/php-email-form/validate.js"></script>


  <!-- Template Main JS File -->
  <script src="../js/main.js"></script>

 

<script>
        $(document).ready(function () {

            $('.calon1').on('click', function () {

                $('#calon1').modal('show');

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

<script>
        $(document).ready(function () {

            $('.calon2').on('click', function () {

                $('#calon2').modal('show');

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

<script>
        $(document).ready(function () {

            $('.calon3').on('click', function () {

                $('#calon3').modal('show');

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

<script>
        $(document).ready(function () {

            $('.voting1').on('click', function () {

                $('#voting1').modal('show');

                $tr = $(this).closest('div');

                var data = $tr.children("p").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#no_target').val(data[1]);
            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.voting2').on('click', function () {

                $('#voting2').modal('show');

                $tr = $(this).closest('div');

                var data = $tr.children("p").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#no_target').val(data[1]);
            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.voting3').on('click', function () {

                $('#voting3').modal('show');

                $tr = $(this).closest('div');

                var data = $tr.children("p").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#no_target').val(data[1]);
            });
        });
    </script>


</body>

</html>