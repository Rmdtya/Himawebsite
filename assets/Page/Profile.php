<!-- <?php
session_start();
if(!isset($_SESSION["session"])){
	header("location:login.php");
}

if (isset($_POST["logout"])) {
  try {
    // Menghapus semua session
    session_unset();
    // Menghancurkan session
    session_destroy();

    header("location:../../index.php");

  } catch (Exception $e) {
      echo "Gagal LogOut";
  }
}

include "../proses/koneksi_db.php";

?> -->

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Profile Users</title>
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
  <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script>

  
  <!-- Template Main CSS File -->
  <link href="../css/pemilu.css" rel="stylesheet">
  <link href="../css/profile.css" rel="stylesheet">

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

<main id="main" class="main">
  <div class="container profile">
    <section class="section profile">
      <div class="row">
        <div class="col-xl-4">

          <div class="card">
            <div class="card-body profile-card pt-4 d-flex flex-column align-items-center">

            <?php
                    $nim_target=$_SESSION['nim'];
                    $query2 = mysqli_query($koneksi, "SELECT * FROM tbl_profile WHERE nim='$nim_target'");
                    while($data = mysqli_fetch_array($query2)) { ?>
                    
                    <img style="width:120px;height: 120px; object-fit: cover;"src="../Image/profile/<?php echo $data['image'];?>" alt="Profile" class="rounded-circle shadow-4-strong img-fluid img-thumbnail">

                    <h2>
                      <?php echo $data['first_name'] . " " . $data['last_name']; ?>
                    </h2>
                    <h3>
                      <?php echo $data['nim']; ?>
                    </h3>
                    <div class="social-links mt-2">
                      <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
                      <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
                      <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
                      <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
                    </div>
            <?php
                    } ?>

            </div>
          </div>
        </div>

        <div class="col-xl-8">

        <?php
                    $nim_target=$_SESSION['nim'];
                    $query2 = mysqli_query($koneksi, "SELECT * FROM tbl_profile WHERE nim='$nim_target'");
                    while($data = mysqli_fetch_array($query2)) { 
                      
                      $desc = $data['about'];
                      ?>
                    
                    <div class="card">
                      <div class="card-body pt-3">
                        <!-- Bordered Tabs -->
                        <ul class="nav nav-tabs nav-tabs-bordered">

                          <li class="nav-item">
                            <button class="nav-link active" data-bs-toggle="tab" data-bs-target="#profile-overview">Overview</button>
                          </li>

                          <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-edit">Edit Profile</button>
                          </li>

                          <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-settings">Settings</button>
                          </li>

                          <li class="nav-item">
                            <button class="nav-link" data-bs-toggle="tab" data-bs-target="#profile-change-password">Change Password</button>
                          </li>

                        </ul>
                        <div class="tab-content pt-2">

                          <div class="tab-pane fade show active profile-overview" id="profile-overview">
                            <h5 class="card-title">About</h5>
                            <p class="small fst-italic">
                              <?php echo $data['about']; ?>
                            </p>

                            <h5 class="card-title">Profile Details</h5>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label ">Full Name</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo $data['first_name'] . " " . $data['last_name']; ?>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Jenis Kelamin</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo $data['jenis_kelamin']; ?>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Program Studi</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo $data['program_studi']; ?>
                              </div>
                            </div>

                            <div class="row">
                              <div class="col-lg-3 col-md-4 label">Phone</div>
                              <div class="col-lg-9 col-md-8">
                                  <?php echo $data['phone']; ?>
                              </div>
                            </div>
                          </div>

                          <div class="tab-pane fade profile-edit pt-3" id="profile-edit">

                            <!-- Profile Edit Form -->
                            <form action="../proses/profile_proses.php" method="POST" enctype="multipart/form-data">

                              <div class="row mb-3">
                                <label for="email" class="col-md-4 col-lg-3 col-form-label">Email</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="email" type="text" class="form-control" id="email" value="<?php echo $data['email'];?>" disabled>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="nim" class="col-md-4 col-lg-3 col-form-label">Nim</label>
                                <div class="col-md-8 col-lg-9">
                                  <input type="hidden" name="nim" id="nim" value="<?php echo $data['nim']; ?>">					
                                  <input  class="form-control" value="<?php echo $data['nim']; ?>" disabled>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="firstname" class="col-md-4 col-lg-3 col-form-label">First Name</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="firstname" type="text" class="form-control" id="firstname" value="<?php echo $data['first_name']; ?>">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="firstname" class="col-md-4 col-lg-3 col-form-label">Last Name</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="lastname" type="text" class="form-control" id="firstname" value="<?php echo $data['last_name']; ?>">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="jk" class="col-md-4 col-lg-3 col-form-label">Jenis Kelamin</label>
                                <div class="col-md-8 col-lg-9">
                                <select class="form-select form-control" name="jk" #faq-list-5aria-label=".form-select-sm example" style="font-size:15px" required>
                                  <option value="Pria" selected>Pria</option>
                                  <option value="Wanita">Wanita</option>
                                </select>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="about" class="col-md-4 col-lg-3 col-form-label">About</label>
                                <div class="col-md-8 col-lg-9">
                                  <textarea name="about" class="form-control" id="about" style="height: 100px" ><?php echo $data['about'];?></textarea>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="status" class="col-md-4 col-lg-3 col-form-label">Status</label>
                                <div class="col-md-8 col-lg-9">
                                <select class="form-select form-control" name="status" #faq-list-5aria-label=".form-select-sm example" style="font-size:15px" required>
                                  <option value="Aktif" selected>Mahasiswa Aktif</option>
                                  <option value="Tidak Aktif">Mahasiswa Non-aktif</option>
                                </select>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="company" class="col-md-4 col-lg-3 col-form-label">Program Studi</label>
                                <div class="col-md-8 col-lg-9">
                                <select class="form-select form-control" name="prodi" #faq-list-5aria-label=".form-select-sm example" style="font-size:15px" required>
                                  <option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
                                  <option value="Pendidikan Guru Sekolah Dasar">Pendidikan Guru Sekolah Dasar</option>
                                  <option value="Pendidikan Guru Paud">Pendidikan Guru Paud</option>
                                  <option value="Pendidikan Multimedia">Pendidikan Multimedia</option>
                                  <option value="Teknik Komputer">Teknik Komputer</option>
                                </select>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="phone" class="col-md-4 col-lg-3 col-form-label">Mobile Phone</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="phone" type="text" class="form-control" id="phone" value="<?php echo $data['phone']; ?>">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="instagram" class="col-md-4 col-lg-3 col-form-label">Instagram Profile</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="instagram" type="text" class="form-control" id="instagram" value="<?php echo $data['instagram']; ?>"?>
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="facebook" class="col-md-4 col-lg-3 col-form-label">Facebook Profile</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="facebook" type="text" class="form-control" id="facebook" value="<?php echo $data['facebook']; ?>">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="lingkedin" class="col-md-4 col-lg-3 col-form-label">Lengkedin Profile</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="lingkedin" type="text" class="form-control" id="lingkedin" value="<?php echo $data['lingkedin']; ?>">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="profileImage" class="col-md-4 col-lg-3 col-form-label">Profile Image</label>
                                <div class="col-md-8 col-lg-9">
                                    <div class="form-group">
                                      <input type="file" name="image" value="<?php echo $data['image']; ?>">
                                    </div>
                                </div>
                              </div>
                              
                              <div class="text-center">
                                <button type="submit" name="editprofile" class="btn btn-primary">Save Changes</button>
                              </div>
                            </form><!-- End Profile Edit Form -->

                          </div>

                          <div class="tab-pane fade pt-3" id="profile-settings">

                            <!-- Settings Form -->
                            <form action=" " method="POST" >

                              <!-- <div class="row mb-3">
                                <label for="fullName" class="col-md-4 col-lg-3 col-form-label">Email Notifications</label>
                                <div class="col-md-8 col-lg-9">
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="changesMade" checked>
                                    <label class="form-check-label" for="changesMade">
                                      Changes made to your account
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="newProducts" checked>
                                    <label class="form-check-label" for="newProducts">
                                      Information on new products and services
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="proOffers">
                                    <label class="form-check-label" for="proOffers">
                                      Marketing and promo offers
                                    </label>
                                  </div>
                                  <div class="form-check">
                                    <input class="form-check-input" type="checkbox" id="securityNotify" checked disabled>
                                    <label class="form-check-label" for="securityNotify">
                                      Security alerts
                                    </label>
                                  </div>
                                </div>
                              </div> -->

                              <div class="text-left">
                                <button type="submit" name="logout" class="btn btn-danger">Log Out</button>
                              </div>
                            </form><!-- End settings Form -->

                          </div>

                          <div class="tab-pane fade pt-3" id="profile-change-password">
                            <!-- Change Password Form -->
                            <form>

                              <div class="row mb-3">
                                <label for="currentPassword" class="col-md-4 col-lg-3 col-form-label">Current Password</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="password" type="password" class="form-control" id="currentPassword">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="newPassword" class="col-md-4 col-lg-3 col-form-label">New Password</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="newpassword" type="password" class="form-control" id="newPassword">
                                </div>
                              </div>

                              <div class="row mb-3">
                                <label for="renewPassword" class="col-md-4 col-lg-3 col-form-label">Re-enter New Password</label>
                                <div class="col-md-8 col-lg-9">
                                  <input name="renewpassword" type="password" class="form-control" id="renewPassword">
                                </div>
                              </div>

                              <div class="text-center">
                                <button type="submit" class="btn btn-primary">Change Password</button>
                              </div>
                            </form><!-- End Change Password Form -->

                          </div>

                        </div><!-- End Bordered Tabs -->

                      </div>
                    </div>
                              
            <?php
              } ?>
          

        </div>
      </div>
  </section>
      </div>
