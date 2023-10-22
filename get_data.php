<?php
// Koneksi ke database
$koneksi = new mysqli("localhost", "root", "", "db_homebase");

$type = $_GET['type'];
if ($type == 'lomba') {
    $result = $koneksi->query("SELECT id_lomba, tingkat_lomba FROM tbl_lomba");
} elseif ($type == 'kota') {
    $negara = $_GET['negara'];
    $result = $koneksi->query("SELECT id, nama_kota FROM kota WHERE id_negara = $negara");
} elseif ($type == 'kota_daerah') {
    $kota = $_GET['kota'];
    $result = $koneksi->query("SELECT id, nama_kota_daerah FROM kota_daerah WHERE id_kota = $kota");
}

$options = "<option value=''>Pilih $type</option>";
while ($row = $result->fetch_assoc()) {
    $options .= "<option value='{$row['id_lomba']}'>{$row["tingkat_$type"]}</option>";
}

echo $options;
?>
