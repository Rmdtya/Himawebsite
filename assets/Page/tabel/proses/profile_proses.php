<?php
// session_start();
// if(!isset($_SESSION["session"])){
// 	header("location:../login.php");
// }

include "../../../proses/koneksi_db.php";


if (isset($_POST["addperizinan"])) {

  try {
      $nim_target = $_POST['nim_target'];
      $email_target = $_POST['email_target'];
      $nama_target = $_POST['nama_target'];
       //mengambil data
      $target_nim = trim($nim_target);
      $target_email = trim($email_target);
      $target_nama = trim($nama_target);

      // echo $target_nim .$target_nim . "<br>";
      // echo $target_email .$target_email . "<br>";
      // echo $target_nama .$target_nama . "<br>";

      $query1 = "CALL psd_perizinanpemilu('$target_nim', '$target_email', '$target_nama');";
      $result_row = mysqli_query($koneksi, $query1);

      $query2 = "UPDATE tbl_profile SET perizinan_vote='ya' WHERE nim='$target_nim';";
      $result_row = mysqli_query($koneksi, $query2);

      header("location:../tbl_user.php");

  } catch (Exception $e) {
      echo "Gagal";
  }
}

?>