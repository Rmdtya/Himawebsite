<?php
// session_start();
// if(!isset($_SESSION["session"])){
// 	header("location:../login.php");
// }

include "koneksi_db.php";

if (isset($_POST["pinjambarang"])) {

  try {
    $nim = $_POST['nim'];
    $target_kode = $_POST['target_kode'];
    $lama_pinjam = $_POST['lama_pinjam'];
    $jumlah = $_POST['jumlah'];
    $deskripsi = $_POST['deskripsi'];
    $target = trim($target_kode);
    $i = 0;

    $kode_barang = trim($target_kode);
    $jumlah_pinjam = trim($jumlah);

    $query1 = "SET AUTOCOMMIT = 0;";
    $query2 = "START TRANSACTION;";
    $query3 = "CALL psd_pinjambarang('$target', '$nim', '$jumlah', '$lama_pinjam', '$deskripsi');";
    $query4 = "ROLLBACK;";
    $query5 = "COMMIT;";
    $query6 = "CALL psd_antripinjam('$target', '$nim', '$jumlah', '$lama_pinjam', '$deskripsi');";
      //$query2 = "UPDATE tbl_inventory SET kode_barang='$kode_barang', nama_barang='$nama_barang', deskripsi='$deskripsi', stok='$stok', filter='$filter', image='$image' WHERE kode_barang LIKE '$kode_target%';";
    mysqli_query($koneksi, $query1);
    mysqli_query($koneksi, $query2);
    mysqli_query($koneksi, $query3);

    $query_stok = "SELECT stok from tbl_inventory WHERE kode_barang = '$kode_barang';";
    $result = mysqli_query($koneksi, $query_stok);
    while($data = mysqli_fetch_array($result)) { 
      $stok = $data['stok'];
    }

    $stok_now = $stok + $jumlah;
    echo $stok_now . $stok_now;

    if ($stok_now >= $jumlah) {
      mysqli_query($koneksi, $query5);
      //echo '<script>alert("Berhasil Meminjam");</script>';
      //header("location:../Page/Profile.php");

      $message = "Berhasil Meminjam";

      echo '<script>';
      echo 'alert("' . $message . '");';
      echo 'window.location.href = "../Page/Profile.php";';
      echo '</script>';

    } else {
      mysqli_query($koneksi, $query4);
      mysqli_query($koneksi, $query6);
      mysqli_query($koneksi, $query5);

      $message = "Gagal Meminjam, Stok Habis. Silahkan Menunggu Antiran";
      echo '<script>';
      echo 'alert("' . $message . '");';
      echo 'window.location.href = "../Page/Profile.php";';
      echo '</script>';
    }
      //echo $kode_target . "<br>";
      //echo $target.$target;
      //header("location:../Page/Peminjaman.php");
      echo "Berhasil";

  } catch (Exception $e) {
      echo '<script>alert("Gagal Meminjam, Silahkan Ulangi atau Hubungi Kami");</script>';
  }
}

// if (isset($_POST["deletebarang"])) {

//   try {
//       $kode_target = $_POST['delete_kode'];
//        //mengambil data
//       $target = trim($kode_target);

//       //query insert data
//       $query = "DELETE FROM tbl_inventory WHERE kode_barang = '$target';";
//        mysqli_query($koneksi, $query);

//       header("location:../tbl_inventory.php");

//   } catch (Exception $e) {
//       echo "Barang Sudah Terdaftar";
//   }
// }

?>