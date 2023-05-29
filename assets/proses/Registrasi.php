<?php
include "koneksi_db.php";

if (isset($_POST["sign_up"])) {

    try {
         //mengambil data
        $email = $_POST['email_regist'];
        $password = $_POST['password_regist'];
        $nim = $_POST['nim_regist'];
        $submit = $_POST['sign_up'];

        //query insert data
        $query = "INSERT INTO tbl_account (Email, Password, nim, Submit) VALUES('$email','$password', $nim, NOW())";
        mysqli_query($koneksi, $query);

        header("location:../Page/Login.php");

    } catch (Exception $e) {
        echo "Data Akun Sudah Tedaftar";
    }
}

?>
