<?php 
include 'Koneksi.php';

$id = $_POST['id'];
$name = $_POST['name'];
$username = $_POST['username'];
$password = $_POST['password'];
$level = $_POST['level'];

$queryuser = "INSERT INTO user (id, name, username, password, level) VALUES ('$id', '$name', '$username', '$password', '$level')";

if (mysqli_query($conn, $queryuser)) {
    echo "<script>
    alert('Data Berhasil Ditambahkan!');
    document.location.href = 'info_user.php';
    </script>";
    } else {
        echo "<div style='padding: 20px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px;'>
            Data Gagal Ditambahkan! " . $queryuser . "<br>" . mysqli_error($conn) . "
            </div>";
        }

    mysqli_close($conn);
?>
