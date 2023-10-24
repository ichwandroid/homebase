<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    date_default_timezone_set('Asia/Jakarta');
    $date = date("Y-m-d H:i:s");
    $nis = $_POST['nis2'];
    $tugas = $_POST['tugas'];
    $homebase = $_POST['homebase2'];
    $poin = $_POST['poinupacara'];

    $sql = "INSERT INTO tbl_prestasi (timescan, nis, status, homebase, poin) VALUES ('$date','$nis','$tugas','$homebase','$poin')";

    if ($db->query($sql) === TRUE) {
        echo "<script>alert('Berhasil menambahkan data!');
        window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Ada kesalahan dalam Penginputan !');</script>";
    }

};
