<?php
// session_start();
// if(!isset($_SESSION["session"])){
// 	header("location:../login.php");
// }

include "../../../proses/koneksi_db.php";


if (isset($_POST["editbarang"])) {

  try {
      $image = upload();
      $kode_target = $_POST['update_kode'];
      $kode_barang = $_POST['kode_barang'];
      $nama_barang = $_POST['nama_barang'];
      $deskripsi = $_POST['deskripsi'];
      $stok = $_POST['stok'];
      $filter = $_POST['filter'];

      $target = trim($kode_target);

      $query_image = "SELECT image from tbl_inventory WHERE kode_barang = '$target';";
      // $image_old = mysqli_query($koneksi, $query_image);


      // Menjalankan query dan mendapatkan hasilnya
        $result = mysqli_query($koneksi, $query_image);
      
      if (mysqli_num_rows($result) > 0) {
          // Mendapatkan baris pertama dari hasil query
          $row = mysqli_fetch_assoc($result);
      
          // Menyimpan nilai kolom1 ke dalam variabel
          $image_old = $row['image'];
          // Tampilkan nilai variabel
      } else {
          echo "Tidak ada hasil yang ditemukan";
      }

      //query insert data
      $query = "CALL psd_editbarang('$kode_barang', '$nama_barang', '$deskripsi', '$stok', '$filter', '$image', '$target');";
      // $query2 = "UPDATE tbl_inventory SET kode_barang='$kode_barang', nama_barang='$nama_barang', deskripsi='$deskripsi', stok='$stok', filter='$filter', image='$image' WHERE kode_barang = '$target';";
      // $query3 = "UPDATE tbl_inventory SET kode_barang='$kode_barang', nama_barang='$nama_barang', deskripsi='$deskripsi', stok='$stok', filter='$filter', image='$image' WHERE kode_barang='$target';";
      // $query4 = "UPDATE tbl_inventory SET kode_barang='$kode_barang' WHERE kode_barang='$target';";
      mysqli_query($koneksi, $query);

      //echo $kode_target . "<br>";
      //echo $target.$target;
      //echo $image_old;
      unlink('../../../image/barang/' . $image_old);
      header("location:../tbl_inventory.php");

  } catch (Exception $e) {
      echo "gagal Error, " . $e;
      echo "$target";
  }
}

if (isset($_POST["deletebarang"])) {

  try {
      $kode_target = $_POST['delete_kode'];
      $target = trim($kode_target);

      $query_image = "SELECT image from tbl_inventory WHERE kode_barang = '$target';";

      // Menjalankan query dan mendapatkan hasilnya
        $result = mysqli_query($koneksi, $query_image);
      
      if (mysqli_num_rows($result) > 0) {
          // Mendapatkan baris pertama dari hasil query
          $row = mysqli_fetch_assoc($result);
      
          // Menyimpan nilai kolom1 ke dalam variabel
          $image_old = $row['image'];
          // Tampilkan nilai variabel
      } else {
          echo "Tidak ada hasil yang ditemukan";
      }

      //query insert data
      $query = "DELETE FROM tbl_inventory WHERE kode_barang = '$target';";
       mysqli_query($koneksi, $query);
       unlink('../../../image/barang/' . $image_old);
      header("location:../tbl_inventory.php");

  } catch (Exception $e) {
      echo "Delete Gagal";
  }
}

if (isset($_POST["addbarang"])) {

  try {
       //mengambil data
      $image = upload();
      $kode_barang = $_POST['kode_barang'];
      $nama_barang = $_POST['nama_barang'];
      $deskripsi = $_POST['deskripsi'];
      $stok = $_POST['stok'];
      $filter = $_POST['filter'];

      //query insert data
      $query = "CALL psd_addbarang('$kode_barang', '$nama_barang', '$deskripsi', $stok, '$filter', '$image');";
      mysqli_query($koneksi, $query);
      header("location:../tbl_inventory.php");

  } catch (Exception $e) {
      echo "Barang Sudah Terdaftar";
  }
}

function upload() {
  // komponen yang perlu diambil ada 4: nama file, ukuran file, error, tmpName
  $namaFile = $_FILES['image']['name'];
  $ukuranFile = $_FILES['image']['size'];
  $error = $_FILES['image']['error'];
  $tmpName = $_FILES['image']['tmp_name'];

  // cek ada gambar yang diupload atau tidak
  // jika tidak ada maka jalankan 
  
  if ($error === 4) 
  {
      echo  "<script>
                  alert('Pilih gambar terlebih dahulu');
              </script>
          ";
      return false;
  }

  // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];      // ekstensi gambar yang bisa diupload, bisa di rubah sesuai kebutuhan
  $ekstensiGambar = explode('.', $namaFile);          // membagi string menjadi beberapa bagian 'namafile' '.' 'ekstensi;
  $ekstensiGambar = strtolower(end($ekstensiGambar)); // mengubah otomatis setiap ekstensi yang masuk menjadi string lowercase

  // cek apakah yang diupload termasuk bagian dari ekstensi yang valid atau tidak
  // jika tidak ada maka yg diupload bukan gambar
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
      echo  "<script>
                  alert('yang anda upload bukan gambar!');
             </script>
      ";
      return false;
  }

  // cek jika ukuran file terlalu besar
  if ( $ukuranFile > 5000000) {
      echo  "<script>
                  alert('ukuran gambar terlalu besar');
             </script>
      ";
      return false;
  }

  // jika lolos pengecekan, gambar siap upload
  // kemudian generate nama gambar baru

  // inisiasi untuk generate nama gambar baru
  $namaFileBaru = uniqid();
  $namaFileBaru .= '.';
  $namaFileBaru .= $ekstensiGambar;

  // yang diambil ke database hannya teks / string, sedangkan 'move_uploadaed_file' berguna untuk mengambil file yang diupload kemudian menyimpannya ke dalam direktory tujuan kita
  move_uploaded_file ($tmpName, '../../../image/barang/' . $namaFileBaru); // function ini berhubungan dengan atribut di form enctype

  return $namaFileBaru;
}

?>