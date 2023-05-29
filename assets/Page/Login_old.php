<?php
include "../proses/koneksi_db.php";
//atur variabel

$err = "";
$nim = "";
$password = "";

if (isset($_POST['login'])) {
    $nim = $_POST['nim'];
    $password = $_POST['password'];

    if ($nim == '' or $password == '') {
        $err .= "<li>Harap Isi data Dengan lengkap.</li>";
    } else {

        $query = "SELECT * FROM db_users WHERE nim ='$nim' AND password='$password'";
        $result = $koneksi->query($query);

    if ($result->num_rows > 0) {
        // Jika login berhasil, lakukan tindakan yang diinginkan
        echo "Login berhasil!";
        $_SESSION['session_nim'] = $nim;
        $_SESSION['session_password'] = md5($password);
		$_SESSION['session'] = true;
        header("location:../../index.php");

    } else {
        // Jika login gagal
        $err .= "<li>Akun Tidak Sesuai</li>";
    }

        // $sql1 = "select * from db_users where nim = '$nim'";
        // $q1 = mysqli_query($koneksi, $sql1);
        // $r1 = mysqli_fetch_array($q1);

        // if ($nim == '') {
        //     $err .= "<li>NIM Tidak Terdaftar.</li>";
        // } elseif ($r1['password'] != $password) {
        //     $err .= "<li>Password yang dimasukan tidak sesuai.</li>";
        // }

        // if (empty($err)) {
        //     $_SESSION['session_nim'] = $nim;
        //     $_SESSION['session_password'] = md5($password);
		// 	$_SESSION['session'] = true;
        //     header("location:../../index.php");
        // }
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/login.css">
    
    <title>Document</title>
</head>

<body>
    <div>
        <?php if ($err) { ?>
        <div id="login-alert" class="help">
            <ul> <?php echo $err ?>
        </div>
        <?php } ?>
    </div>

    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form action="../proses/Registrasi.php" method="post">
                <h1>Create Account</h1><br><br>
                <input type="text" name="email_daftar" autocomplete="off" required placeholder="Email" />
                <input type="text" name="nim_daftar" autocomplete="off" required placeholder="NIM" />
                <input type="password" name="password_daftar" autocomplete="off" required placeholder="Password" />
                <input type="password" name="confirm_daftar" autocomplete="off" required
                    placeholder="confirm password" /><br>
                <button type="submit" name="submit_daftar" class="btn btn-primary"
                    value=<?php echo date("y:d:m:h:i:sa"); ?>>Sign Up</button>
            </form>
        </div>

        <div class="form-container sign-in-container">
            <form action=" " method="post">
                <h1>Sign in</h1><br><br>
                <input type="text" id="nim" name="nim" value="<?php echo $nim ?>" placeholder="NIM" />
                <input type="password" id="password" name="password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit" name="login" class="btn btn-success" value="login">Sign In</button>
            </form>
        </div>

        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Selamat Datang Kembali!</h1>
                    <p>Untuk melakukan voting, silahkan masuk dengan menggunakan akun anda masing-masing</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>

                <div class="overlay-panel overlay-right">
                    <h1>Halo, Warga RPL!</h1>
                    <p>Daftarkan diri anda dan mulai gunakan hak pilih anda sekarang juga!</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>

    <script src="../JS/login.js"></script>
</body>

</html>