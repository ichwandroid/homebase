<?php
include 'connect.php';
$tambahan = $_POST['tambahan'];

echo "<option value=''>Pilih Juara</option>";

$query = "SELECT * FROM tbl_pointambahan WHERE id_tambahan=?";
$a = $db->prepare($query);
$a->bind_param("i", $tambahan);
$a->execute();
$hasil = $a->get_result();
while ($row = $hasil->fetch_assoc()) {
    echo "<option value='" . $row['poin'] . "'>" . $row['poin'] . "</option>";
}
?>