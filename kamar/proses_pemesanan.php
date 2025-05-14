<?php 
session_start();

include 'Koneksi.php';

$id_kamar = $_POST['id_kamar'];
$no_kamar = $_POST['no_kamar'];
$tipe = $_POST['tipe'];
$lantai = $_POST['lantai'];
$fasilitas = $_POST['fasilitas'];

$querykamar = "INSERT INTO kamar (id_kamar, no_kamar, tipe, lantai, fasilitas) VALUES ('$id_kamar', '$no_kamar', '$tipe', '$lantai', '$fasilitas')";

if (mysqli_query($conn, $querykamar)) {
    echo "<script>
    alert('Data Berhasil Ditambahkan!');
    document.location.href = 'info_Pemesanan.php';
    </script>";
    } else {
        echo "<div style='padding: 20px; background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; border-radius: 4px;'>
            Data Gagal Ditambahkan! " . $querykamar . "<br>" . mysqli_error($conn) . "
            </div>";
        }

    mysqli_close($conn);
?>
