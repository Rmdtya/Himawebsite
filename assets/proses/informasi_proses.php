<?php
session_start();
// if(!isset($_SESSION["session"])){
// 	header("location:../login.php");
// }

include "../proses/koneksi_db.php";


if ($_SERVER["REQUEST_METHOD"] == "POST") {

  try{
    // Menerima data dari form
    $title = $_POST['title'];
    $tanggal = $_POST['tanggal'];
    $topik = $_POST['topik'];
    $texts1 = $_POST['text1'];
    $texts2 = $_POST['text2'];
    $texts3 = $_POST['text3'];
    $texts4 = $_POST['text4'];
    $texts5 = $_POST['text5'];
    $texts6 = $_POST['text6'];


  $jumlahdata = 1;
    // sub_title
    foreach ($texts1 as $index1 => $text1) {
      $texts1[$index1] = $text1;
      // echo "Index ke-".$index1 ." : ". $texts1[$index1]; 
      $jumlahdata = $index1 + 1;
    }

    // deskripsi
    foreach ($texts2 as $index2 => $text2) {
      $texts2[$index2] = $text2;
    }

    // poin plus 1
    foreach ($texts3 as $index3 => $text3) {
      $texts3[$index3] = $text3;
    }

    // poin desc 1
    foreach ($texts4 as $index4 => $text4) {
      $texts4[$index4] = $text4;
    }

    // poin plus 2
    foreach ($texts5 as $index5 => $text5) {
      $texts5[$index5] = $text5;
    }

    // poin desc 2
    foreach ($texts6 as $index6 => $text6) {
      $texts6[$index6] = $text6;
    }

  $namaFileArray = $_FILES['image']['name'];
  $ukuranFileArray = $_FILES['image']['size'];
  $errorArray = $_FILES['image']['error'];
  $tmpNameArray = $_FILES['image']['tmp_name'];

  // Loop untuk memanggil fungsi upload()
  foreach ($namaFileArray as $index => $namaFile) {
      $ukuranFile = $ukuranFileArray[$index];
      $error = $errorArray[$index];
      $tmpName = $tmpNameArray[$index];
    
      // Memanggil fungsi upload() untuk setiap file
      $namaFileBaru = upload($namaFile, $ukuranFile, $error, $tmpName);
    
      // Menampilkan nama file baru jika berhasil diunggah
      if ($namaFileBaru !== false) {
          echo "File " . $namaFileBaru . " berhasil diunggah.<br>";
          $namaimage[$index] = $namaFileBaru;
      }
  }

      for($i=0; $i < $jumlahdata; $i++){
      echo $namaimage[$i] . "<br>";
      }

  if($jumlahdata == 1){

      if($namaimage[0] != null){
      $query1 = "INSERT INTO tbl_informasi(judul, tanggal, topik, jumlah_data, sub_title1, deskripsi1,
      poinplus1_1, poinplus1_2, poindesc1_1, poindesc1_2, 
      image1) 
      VALUES ('$title','$tanggal', '$topik', '$jumlahdata', '$texts1[0]', '$texts2[0]', '$texts3[0]','$texts5[0]',
      '$texts4[0]','$texts6[0]', '$namaimage[0]')
      ";
      mysqli_query($koneksi, $query1);
      $message = "Berhasil Menambahkan Informasi";
      echo '<script>';
      echo 'alert("' . $message . '");';
      echo 'window.location.href = "../Page/Informasi.php";';
      echo '</script>';
      }else{
        $message = "Gagal Menambahkan Berita";
        echo '<script>';
        echo 'alert("' . $message . '");';
        echo 'window.location.href = "../Page/Informasi.php";';
        echo '</script>';
      }
  }

  if($jumlahdata == 2){
      if($namaimage[1] != null){
      $query3 = "INSERT INTO tbl_informasi(judul, tanggal, topik, jumlah_data, sub_title1, sub_title2, deskripsi1, deskripsi2, 
      poinplus1_1, poinplus1_2, poinplus2_1, poinplus2_2, poindesc1_1, poindesc1_2, poindesc2_1, poindesc2_2, 
      image1, image2) 
      VALUES ('$title','$tanggal', '$topik', '$jumlahdata', '$texts1[0]','$texts1[1]','$texts2[0]','$texts2[1]', '$texts3[0]','$texts5[0]','$texts3[1]','$texts5[1]',
      '$texts4[0]','$texts6[0]','$texts4[1]','$texts6[1]', '$namaimage[0]','$namaimage[1]')
      ";
      mysqli_query($koneksi, $query3);
      $message = "Berhasil Menambahkan Informasi";
      echo '<script>';
      echo 'alert("' . $message . '");';
      echo 'window.location.href = "../Page/Informasi.php";';
      echo '</script>';
      }else{
        $message = "Gagal Menambahkan Berita";
        echo '<script>';
        echo 'alert("' . $message . '");';
        echo 'window.location.href = "../Page/Informasi.php";';
        echo '</script>';
      }
  }

  if($jumlahdata == 3){
    if($namaimage[1] != null){
      $query3 = "INSERT INTO tbl_informasi(judul, tanggal, topik, jumlah_data, sub_title1, sub_title2, sub_title3, deskripsi1, deskripsi2, deskripsi3, 
      poinplus1_1, poinplus1_2, poinplus2_1, poinplus2_2, poinplus3_1, poinplus3_2, poindesc1_1, poindesc1_2, poindesc2_1, poindesc2_2, poindesc3_1, poindesc3_2, 
      image1, image2, image3) 
      VALUES ('$title','$tanggal', '$topik', '$jumlahdata', '$texts1[0]','$texts1[1]','$texts1[2]','$texts2[0]','$texts2[1]','$texts2[2]','$texts3[0]','$texts5[0]','$texts3[1]','$texts5[1]','$texts3[2]','$texts5[2]',
      '$texts4[0]','$texts6[0]','$texts4[1]','$texts6[1]','$texts4[2]','$texts6[2]','$namaimage[0]','$namaimage[1]','$namaimage[2]')
      ";
      mysqli_query($koneksi, $query3);
      echo "Eksekusi Data 3". "<br>";

      $message = "Berhasil Menambahkan Informasi";
      echo '<script>';
      echo 'alert("' . $message . '");';
      echo 'window.location.href = "../Page/Informasi.php";';
      echo '</script>';
    }else{
      $message = "Gagal Menambahkan Berita";
      echo '<script>';
      echo 'alert("' . $message . '");';
      echo 'window.location.href = "../Page/Informasi.php";';
      echo '</script>';
    }
  }

  }catch (Exception $e) {
    $message = "Gagal Menambahkan Berita";
      echo '<script>';
      echo 'alert("' . $message . '");';
      echo 'window.location.href = "../Page/Informasi.php";';
      echo '</script>';
}

}

