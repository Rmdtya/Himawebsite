<?php
session_start();
// if(!isset($_SESSION["session"])){
// 	header("location:../login.php");
// }

include "../proses/koneksi_db.php";


if (isset($_POST["submitvoting"])) {

  try {
      $no_target = $_POST['no_target'];
      //$nama_target = $_POST['nama_target'];
       //mengambil data
      
      $target_no = trim($no_target);
      $nim = $_SESSION['nim'];

      echo $target_no .$target_no . "<br>";
      echo "help";

      $query = "UPDATE tbl_pemilu SET voting_calon='$target_no', tanggal=DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i') WHERE nim='$nim';";
      $result_row = mysqli_query($koneksi, $query);

      header("location:../Page/Pemilu.php");


  } catch (Exception $e) {
      echo "Gagal";
  }
}

?>