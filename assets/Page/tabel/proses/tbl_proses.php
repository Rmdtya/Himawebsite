<?php
// session_start();
// if(!isset($_SESSION["session"])){
// 	header("location:../login.php");
// }

include "../../../proses/koneksi_db.php";


if (isset($_POST["selesaikanpinjam"])) {

  try {
      $kode_target = $_POST['pinjam_kode'];
       //mengambil data
      $target = trim($kode_target);

      echo $target .$target;
      $status = "Selesai";

      $query = "UPDATE tbl_peminjaman SET tgl_kembali=DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i'), status_peminjaman='Selesai' WHERE kode_pinjam='$target';";
      mysqli_query($koneksi, $query);

      header("location:../tbl_peminjaman.php");

  } catch (Exception $e) {
      echo "Gagal";
  }
}


// if (isset($_POST["editbarang"])) {

//   try {
//       $kode_target = $_POST['update_kode'];
//        //mengambil data
//       $kode_barang = $_POST['kode_barang'];
//       $nama_barang = $_POST['nama_barang'];
//       $deskripsi = $_POST['deskripsi'];
//       $stok = $_POST['stok'];
//       $filter = $_POST['filter'];
//       $image = $_POST['image'];

//       $target = trim($kode_target);

//       //query insert data
//       $query = "CALL psd_editbarang('$kode_barang', '$nama_barang', '$deskripsi', '$stok', '$filter', '$image', '$target');";
//       $query2 = "UPDATE tbl_inventory SET kode_barang='$kode_barang', nama_barang='$nama_barang', deskripsi='$deskripsi', stok='$stok', filter='$filter', image='$image' WHERE kode_barang = '$target';";
//       $query3 = "UPDATE tbl_inventory SET kode_barang='$kode_barang', nama_barang='$nama_barang', deskripsi='$deskripsi', stok='$stok', filter='$filter', image='$image' WHERE kode_barang='$target';";
//       $query4 = "UPDATE tbl_inventory SET kode_barang='$kode_barang' WHERE kode_barang='$target';";
//       mysqli_query($koneksi, $query);

//       //echo $kode_target . "<br>";
//       //echo $target.$target;
//       header("location:../tbl_inventory.php");

//   } catch (Exception $e) {
//       echo "gagal";
//       echo "$target";
//   }
// }

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
//       echo "Delete Gagal";
//   }
// }

// if (isset($_POST["addbarang"])) {

//   try {
//        //mengambil data
//       $kode_barang = $_POST['kode_barang'];
//       $nama_barang = $_POST['nama_barang'];
//       $deskripsi = $_POST['deskripsi'];
//       $stok = $_POST['stok'];
//       $filter = $_POST['filter'];
//       $image = $_POST['image'];

//       //query insert data
//       $query = "CALL psd_addbarang('$kode_barang', '$nama_barang', '$deskripsi', $stok, '$filter', '$image');";
//       mysqli_query($koneksi, $query);
//       header("location:../tbl_inventory.php");

//   } catch (Exception $e) {
//       echo "Barang Sudah Terdaftar";
//   }
// }

?>