<?php
session_start();
echo "<pre>";
// print_r($_SESSION);
echo "</pre>";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kamar</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="website icon" type="jpg" href="Kiana_Kaslana.jpg">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Form Pemesanan Kamar</h1>
        <form action="proses_pemesanan.php" method="post" class="mt-4">
            <input type="hidden" id="id_kamar" name="id_kamar" required>
            <div class="form-group">
                <label for="no_kamar">NO Kamar:</label>
                <input type="text" class="form-control" id="no_kamar" placeholder="Tolong Masukkan No_Kamar Anda" name="no_kamar" required>
            </div>
            <div class="form-group">
                <label for="tipe">Tipe Kamar:</label>
                <select id="tipe" name="tipe" class="form-control">
                    <option selected hidden value=""></option>
                    <option value="Reguler">Reguler</option>
                    <option value="Premium">Premium</option>
                    <option value="Deluxe">Deluxe</option>
                    <option value="VIP Class">VIP Class</option>
                    <option value="VVIP Class">VVIP Class</option>
                </select>
            </div>
            <div class="form-group">
                <label for="lantai">Lantai:</label>
                <select name="lantai" id="lantai" class="form-control">
                    <option selected hidden value=""></option>
                    <option value="1A">Lantai 1A Reguler</option>
                    <option value="1B">Lantai 1B Reguler</option>
                    <option value="1C">Lantai 1C Reguler</option>
                    <option value="1D">Lantai 1D Reguler</option>
                    <option value="2A">Lantai 2A Premium</option>
                    <option value="2B">Lantai 2B Premium</option>
                    <option value="2C">Lantai 2C Premium</option>
                    <option value="2D">Lantai 2D Premium</option>
                    <option value="3A">Lantai 3A Deluxe</option>
                    <option value="3B">Lantai 3B Deluxe</option>
                    <option value="3C">Lantai 3C Deluxe</option>
                    <option value="3D">Lantai 3D Deluxe</option>
                    <option value="4A">Lantai 4A VIP Class</option>
                    <option value="4B">Lantai 4B VIP Class</option>
                    <option value="4C">Lantai 4C VIP Class</option>
                    <option value="4D">Lantai 4D VIP Class</option>
                    <option value="5A">Lantai 5A VVIP Class</option>
                    <option value="5B">Lantai 5B VVIP Class</option>
                    <option value="5C">Lantai 5C VVIP Class</option>
                    <option value="5D">Lantai 5D VVIP Class</option>
                </select>
            </div>
            <div class="form-group">
                <label for="fasilitas">Fasilitas:</label>
                <select name="fasilitas" id="fasilitas" class="form-control">
                    <option selected hidden value=""></option>
                    <option value="AC">AC</option>
                    <option value="AC+Wifi">AC+Wifi</option>
                    <option value="AC+Wifi+Bathtub">AC+Wifi+Bathtub</option>
                    <option value="Single_Bed">Single Bed</option>
                    <option value="Double_Bed">Double Bed</option>
                    <option value="Special_Valentine">Special Valentine</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary btn-block">Pesan Sekarang</button>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>