</main><!-- End #main -->


  <div class="container profile">
    <section class="section profile">

    <div class="container">
	<div class="table-responsive">
		<div class="table-wrapper">
			<div class="table-title">
				<div class="row">
					<div class="col-sm-6">
						<h2>Manage <b>Peminjaman Barang</b></h2>
					</div>
				</div>
			</div>
			<table class="table table-striped table-hover">
				<thead>
					<tr>
            <th>No</th>
						<th>Kode Peminjaman</th>
						<th>Kode Barang</th>
						<th>Jumlah</th>
						<th>Tanggal Peminjaman</th>
            <th>Keterangan</th>
            <th>Waktu Pinjam</th>
            <th>Status</th>
            <th>Aksi</th>
					</tr>
				</thead>
				<tbody>
        <?php
                    
                    $i = 1;
                    $query2 = mysqli_query($koneksi, "SELECT * FROM tbl_peminjaman WHERE nim_peminjam='$nim_target' AND status_peminjaman='Dipinjam'");
                    while($data = mysqli_fetch_array($query2)) { ?>
          
                      <tr>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo $data['kode_pinjam']; ?>
                        </td>
                        <td>
                            <?php echo $data['kode_barang']; ?>
                        </td>
                        <td>
                            <?php echo $data['jumlah']; ?>
                        </td>
                        <td>
                            <?php echo $data['tgl_pinjam']; ?>
                        </td>
                        <td>
                            <?php echo $data['keterangan']; ?>
                        </td>
                        <td>
                            <?php echo $data['time_remairing'] . " Hari"; ?>
                        </td>
                        <td>
                            <?php echo $data['status_peminjaman']; ?>
                        </td>

                        <td>
						                <!-- <a style="color:white" href="#submitBarang" class="btn btn-success btnsubmitbarang" data-toggle="modal"><span>Selesai</span></a>				 -->
                      </td>
                      </tr>

                    <?php
                    }

                    $query2 = mysqli_query($koneksi, "SELECT * FROM tbl_antrianpeminjaman WHERE nim_peminjam='$nim_target' AND status_peminjaman='Dalam Antrian'");
                    while($data = mysqli_fetch_array($query2)) { ?>
          
                      <tr>
                        <td hidden>
                            <?php echo $data['kode_pinjam']; ?>
                        </td>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo null ?>
                        </td>
                        <td>
                            <?php echo $data['kode_barang']; ?>
                        </td>
                        <td>
                            <?php echo $data['jumlah']; ?>
                        </td>
                        <td>
                            <?php echo $data['tgl_pinjam']; ?>
                        </td>
                        <td>
                            <?php echo $data['keterangan']; ?>
                        </td>
                        <td>
                            <?php echo $data['time_remairing']; ?>
                        </td>
                        <td>
                            <?php echo $data['status_peminjaman']; ?>
                        </td>

                        <td>
                            <a href="#" type="button" class="delete deletebtn" data-bs-toggle="modal" data-toggle="modal"><i class='bx bx-folder-minus' data-toggle="tooltip" data-bs-toggle="tooltip" title="Cancel"></i></a>
                      </td>
                      </tr>

                    <?php
                    }

                    $query2 = mysqli_query($koneksi, "SELECT * FROM tbl_antrianpeminjaman WHERE nim_peminjam='$nim_target' AND status_peminjaman='Belum Selesai'");
                    while($data = mysqli_fetch_array($query2)) { ?>
          
                      <tr>
                        <td hidden>
                            <?php echo $data['kode_pinjam']; ?>
                        </td>
                        <td>
                            <?php echo $i++; ?>
                        </td>
                        <td>
                            <?php echo null ?>
                        </td>
                        <td>
                            <?php echo $data['kode_barang']; ?>
                        </td>
                        <td>
                            <?php echo $data['jumlah']; ?>
                        </td>
                        <td>
                            <?php echo $data['tgl_pinjam']; ?>
                        </td>
                        <td>
                            <?php echo $data['keterangan']; ?>
                        </td>
                        <td>
                            <?php echo $data['time_remairing']; ?>
                        </td>
                        <td>
                            <?php echo $data['status_peminjaman']; ?>
                        </td>

                        <td>
                            <a href="#" type="button" class="edit antrianbtn" data-bs-toggle="modal" data-toggle="modal"><i class='bx bx-add-to-queue' style="color:#6495ED;" data-bs-toggle="tooltip" data-toggle="tooltip" title="Ajukan Antrial"></i></a>   
                            <a href="#" type="button" class="delete deletebtn" data-bs-toggle="modal" data-toggle="modal"><i class='bx bx-folder-minus' data-toggle="tooltip" data-bs-toggle="tooltip" title="Delete"></i></a>
                      </td>
                      </tr>

                    <?php
                    }

                    ?>
				</tbody>
			</table>


			<div class="clearfix">
				<div class="hint-text">Showing <b>1</b> out of <b>25</b> entries</div>
				<ul class="pagination">
					<li class="page-item disabled"><a href="#">Previous</a></li>
					<li class="page-item  active"><a href="#" class="page-link">1</a></li>
					<li class="page-item"><a href="#" class="page-link">2</a></li>
					<li class="page-item"><a href="#" class="page-link">3</a></li>
					<li class="page-item"><a href="#" class="page-link">4</a></li>
					<li class="page-item"><a href="#" class="page-link">5</a></li>
					<li class="page-item"><a href="#" class="page-link">Next</a></li>
				</ul>
			</div>
		</div>
	</div>        
