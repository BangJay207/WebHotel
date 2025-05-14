<?php
session_start();
echo "<pre>";
// print_r($_SESSION);
echo "</pre>";
include 'koneksi.php';

// Cek apakah user adalah customer
if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'customer') {
    header("Location: customer.php");
    exit();
}

// Ambil data customer dari database
$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="website icon" type="jpg" href="../kamar/Kiana_Kaslana.jpg">
</head>

<body>
    <h1>Data User</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Nama</th>
            <th>Username</th>
            <th>Password</th>
        </tr>
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['password']; ?></td>
            </tr>
        <?php endwhile; ?>
    </table>
    <a href="customer.php">Kembali ke Dashboard</a>
</body>

</html>