<?php
$koneksi = mysqli_connect("localhost", "root", "", "db_webhima");

// if (isset($_POST["submit_daftar"])) {
//     //mengambil data
//     $email = $_POST['email_daftar'];
//     $nim = $_POST['nim_daftar'];
//     $password = $_POST['password_daftar'];
//     $submit = $_POST['submit_daftar'];

//     //query insert data
//     $query = "INSERT INTO db_users VALUES('$nim','$email','$password','$submit')";
//     mysqli_query($koneksi, $query);

//     header("location:#");
// }

$id = "subscribe";

header("Location: ../../index.php#footer");