</div>
  </section>

  <!-- add Modal HTML -->
<div id="antrianmodal" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="../proses/profile_proses.php" method="POST">
        <input type="hidden" name="target_kode" id="target_kode" value="#target_kode">			
				<div class="modal-header">						
					<h4 class="modal-title">Masukan Dalam Antrian</h4>
					<i style="font-size:25px; font-weight: bold;"type="button" data-bs-dismiss="modal" aria-hidden="true" class="close">&times;</i>
				</div>
				<div class="modal-body">					
					<p>Apakah anda ingin mengejukan antrian?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-success" name="antrianpinjam" value="Add to Queue">
				</div>
			</form>
		</div>
	</div>
</div>
  </div>

  <div id="deleteantrian" class="modal fade">
	<div class="modal-dialog">
		<div class="modal-content">
			<form action="../proses/profile_proses.php" method="POST">
        <input type="hidden" name="delete_kode" id="delete_kode" value="#delete_kode">			
				<div class="modal-header">						
					<h4 class="modal-title">Cancel Antrian Barang</h4>
					<i style="font-size:25px; font-weight: bold;"type="button" data-bs-dismiss="modal" aria-hidden="true" class="close">&times;</i>
				</div>
				<div class="modal-body">					
					<p>Apakah anda ingin mengcancel antrian barang?</p>
					<p class="text-warning"><small>This action cannot be undone.</small></p>
				</div>
				<div class="modal-footer">
					<input type="button" class="btn btn-default" data-bs-dismiss="modal" value="Cancel">
					<input type="submit" class="btn btn-danger" name="deleteantrian" value="Delete">
				</div>
			</form>
		</div>
	</div>
</div>
  </div>

</main><!-- End #main -->

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

            $('.antrianbtn').on('click', function () {

                $('#antrianmodal').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#target_kode').val(data[0]);
            });
        });
    </script>

<script>
        $(document).ready(function () {

            $('.deletebtn').on('click', function () {

                $('#deleteantrian').modal('show');

                $tr = $(this).closest('tr');

                var data = $tr.children("td").map(function () {
                    return $(this).text();
                }).get();

                console.log(data);

                $('#delete_kode').val(data[0]);
            });
        });
    </script>

<script>
    let arrow = document.querySelectorAll(".arrow");
      for (var i = 0; i < arrow.length; i++) {
        arrow[i].addEventListener("click", (e)=>{
          let arrowParent = e.target.parentElement.parentElement;//selecting main parent of arrow
          arrowParent.classList.toggle("showMenu");
            });
          }
          let sidebar = document.querySelector(".sidebar");
          let sidebarBtn = document.querySelector(".bx-menu");
          console.log(sidebarBtn);
      sidebarBtn.addEventListener("click", ()=>{
      sidebar.classList.toggle("close");
  });
  </script>
  

</body>

</html>