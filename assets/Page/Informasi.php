<!-- <?php
session_start();

include "../proses/koneksi_db.php";
?> -->


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Pusat Informasi</title>
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
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
  
  <link href="../css/peminjaman.css" rel="stylesheet">
  <link href="../css/informasi.css" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

      <div class="logo">
        <a class="logo me-auto" href="#"><img src="../Image/HimaLogo.png" alt="logo"></a>
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="../../index.php">Home</a></li>
          <li><a class="nav-link scrollto  active" href="Informasi.php">Informasi</a></li>
          <li><a class="nav-link scrollto" href="kabinet.php">Kabinet</a></li>
          <li><a class="nav-link scrollto" href="Peminjaman.php">Peminjaman</a></li>
          <li><a class="nav-link scrollto" href="pemilu.php">Pemilu</a></li>
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

  <!-- ======= About Section ======= -->
  <section id="about" class="about">
      <div class="container">
        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="../Image/infohero.png" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Pusat Informasi HIMARPL</h3>
            <p data-aos="fade-up" data-aos-delay="100">
              Laman yang menyediakan berbagai macam informasi menarik seputar internal atau external kampus. Menyuguhkan berbagai informasi yang sedang hangat dan terupdate dari internal kampus maupun external kampus.
            </p>
            <div class="row">
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
                <i class='bx bx-code-alt' ></i>
                <h4>Programmer</h4>
                <p>Sesuai dengan fashion RPL, laman menyediakan berbagai informasi tentang perkembangan teknologi, software, dunia perkodingan dan berbagai info menarik lainnya</p>
              </div>
              <div class="col-md-6" data-aos="fade-up" data-aos-delay="200">
                <i class='bx bxs-bookmarks'></i>
                <h4>Informasi Lainnya</h4>
                <p>Tersedia berbagai informasi mengenai perkuliahan, info beasiswa, advokasi dan info lainnya.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End About Section -->

      <!-- ======= Blog Section ======= -->
    <section id="blog" class="blog">
      <div class="container" data-aos="fade-up">
      <?php
          if (isset($_SESSION['session'])) {
              if($_SESSION["session_admin"]== true){
                echo ' <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                          <a href="#" type="button" class="btn btn-success addinfo" data-bs-toggle="modal" data-toggle="modal" title="Add New Informasi" style="margin-bottom:20px;" ><span>Add New Informasi</span></a>	
                      </div>';
              }else{

              }
          }  
            else {
          }
          ?>

        <div class="row gy-4 posts-list">
        <?php
              $query1 = mysqli_query($koneksi, "SELECT * FROM tbl_informasi");
              while($data = mysqli_fetch_array($query1)) { ?> 
                <div class="col-xl-4 col-md-6">
                  <article>
                    <div class="post-img">
                      <img src="../Image/informasi/<?php echo $data['image1']; ?>" alt="" class="img-fluid">
                    </div>
                    <p class="post-category"><?php echo $data['topik']; ?></p>
                    <h2 class="title">
                      <a href="#" type="button" class="details-link berita" data-bs-toggle="modal" data-toggle="modal" title="Read" data-bs-target="#informasi<?php echo $data['kode_info']; ?>"><?php echo $data['judul']; ?></a>
                    </h2>
                    <p class="date-time"><?php echo $data['tanggal']; ?></p>
                  </article>
                </div><!-- End post list item -->
                <?php
              }
        ?>
        </div><!-- End blog posts list -->

        <div class="blog-pagination">
          <ul class="justify-content-center">
            <li><a href="#">1</a></li>
            <li class="active"><a href="#">2</a></li>
            <li><a href="#">3</a></li>
          </ul>
        </div><!-- End blog pagination -->
      </div>


