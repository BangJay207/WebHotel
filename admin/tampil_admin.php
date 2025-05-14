<?php
session_start();
echo "<pre>";
// print_r($_SESSION);
echo "</pre>";
include 'koneksi.php';

if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'admin') {
    header("Location: admin.php");
    exit();
}

$query = "SELECT * FROM user";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Pemesanan</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="website icon" type="jpg" href="../kamar/Kiana_Kaslana.jpg">
</head>

<body class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6">
        <h1 class="text-3xl font-bold text-center mb-6">Data Admin</h1>
        <div class="overflow-x-auto">
            <table class="table-auto w-full border-collapse border border-gray-300 bg-white shadow-md">
                <thead>
                    <tr class="bg-gray-200">
                        <th class="border border-gray-300 px-4 py-2">ID</th>
                        <th class="border border-gray-300 px-4 py-2">Nama</th>
                        <th class="border border-gray-300 px-4 py-2">Username</th>
                        <th class="border border-gray-300 px-4 py-2">Password</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr class="hover:bg-gray-100">
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['id']; ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['name']; ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['username']; ?></td>
                            <td class="border border-gray-300 px-4 py-2 text-center"><?php echo $row['password']; ?></td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-6">
            <a href="admin.php" class="text-blue-500 hover:underline font-semibold">Kembali ke Dashboard</a>
        </div>
    </div>
</body>

</html>

