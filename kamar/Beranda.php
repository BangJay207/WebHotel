<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel Rock Bottom</title>
    <link rel="website icon" type="jpg" href="Kiana_Kaslana.jpg">
    <style>
     body {
    font-family: 'Arial', sans-serif;
    margin: 0;
    padding: 0;
    background-image: url('life-s-captured-sparks-omBEgDTkzLw-unsplash.jpg');
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    background-attachment: fixed;
    color: #333;
}

nav {
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    padding: 1em;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

nav h1 {
    margin: 0;
    font-size: 1.5em;
}

nav ul {
    list-style: none;
    padding: 0;
    margin: 0;
    display: flex;
}

nav ul li {
    margin-left: 20px;
}

nav ul li a {
    color: #fff;
    text-decoration: none;
    font-weight: bold;
    transition: color 0.3s;
}

nav ul li a:hover {
    color: #ff6347;
}

div {
    padding: 20px;
    margin: 20px;
    background-color: rgba(255, 255, 255, 0.9);
    border-radius: 8px;
    box-shadow: 0 0 15px rgba(0, 0, 0, 0.2);
}

h2 {
    color: #333;
    font-size: 1.8em;
    margin-bottom: 10px;
}

p {
    color: #666;
    line-height: 1.6;
}

footer {
    text-align: center;
    background-color: rgba(0, 0, 0, 0.8);
    color: #fff;
    position: fixed;
    width: 100%;
    height: 50px;
    line-height: 50px;
    bottom: 0;
    font-size: 0.9em;
}
    </style>
</head>

<body>
<?php session_start(); 
echo "<pre>";
// print_r($_SESSION);
echo "</pre>";

?>
<nav>
    <h1>Hotel Rock Bottom</h1>
    <ul>
        <li><a href="Beranda.php">Beranda</a></li>
        <li><a href="kamar.php">Pesan Kamar</a></li>
        
        <?php if (isset($_SESSION['level']) && $_SESSION['level'] == 'admin') : ?>
            <li><a href="info_pemesanan.php">Info Pemesanan</a></li>
        <?php endif; ?>
        
        <li><a href="Kontak.php">Kontak</a></li>
        <li><a href="Info_Nomor.php">Info Nomor</a></li>
        <li><a href="../pembayaran/Pembayaran.php">Pembayaran</a></li>
        <li><a href="../registrasi/registrasi.php">Registrasi</a></li>
        
        <?php if (isset($_SESSION['username'])) : ?>
            <li><a href="../login/logout.php">Logout</a></li>
        <?php else : ?>
            <li><a href="../login/login.php">Login</a></li>
        <?php endif; ?>
    </ul>
</nav>


    
    <div id="beranda">
        <h2>Selamat Datang Di Hotel Rock Bottom</h2>
        <p>Pengalaman menginap yang tak terlupakan di jantung kota.</p>
    </div>

    <div id="pesan">
        <h2>Pesan Kamar</h2>
        <p>Pesan kamar Anda sekarang dan nikmati penawaran spesial.</p>
    </div>

    <div id="info">
        <h2>Info Pemesanan</h2>
        <p>Informasi lengkap mengenai pemesanan dan kebijakan hotel.</p>
    </div>
    <div id="kontak">
        <h2>Kontak</h2>
        <p>Hubungi kami untuk informasi lebih lanjut.</p>
    </div>
    <div id="nomor">
        <h2>Info Nomor</h2>
        <p>Hubungi kami sekarang apabila ada sebuah pertanyaan atau keluhan</p>
    </div>
    <footer>
        <p class="foot">&copy; 2023 Hotel Rock Bottom. All rights reserved.</p>
    </footer>
</body>
</html>