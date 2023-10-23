<?php
include 'connect.php';
$lomba = $_POST['lomba'];

echo "<option value=''>Pilih Juara</option>";

$query = "SELECT * FROM tbl_poinlomba WHERE id_lomba=?";
$a = $db->prepare($query);
$a->bind_param("i", $lomba);
$a->execute();
$hasil = $a->get_result();
while ($row = $hasil->fetch_assoc()) {
    echo "<option value='" . $row['point'] . "'>" . $row['status'] . "</option>";
}
?>