<?php
      $query1 = mysqli_query($koneksi, "SELECT * FROM tbl_informasi");
      while($data = mysqli_fetch_array($query1)) { 
        $jumlah = $data['jumlah_data'];
        ?> 

      <!-- Informasi-->
      <div class="modal fade" id="informasi<?php echo $data['kode_info']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" style="font-weight:700;" id="exampleModalLabel"><?php echo $data['judul']; ?></h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">

            <?php
                if($jumlah >= 1){
                      ?>
                          <div class="card mb-12" style="max-width:100%; border: none;margin-bottom:20px;">
                            <div class="row g-0">
                              <div class="col-md-4">
                                <img src="../Image/informasi/<?php echo $data['image1'];?>" class="img-fluid rounded-start" alt="...">
                              </div>
                              <div class="col-md-8 align-self-center">
                                <div class="card-body ">
                                  <h5 class="car
                                  d-title"><strong><?php echo $data['sub_title1'];?></strong></h5>
                                  <p class="card-text"><?php echo $data['deskripsi1'];?></p>
                                  <ul>
                                      <li>
                                        <strong><?php echo $data['poinplus1_1'];?></strong><?php echo $data['poindesc1_1'];?>
                                      </li>
                                      <li>
                                        <strong><?php echo $data['poinplus1_2'];?></strong><?php echo $data['poindesc1_2'];?>
                                      </li>
                                    </ul>
                                </div>
                              </div>
                            </div>
                          </div>

                          <?php
                              if($jumlah >= 2){
                          ?>
                                    <div class="card mb-12" style="max-width:100%; border: none; margin-bottom:20px;">
                                      <div class="row g-0">
                                        <div class="col-md-4">
                                          <img src="../Image/informasi/<?php echo $data['image2'];?>" class="img-fluid rounded-start" alt="...">
                                        </div>
                                        <div class="col-md-8 align-self-center">
                                          <div class="card-body ">
                                            <h5 class="card-title"><strong><?php echo $data['sub_title2'];?></strong></h5>
                                            <p class="card-text"><?php echo $data['deskripsi2'];?></p>
                                            <ul>
                                                <li>
                                                  <strong><?php echo $data['poinplus2_1'];?></strong><?php echo $data['poindesc2_1'];?>
                                                </li>
                                                <li>
                                                  <strong><?php echo $data['poinplus2_2'];?></strong><?php echo $data['poindesc2_2'];?>
                                                </li>
                                              </ul>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                      <?php
                                            if($jumlah >= 3){ ?>
                                                  <div class="card mb-12" style="max-width:100%; border: none; margin-bottom:20px;">
                                                    <div class="row g-0">
                                                      <div class="col-md-4">
                                                        <img src="../Image/informasi/<?php echo $data['image3'];?>" class="img-fluid rounded-start" alt="...">
                                                      </div>
                                                      <div class="col-md-8 align-self-center">
                                                        <div class="card-body ">
                                                          <h5 class="card-title"><strong><?php echo $data['sub_title3'];?></strong></h5>
                                                          <p class="card-text"><?php echo $data['deskripsi3'];?></p>
                                                          <ul>
                                                              <li>
                                                                <strong><?php echo $data['poinplus3_1'];?></strong><?php echo $data['poindesc3_1'];?>
                                                              </li>
                                                              <li>
                                                                <strong><?php echo $data['poinplus3_2'];?></strong><?php echo $data['poindesc3_2'];?>
                                                              </li>
                                                            </ul>
                                                        </div>
                                                      </div>
                                                    </div>
                                                  </div>
                      <?php 
                          }  
                      
                      }
                      
                      ?>
              </div>
              <div class="modal-footer"></div>
            </div>
          </div>
        </div>

        <?php
        }
      }
      ?>

</section><!-- End Blog Section -->

