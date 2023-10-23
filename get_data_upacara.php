<?php
include 'connect.php';

echo "<option value=''>Pilih Tugas Upacara</option>";

$query = "SELECT * FROM tbl_upacara";
$a = $db->prepare($query);
$a->execute();
$hasil = $a->get_result();
while ($row = $hasil->fetch_assoc()) {
    echo "<option value='" .$row['id_tugas']. "'>" .$row['tugas']. "</option>";
}
?>