<?php
include 'connect.php';
$tugas = $_POST['tugas'];

echo "<option value=''>Pilih Poin</option>";

$query = "SELECT * FROM tbl_poinupacara WHERE id_tugas=?";
$a = $db->prepare($query);
$a->bind_param("i", $tugas);
$a->execute();
$hasil = $a->get_result();
while ($row = $hasil->fetch_assoc()) {
    echo "<option value='" . $row['poin'] . "'>" . $row['poin'] . "</option>";
}
?>