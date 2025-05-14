<?php session_start(); 
echo "<pre>";
// print_r($_SESSION);
echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="website icon" type="jpg" href="../kamar/Kiana_Kaslana.jpg">
    <style>
        body {
            font-family: Arial, sans-serif; 
            background-image: url('../kamar/life-s-captured-sparks-omBEgDTkzLw-unsplash.jpg');
            margin: 0;
            padding: 0;
        }

        nav {
            background-color: #343a40;
            color: #fff;
            padding: 1em;
        }

        nav h1 {
            margin: 0;
            display: inline-block;
        }

        nav ul {
            list-style: none;
            padding: 0;
            margin: 0;
            display: flex;
            justify-content: flex-end;
        }

        nav ul li {
            display: inline;
            margin-left: 20px;
        }

        nav ul li a {
            color: #fff;
            text-decoration: none;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        .container {
            margin-top: 50px;
        }

        h1 {
            text-align: center;
            color: white;
        }

        div h1 {
            color: #343a40;
        }

        ul {
            list-style: none;
            padding: 0;
            text-align: center;
        }

        ul li {
            display: inline-block;
            margin: 10px;
        }

        ul li a {
            text-decoration: none;
            color: #007bff;
            font-size: 18px;
        }

        ul li a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <h1>Hotel Rock Bottom</h1>
        <ul>
            <li><a href="../kamar/Beranda.php">Beranda</a></li>
            <li><a href="../kamar/kamar.php">Pesan Kamar</a></li>
            <?php if (isset($_SESSION['level']) == 'admin') : ?>
                <li><a href="tampil_admin.php">Admin Dashboard</a></li>
            <?php endif; ?>
            <li><a href="../kamar/Kontak.php">Kontak</a></li>
            <li><a href="../kamar/Info_Nomor.php">Info Nomor</a></li>
            <?php if (isset($_SESSION['username'])) : ?>
                <li><a href="../login/logout.php">Logout</a></li>
            <?php else : ?>
                <li><a href="../login/login.php">Login</a></li>
            <?php endif; ?>
        </ul>
    </nav>

    <div class="container">
        <h1>Selamat Datang, Admin <?php echo $_SESSION['username']; ?></h1>
        <ul>
            <li><a href="tampil_admin.php" class="btn btn-primary">Tampilkan Data</a></li>
            <li><a href="../login/logout.php" class="btn btn-danger">Logout</a></li>
        </ul>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>