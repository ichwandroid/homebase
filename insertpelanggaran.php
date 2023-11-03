<?php
include 'connect.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    date_default_timezone_set('Asia/Jakarta');
    $date = date("Y-m-d H:i:s");
    $nis = $_POST['nis'];
    $pelanggaran = $_POST['pelanggaran'];
    $homebase = $_POST['homebase'];
    $poin = $_POST['poin'];

    $sql = "INSERT INTO tbl_pelanggaran (timescan, nis, status, homebase, poin) VALUES ('$date','$nis','$pelanggaran','$homebase','$poin')";

    if ($db->query($sql) === TRUE) {
        echo "<script>alert('Berhasil Mengurangi Poin!');
        window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Ada kesalahan dalam Penginputan !');</script>";
    }

};