echo "Jumlah Data : ". $jumlahdata;

// Fungsi upload() yang diperbarui
function upload($namaFile, $ukuranFile, $error, $tmpName) {
    // Cek apakah file diupload atau tidak
    if ($error === 4) {
      $message = "Silahkan Pilih Gambar Terlebih Dahulu";
      echo '<script>';
      echo 'alert("' . $message . '");';
      echo '</script>';
        return false;
    }

    // cek apakah yang diupload adalah gambar
    // cek apakah yang diupload adalah gambar
  $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];      // ekstensi gambar yang bisa diupload, bisa di rubah sesuai kebutuhan
  $ekstensiGambar = explode('.', $namaFile);          // membagi string menjadi beberapa bagian 'namafile' '.' 'ekstensi;
  $ekstensiGambar = strtolower(end($ekstensiGambar)); // mengubah otomatis setiap ekstensi yang masuk menjadi string lowercase

  // cek apakah yang diupload termasuk bagian dari ekstensi yang valid atau tidak
  // jika tidak ada maka yg diupload bukan gambar
  if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
    $message = "Extensi File Bukan Gambar, Silahkan Input File Dengan Benar";
    echo '<script>';
    echo 'alert("' . $message . '");';
    echo '</script>';
      return false;
  }

  // cek jika ukuran file terlalu besar
  if ( $ukuranFile > 5000000) {
    $message = "Ukuran Gambar Terlalu Besar, Silahkan Perkecil atau Pilih Gambar Lain";
    echo '<script>';
    echo 'alert("' . $message . '");';
    echo '</script>';
      return false;
  }
  

    // Inisiasi untuk generate nama gambar baru
    $ekstensiGambar = strtolower(pathinfo($namaFile, PATHINFO_EXTENSION));
    $namaFileBaru = uniqid() . '.' . $ekstensiGambar;

    // Memindahkan file ke folder tujuan
    move_uploaded_file($tmpName, '../Image/informasi/' . $namaFileBaru);

    return $namaFileBaru;
}

?>