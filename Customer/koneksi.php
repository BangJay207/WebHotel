<?php
$servername = "localhost";
$db = "penyewaan_hotel";
$username = "root";
$password = "";

$conn = mysqli_connect ($servername, $username, $password, $db);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
