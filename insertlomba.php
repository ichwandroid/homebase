<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    date_default_timezone_set('Asia/Jakarta');
    $date = date("Y-m-d H:i:s");
    $nis = $_POST['nis'];
    $lomba = $_POST['lomba'];
    $juara = $_POST['juara'];

    $sql = "INSERT INTO tbl_prestasi (timescan, nis, status, poin) VALUES ('$date','$nis','$lomba','$juara')";

    if ($db->query($sql) === TRUE) {
        echo "<script>alert('Berhasil menambahkan data!');
        window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Ada kesalahan dalam Penginputan !');</script>";
    }

};
