<?php
include "assets/proses/koneksi_db.php";


  $email_subs = $_POST["email_subs"];

  // Mengecek apakah email sudah tersedia dalam tabel
  $checkQuery = "SELECT * FROM tbl_subscribe WHERE email='$email_subs'";
  $result = $koneksi->query($checkQuery);

  if ($result->num_rows > 0) {
      // Jika email sudah tersedia dalam tabel
  } else {
      // Jika email belum tersedia dalam tabel, lakukan operasi INSERT
      $insertQuery = "INSERT INTO tbl_subscribe (email) VALUES ('$email_subs')";

      if ($koneksi->query($insertQuery) === TRUE) {
          // Jika operasi INSERT berhasil
      } else {
          // Jika terjadi kesalahan dalam operasi INSERT
          echo "Error: " . $insertQuery . "<br>" . $koneksi->error;
      }
  }

  ?>