<?php 
session_start();
include 'Koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username' AND password = '$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);

    if ($data['level'] == 'admin') {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'admin';
        header('Location: ../admin/Beranda.php');
    } else {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = 'customer';
        header('Location: ../kamar/Beranda.php');
    }
} else {
    echo "<script>
    alert('Username atau Password Salah!');
    document.location.href = 'login.php';
    </script>";
}