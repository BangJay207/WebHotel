<?php
session_start();

include 'Koneksi.php';

$maxId = $conn->query("SELECT MAX(id_kamar) AS id FROM kamar");
    $rowMaxId = $maxId->fetch_assoc();
($rowMaxId);
    $querykamar = $conn->query("SELECT * FROM kamar WHERE id_kamar = " . $rowMaxId['id']);
$result = $querykamar->fetch_assoc();
($result);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Info - Hotel</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .nav {
            gap: 10px;
        }

        .footer {
            position: absolute;
            width: 100%;
            height: 80px;
            line-height: 80px;
            font-size: 20px;
            bottom: 0;
        }
    </style>
</head>
<body>
    <header class="bg-dark text-white py-3">
        <div class="container">
            <div id="branding">
                <h1>Hotel Rock Bottom</h1>
            </div>
            <nav>
                <ul class="nav gap-4">
                    <li class="nav-item"><a href="Beranda.php">Beranda</a></li>
                    <li class="nav-item"><a href="Info_Nomor.php">Info Nomor</a></li>
                    <li class="nav-item"><a href="Kontak.php">Kontak</a></li>
                    <li class="nav-item"><a href="kamar.php">Pesan Kamar</a></li>
                    <li class="nav-item"><a href="../registrasi/registrasi.php"></a></li>
                </ul>
            </nav>
        </div>
    </header>

    

    <section class="showcase py-5 text-center bg-light"> 
        <div class="container">
            <h1>Welcome to Our Hotel</h1>
            <p>Experience the best stay with us</p>
        </div>
    </section>

    <section class="info py-5">
        <div class="container">
            <h2>Booking Information</h2>
                <p><strong>NO Kamar:</strong> <?php echo $result['no_kamar']; ?></p>
                <p><strong>Tipe:</strong> <?php echo $result['tipe']; ?></p>
                <p><strong>Lantai:</strong> <?php echo $result['lantai']; ?></p>
                <p><strong>Fasilitas:</strong> <?php echo $result['fasilitas']; ?></p>
        </div>
    </section>

    <footer class="footer bg-dark text-white text-center">
        <p>&copy; 2023 Hotel Rock Bottom. All rights reserved.</p>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>