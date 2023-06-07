<?php
// session_start();
// if(!isset($_SESSION["session"])){
// 	header("location:../login.php");
// }

include "../../../proses/koneksi_db.php";



if (isset($_POST["deleteinformasi"])) {

  try {
      $kode_target = $_POST['delete_kode'];
      $target = trim($kode_target);

      echo $target;

    $query_delete = "DELETE from tbl_informasi WHERE kode_info = '$target';";

      // Menjalankan query dan mendapatkan hasilnya
    mysqli_query($koneksi, $query_delete);
      
    header("location:../tbl_informasi.php");

  } catch (Exception $e) {
      echo "Delete Gagal";
  }
}


?>