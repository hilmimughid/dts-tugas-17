<?php
include 'koneksi.php';

$username = $_POST['username'];
$password = md5($_POST['password']);

$query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$result = mysqli_query($connect, $query);
$rowcount = mysqli_num_rows($result);

if ($rowcount > 0) {
    echo "Anda berhasil login. ";
    echo "<a href='adminDashboard.html'>Admin</a>";
} else {
    echo "Anda gagal login. ";
    echo "<a href='loginForm.html'>Kembali</a>";
}

mysqli_close($connect);
