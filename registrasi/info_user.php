<?php 
include 'Koneksi.php';
$maxId = $conn->query("SELECT MAX(id) AS id FROM user");
$rowMaxId = $maxId->fetch_assoc();
$queryuser = $conn->query("SELECT * FROM user WHERE id = " . $rowMaxId['id']);
$result = $queryuser->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Info Registrasi</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="website icon" type="jpg" href="Kiana_Kaslana.jpg">
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <div id="branding">
                <h1>Info Registrasi</h1>
            </div>
            <nav>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link text-white" href="../kamar/Beranda.php">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../kamar/Info_Nomor.php">Info Nomor</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../kamar/Kontak.php">Kontak</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="../kamar/kamar.php">Pesan Kamar</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="showcase py-5 text-center bg-light"> 
        <div class="container">
            <h1>Welcome to Registration</h1>
            <p>Please Check Your Registration</p>
        </div>
    </section>

    <h1>Silahkan Login</h1>
        <nav>
            <ul>
                <li><a href="../login/login.php">Login</a></li>
            </ul>
        </nav>


    <section class="info py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Info Registrasi</h2>
                    <p><strong>Nama:</strong> <?php echo $result['name']; ?></p>
                    <p><strong>Username:</strong> <?php echo $result['username']; ?></p>
                    <p><strong>Password:</strong> <?php echo $result['password']; ?></p>
                    <p><strong>Level:</strong> <?php echo $result['level']; ?></p>
                </div>
            </div>
        </div>
    </section>

    <footer class="bg-dark text-white text-center py-3">
        <p>&copy; 2023 Hotel Rock Bottom. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>