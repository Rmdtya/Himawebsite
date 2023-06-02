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

      echo $target ."<br>";
      $status = "Selesai";

      $query = mysqli_query($koneksi, "SELECT * FROM tbl_peminjaman WHERE kode_pinjam='$target'");
          while($data = mysqli_fetch_array($query)) { 
          
          $jumlah = $data['jumlah'];
          $kode_barang = $data['kode_barang'];
          
          }

      //     // echo $jumlah . $jumlah . "<br>"; 
      //     // echo $kode_barang . $kode_barang;
      $query2 = "UPDATE tbl_peminjaman SET tgl_kembali=DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i'), status_peminjaman='Selesai' WHERE kode_pinjam='$target';";
      $query3 = "UPDATE tbl_inventory SET stok=stok + '$jumlah' WHERE kode_barang='$kode_barang';";
      mysqli_query($koneksi, $query2);
      mysqli_query($koneksi, $query3);

      $query4 = "DELETE FROM tbl_peminjaman WHERE kode_pinjam='$target';";
      mysqli_query($koneksi, $query4);

      

      // $query4 = "SELECT stok FROM tbl_inventory WHERE kode_barang='$kode_barang';";
      // $result_stok = mysqli_query($koneksi, $query4);

      $antrian1 = mysqli_query($koneksi, "SELECT * FROM tbl_inventory WHERE kode_barang='$kode_barang';");
          while($data = mysqli_fetch_array($antrian1)) { 
          
          $result_stok = $data['stok'];
          }

          echo "Stok Awal : " . $result_stok ."<br>";
      // $query5 = "SELECT COUNT(*) FROM tbl_antrianpeminjaman WHERE status_peminjaman='Dalam Antrian' AND kode_barang='$kode_barang';";
      // while($data = mysqli_fetch_array($antrian1)) { 
          
      //   $result_stok = $data['stok'];
      //   }

      
      $antrian2 = "SELECT COUNT(*) as total_rows FROM tbl_antrianpeminjaman WHERE status_peminjaman='Dalam Antrian' AND kode_barang='$kode_barang';";
      $result_row = mysqli_query($koneksi, $antrian2);
        
      if ($result_row) {
        $row = mysqli_fetch_assoc($result_row);
        $totalRows = $row['total_rows'];
    
        // Menggunakan nilai variabel
        echo "Jumlah baris: " . $totalRows . "<br>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    $i = 1;
    WHILE($i <= $totalRows){
      $antrian3 = mysqli_query($koneksi, "SELECT jumlah FROM tbl_antrianpeminjaman WHERE status_peminjaman='Dalam Antrian' AND kode_barang='$kode_barang' ORDER BY tgl_pinjam ASC LIMIT 1;");
      while($data = mysqli_fetch_array($antrian3)) { 
        $result_jumlah = $data['jumlah'];
      }
      echo "Jumlah Barang : " . $result_jumlah ."<br>";

      $antrian4 = mysqli_query($koneksi, "SELECT kode_pinjam FROM tbl_antrianpeminjaman WHERE status_peminjaman='Dalam Antrian' AND kode_barang='$kode_barang' ORDER BY tgl_pinjam ASC LIMIT 1;");
      while($data = mysqli_fetch_array($antrian4)) { 
        $result_kodepinjam = $data['kode_pinjam'];
      }
      echo "Kode Target : " . $result_kodepinjam ."<br>";
      
      $antrian5 = mysqli_query($koneksi, "SELECT stok FROM tbl_inventory WHERE kode_barang='$kode_barang';");
      while($data = mysqli_fetch_array($antrian5)) { 
        $current_stok = $data['stok'];
      }
      
      
      if($current_stok >= $result_jumlah){
        // $minus = $result_jumlah;
        // $antrian6 = "UPDATE tbl_inventory SET stok=stok-'$minus'WHERE kode_barang='$kode_barang';";
        // mysqli_query($koneksi, $antrian6);
        // echo "Minus : " . $minus;
        // echo "Sisa Stok : " . $current_stok ."<br>";

        $antrian7 = "DELETE FROM tbl_antrianpeminjaman WHERE kode_pinjam='$result_kodepinjam';";
        mysqli_query($koneksi, $antrian7);
        
        echo "Delete 1 Kali" . "<br>" . "<br>";
      } else{
         $i = $totalRows + 1;
      }
      
      $i++;
      // echo $current_stok ."<br>";
      // echo $result_jumlah ."<br>";
      // echo $result_kodepinjam ."<br>";
    }

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