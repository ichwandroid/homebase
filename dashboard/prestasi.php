<?php include 'header.php' ?>

<main class="flex-shrink-0">
    <div class="container">
        <h1>Dashboard Prestasi</h1>

        <table id="myTable" class="display">
            <thead>
                <tr>
                    <th>DateTime</th>
                    <th>NIS</th>
                    <th>Nama Lengkap</th>
                    <th>Kelas</th>
                    <th>Homebase</th>
                    <th>Activitas</th>
                    <th>Poin</th>
                </tr>
            </thead>
            <?php
            $data = mysqli_query($db, "SELECT * FROM tbl_prestasi INNER JOIN tbl_siswa on tbl_prestasi.nis = tbl_siswa.nis INNER JOIN tbl_poin on tbl_prestasi.status = tbl_poin.id");
            while ($a = mysqli_fetch_array($data)) {
            ?>
                <tbody>
                    <tr>
                        <td><?php echo $a['timescan'] ?></td>
                        <td><?php echo $a['nis'] ?></td>
                        <td><?php echo $a['NAMA_LENGKAP'] ?></td>
                        <td><?php echo $a['KELAS'] ?> - <?php echo $a['NAMA_KELAS'] ?></td>
                        <td><?php echo $a['homebase'] ?></td>
                        <td><?php echo $a['jenis'] ?></td>
                        <td><?php echo $a['poin'] ?></td>
                    </tr>
                </tbody>
            <?php } ?>
        </table>
    </div>
</main>

<?php include 'footer.php' ?>