<?php
// session_start();
// if(!isset($_SESSION["session"])){
// 	header("location:../login.php");
// }

include "koneksi_db.php";

// $target_kode = $_POST['target_kode'];
// $lama_pinjam = $_POST['lama_pinjam'];
// $jumlah = $_POST['jumlah'];
// $deskripsi = $_POST['deskripsi'];
// $target = trim($target_kode);

// echo $target . $target;
// echo "help";
// echo $lama_pinjam . "<br>";
// echo $stok . "<br>";
// echo $deskripsi;

if (isset($_POST["editprofile"])) {

  try {
    $image = upload();
    
    $nim_target = $_POST['nim'];
    $first_name = $_POST['firstname'];
    $last_name = $_POST['lastname'];
    $jk = $_POST['jk'];
    $about = $_POST['about'];
    $status = $_POST['status'];
    $prodi = $_POST['prodi'];
    $phone = $_POST['phone'];
    $instagram = $_POST['instagram'];
    $facebook = $_POST['facebook'];
    $lingkedin = $_POST['lingkedin'];
    $image_old = " ";

    //echo $nim . $nim;
    // echo $nim_target . $nim_target;
    // echo $first_name . "<br>";
    // echo $last_name . "<br>";
    // echo $about . "<br>";
    // echo $status . "<br>";
    // echo $prodi . "<br>";
    // echo $phone . "<br>";
    // echo $facebook . "<br>";
    // echo $lingkedin . "<br>";
    // echo $instagram . "<br>";
    // echo $image;
    
    echo $phone;

    $query_image = "SELECT image from tbl_profile WHERE nim = '$nim_target';";

    $result = mysqli_query($koneksi, $query_image);
      
      if (mysqli_num_rows($result) > 0) {
          // Mendapatkan baris pertama dari hasil query
          $row = mysqli_fetch_assoc($result);
      
          // Menyimpan nilai kolom1 ke dalam variabel
          $image_old = $row['image'];
          unlink('../image/profile/' . $image_old);
          // Tampilkan nilai variabel
      } else {
          echo "Tidak ada hasil yang ditemukan";
      }

    // CALL psd_editprofile('', 'Ramaditya ', 'Firdaus ', 'Pria ', 'Mahasiswa Rekayasa Perangkat Lunak yang bergelut di bidang pemograman game. Kemudian memiliki kompetensi sebagai 3 artist dan proyek management', 
    // 'Aktif', 'Rekayasa Perangkat Lunak', '082120000354', ' ', 'Ramaditya', ' ', ' ')//
      
    $query = "CALL psd_editprofile('$nim_target', '$first_name', '$last_name', '$jk', '$about', '$status', '$prodi', '$phone', '$instagram', '$facebook', '$lingkedin', '$image');";
    //   //$query2 = "UPDATE tbl_inventory SET kode_barang='$kode_barang', nama_barang='$nama_barang', deskripsi='$deskripsi', stok='$stok', filter='$filter', image='$image' WHERE kode_barang LIKE '$kode_target%';";
    mysqli_query($koneksi, $query);

    //echo $kode_target . "<br>";
    //echo $target.$target;
    header("location:../Page/Profile.php");
    echo "help";
    
  } catch (Exception $e) {
      echo "Gagal Meperbarui Data, Silahkan Ulangi atau hubungi kami";
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
  move_uploaded_file ($tmpName, '../Image/profile/' . $namaFileBaru); // function ini berhubungan dengan atribut di form enctype

  return $namaFileBaru;
}

echo "help";

if(isset($_POST["antrianpinjam"])) {
  
  try{
    $target_kode = $_POST['target_kode'];
    $target = trim($target_kode);
    
    $query = "UPDATE tbl_antrianpeminjaman SET status_peminjaman='Dalam Antrian', tgl_pinjam=DATE_FORMAT(NOW(), '%Y-%m-%d %H:%i') WHERE kode_pinjam='$target';";
    $result = mysqli_query($koneksi, $query);

    echo "berhasil";
    header("location:../Page/Profile.php");

  }
  catch(Exception $e){
    echo "gagal";
  }
}


if(isset($_POST["deleteantrian"])) {
  
  try{
    $target_kode = $_POST['delete_kode'];
    $target = trim($target_kode);
    
    $query = "UPDATE tbl_antrianpeminjaman SET status_peminjaman='Belum Selesai' WHERE kode_pinjam='$target';";
    $result = mysqli_query($koneksi, $query);

    $query2 = "DELETE FROM tbl_antrianpeminjaman WHERE kode_pinjam='$target';";
    $result = mysqli_query($koneksi, $query2);

    echo $target;
    header("location:../Page/Profile.php");
  }
  catch(Exception $e){
    echo "gagal";
  }
}

?>