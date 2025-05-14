<?php 
session_start();
include 'Koneksi.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM user WHERE username = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    $user = mysqli_fetch_assoc($result);

    if ($user && password_verify($password, $user['password'])) {
        $_SESSION['username'] = $user['username'];
        $_SESSION['level'] = $user['level'];

        if ($user['level'] == 'admin') {
            header('Location: ../admin/Beranda.php');
        } else {
            header('Location: ../kamar/Beranda.php');
        }
        exit();
    } else {
        echo "<script>
        alert('Username atau Password Salah!');
        document.location.href = 'login.php';
        </script>";
    }
}
