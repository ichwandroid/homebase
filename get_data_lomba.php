<?php
include 'connect.php';

echo "<option value=''>Pilih Tingkat Lomba</option>";

$query = "SELECT * FROM tbl_lomba";
$a = $db->prepare($query);
$a->execute();
$hasil = $a->get_result();
while ($row = $hasil->fetch_assoc()) {
    echo "<option value='" .$row['id_lomba']. "'>" .$row['tingkat_lomba']. "</option>";
}
?>