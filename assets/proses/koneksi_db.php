<?php
$host_db = "localhost";
$user_db = "root";
$pass_db = "";
$nama_db = "db_webhima";
$koneksi = mysqli_connect($host_db, $user_db, $pass_db, $nama_db) or die("Database Tidak Terhubung");
date_default_timezone_set("Asia/Bangkok");

//echo "terhubung";
?>