<!-- ADD Info-->
<div class="modal fade" id="addinfo" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" style="font-weight:700;" id="exampleModalLabel">5 Aplikasi Coding Terpopuler</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
          <div class="card mb-12" style="max-width:100%; border: none;">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="../Image/informasi/vscode.png" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-8 align-self-center">
                <div class="card-body ">
                  <h5 class="card-title"><strong>Visual Studio Code</strong></h5>
                  <p class="card-text">Visual Studio Code adalah sebuah editor teks yang sangat populer dan serbaguna yang dikembangkan oleh Microsoft. Editor ini dirancang untuk memenuhi kebutuhan pengembangan perangkat lunak yang beragam, termasuk pengembangan web dan aplikasi lintas platform.</p>
                  <ul>
                      <li>
                        <strong>Antar-muka Pengguna yang Ramah:</strong> Visual Studio Code memiliki antar-muka pengguna yang intuitif dan ramah pengembang. Fitur ini memungkinkan pengguna untuk dengan mudah mengelola proyek, membuka file, dan menjelajahi struktur direktori.
                      </li>
                      <li>
                        <strong>Penyorotan Kode yang Kuat:</strong> Editor ini dilengkapi dengan penyorotan sintaks dan templat kode yang canggih untuk berbagai bahasa pemrograman. Ini membantu pengembang dalam memahami dan menulis kode dengan lebih efisien.
                      </li>
                    </ul>
                </div>
              </div>
            </div>
          </div>

          <div class="container mt-5">
            <form method="POST" action="../proses/informasi_proses.php" enctype="multipart/form-data">
              <div class="mb-3">
                  <div class="card mb-12" style="max-width:100%; border: none;">
                      <div class="row g-0">
                        <div class="col-md-12 align-self-center">
                          <div class="card-body ">
                              <input type="text" class="form-control card-title"  name="title"  placeholder="Input Title">
                              <input type="text" class="form-control card-title"  name="tanggal"  placeholder="Tanggal Upload ex. 12 April 2023">
                              <input type="text" class="form-control card-title"  name="topik"  placeholder="Topik ex. Coding, Programmer, Beasiswa">
                              <input type="text" class="form-control card-title"  id="input1Text1" name="text1[]"  placeholder="Input SubTitle">
                              <textarea type="textarea" class="form-control card-text"  id="input2Text1" name="text2[]" placeholder="Input Deskripsi"></textarea>
                              <ul>
                                <li style="margin-top:5px; margin-bottom:5px;">
                                  <input type="text" id="input3Text1" name="text3[]"  placeholder="Input Poin Plus">
                                </li>
                                <textarea type="textarea" class="form-control card-text" id="input4Text1" name="text4[]" placeholder="Input Deskripsi"></textarea>
                                </ul>
                              <ul>
                                <li style="margin-top:5px; margin-bottom:5px;">
                                    <input type="text" id="input5Text1" name="text5[]"  placeholder="Input Poin Plus">
                                </li>
                                <textarea type="textarea" class="form-control card-text"  id="input6Text1" name="text6[]" placeholder="Input Deskripsi"></textarea>
                              </ul>
                                          
                              <input type="file" class="form-control card-title"  id="input7Text1" name="image[]"  placeholder="Input Title">
                            </div>
                          </div>
                        </div>
                    </div>
                <label hidden for="inputText1" class="form-label">Text 1</label>
                <input hidden type="text" class="form-control" id="inputText1" name="text[]">
              </div>
              <div id="textboxContainer"></div>
              <button type="button" class="btn btn-primary mt-3" onclick="addTextBox()">Tambah Textbox</button>
              <button type="submit" class="btn btn-success mt-3">Submit</button>
            </form>
          </div>

      </div>
      <div class="modal-footer">
      </div>
    </div>
  </div>
</div>

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
    var counter = 0;
    var textboxCount = 1;

    function addTextBox() {
      if (counter < 2) {
      var container = document.getElementById('textboxContainer');
      var newTextBox = document.createElement('div');
      newTextBox.innerHTML = `
        <div class="mb-3">
                    <div class="card mb-12" style="max-width:100%; border: none;">
                      <div class="row g-0">
                        <div class="col-md-12 align-self-center">
                          <div class="card-body ">
                              <input type="text" class="form-control card-title"  id="input1Text${textboxCount + 1}" name="text1[]"  placeholder="Input Sub Title">
                              <textarea type="textarea" class="form-control card-text"  id="input2Text${textboxCount + 1}" name="text2[]" placeholder="Input Deskripsi"></textarea>
                              <ul>
                                <li style="margin-top:5px; margin-bottom:5px;">
                                  <input type="text" id="input3Text${textboxCount + 1}" name="text3[]"  placeholder="Input Poin Plus">
                                </li>
                                <textarea type="textarea" class="form-control card-text" id="input4Text${textboxCount + 1}" name="text4[]" placeholder="Input Deskripsi"></textarea>
                                </ul>
                              <ul>
                                <li style="margin-top:5px; margin-bottom:5px;">
                                    <input type="text" id="input5Text${textboxCount + 1}" name="text5[]"  placeholder="Input Poin Plus">
                                </li>
                                <textarea type="textarea" class="form-control card-text"  id="input6Text${textboxCount + 1}" name="text6[]" placeholder="Input Deskripsi"></textarea>
                              </ul>
                                          
                              <input type="file" class="form-control card-title"  id="input7Text${textboxCount + 1}" name="image[]"  placeholder="Input Title">
                            </div>
                          </div>
                        </div>
                    </div>
          <label hidden for="inputText${textboxCount + 1}" class="form-label">Text ${textboxCount + 1}</label>
          <input hidden type="text" class="form-control" name="text[]" id="inputText${textboxCount + 1}">
        </div>
      `;
      container.appendChild(newTextBox);
      textboxCount++;
      counter++;
      }
      else {
    console.log("Batas maksimum tercapai");
  }
    }
  </script>
 

<script>
        $(document).ready(function () {

            $('.addinfo').on('click', function () {

                $('#addinfo').modal('show');

                $tr = $(this).closest('div');

                var data = $tr.children("p").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.informas').on('click', function () {

                $('#informasi').modal('show');

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