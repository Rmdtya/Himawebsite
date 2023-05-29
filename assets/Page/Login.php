<?php
session_start();
include "../proses/koneksi_db.php";

if(isset($_SESSION["session"])){
	header("location:../../index.php");
}

$err = "";
$nim = "";
$password = "";

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($email == '' or $password == '') {
        $err .= "<li>Harap Isi Data Email dan Password Dengan lengkap.</li>";
    } else {

        $query = "SELECT * FROM tbl_account WHERE email ='$email' AND password='$password'";
        $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        // Jika login berhasil, lakukan tindakan yang diinginkan
        echo "Login berhasil!";
        $_SESSION['session_email'] = $email;
        $_SESSION['session_password'] = md5($password);
		    $_SESSION['session'] = true;

        $query_email = "SELECT nim from tbl_account WHERE email = '$email';";

      // Menjalankan query dan mendapatkan hasilnya
        $result = mysqli_query($koneksi, $query_email);
      
      if (mysqli_num_rows($result) > 0) {
          // Mendapatkan baris pertama dari hasil query
          $row = mysqli_fetch_assoc($result);
      
          // Menyimpan nilai kolom1 ke dalam variabel
          $nim_target = $row['nim'];

          $target_nim = trim($nim_target);

          $_SESSION['nim'] = $target_nim;
          // Tampilkan nilai variabel
      } else {
          echo "Tidak ada hasil yang ditemukan";
      }
        //echo $_SESSION['nim']. $_SESSION['nim'];
        header("location:../../index.php");

    } else {
        // Jika login gagal
        $err .= "<li>Email dan Password Tidak Sesuai, Inputkan Kembali</li>";
    }

        // $sql1 = "select * from db_users where nim = '$nim'";
        // $q1 = mysqli_query($koneksi, $sql1);
        // $r1 = mysqli_fetch_array($q1);

        // if ($nim == '') {
        //     $err .= "<li>NIM Tidak Terdaftar.</li>";
        // } elseif ($r1['password'] != $password) {
        //     $err .= "<li>Password yang dimasukan tidak sesuai.</li>";
        // }

        // if (empty($err)) {
        //     $_SESSION['session_nim'] = $nim;
        //     $_SESSION['session_password'] = md5($password);
		// 	$_SESSION['session'] = true;
        //     header("location:../../index.php");
        // }
    }
}

?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="../css/login_style.css" />
    <title>Sign in & Sign up Form</title>
  </head>
  <body>
      <div class="container">
        <div class="forms-container">
          <div class="signin-signup">
            <form action=" " method="post" class="sign-in-form">
              <h2 class="title">Sign in</h2>
              <div>
                  <?php if ($err) { ?>
                  <div id="login-alert"  class="help">
                      <?php echo $err ?>
                  </div>
                  <?php } ?>
              </div>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="email" id="email" name="email" placeholder="Email"/>
              </div>
              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="Password"/>
              </div>
              <input type="submit" value="Login" name="login" class="btn solid" />

              <p class="social-text">Or Sign in with social platforms</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
            </form>

          <form action="../proses/Registrasi.php" method="post" class="sign-up-form">
              <h2 class="title">Sign up</h2>
              <div class="input-field">
                <i class="fas fa-user"></i>
                <input type="text" name="nim_regist" placeholder="Nomor Induk Mahasiswa" required oninvalid="this.setCustomValidity('Masukan NIM Anda')"/>
              </div>

              <div class="input-field">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email_regist" placeholder="Email" required oninvalid="this.setCustomValidity('Masukan Email Anda')"/>
              </div>

              <div class="input-field">
                <i class="fas fa-lock"></i>
                <input type="password" name="password_regist" placeholder="Password" required oninvalid="this.setCustomValidity('Masukan Password Anda')"/>
              </div>
              <input type="submit" class="btn" type="submit" name="sign_up" class="btn btn-primary"
                placeholder="Sign Up"/>

              <p class="social-text">Or Sign up with social platforms</p>
              <div class="social-media">
                <a href="#" class="social-icon">
                  <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-google"></i>
                </a>
                <a href="#" class="social-icon">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </div>
          </form>
        </div>
      </div>

      <div class="panels-container">
        <div class="panel left-panel">
          <div class="content">
            <h3>Hallo World</h3>
            <p>
              Buat akun dan daftarkan diri anda sekarang untuk menikmati berbagai layanan yang kami sediakan. 
            </p>
            <button class="btn transparent" id="sign-up-btn">
              Sign up
            </button>
          </div>
          <img src="../image/log.svg" class="image" alt="" />
        </div>
        <div class="panel right-panel">
          <div class="content">
            <h3>Selamat Datang Kembali </h3>
            <p>
              Gunakun akun yang telah anda buat sebelumnya, silahkan buat akun jika belum mempunyai akun!
            </p>
            <button class="btn transparent" id="sign-in-btn">
              Sign in
            </button>
          </div>
          <img src="../image/register.svg" class="image" alt="" />
        </div>
      </div>
    </div>

    <script src="../js/app.js"></script>
  </body>
</html>
