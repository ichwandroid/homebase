<?php include 'connect.php' ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homebase Points</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,700,700i%7CMaitree:200,300,400,600,700&amp;subset=latin-ext" rel="stylesheet">
    <link rel="stylesheet" type="text/css" media="all" href="css/webslides.css">
    <link rel="stylesheet" type="text/css" media="all" href="css/svg-icons.css">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="theme-color" content="#333333">
</head>

<body>
    <main role="main">
        <article id="webslides">
            <section>
                <div class="wrap aligncenter">
                    <h3>Welcome To Homebase</h3>
                    <p class="text-intro">Anak Saleh Elementary School.</p>
                </div>
            </section>
            <section class="bg-red slide current">
                <div class="wrap">
                    <div class="grid vertical-align">
                        <div class="column">
                            <h2>Homebase Merah</h2>
                            <p class="text-intro">Update per-tanggal <?php echo date('d M Y'); ?></p>
                            <ul class="description">
                                <li>
                                    <h4 class="text-label">PRESTASI :
                                        <?php
                                        $data = $db->query("SELECT * FROM tbl_prestasi WHERE homebase='merah'");
                                        $totalprestasi = 0;
                                        while ($a = $data->fetch_array()) {
                                            $totalprestasi += $a["poin"];
                                        }
                                        echo $totalprestasi;
                                        ?>
                                    </h4>
                                </li>
                                <li>
                                    <h4 class="text-label">PELANGGARAN :
                                        <?php
                                        $data = $db->query("SELECT * FROM tbl_pelanggaran WHERE homebase='merah'");
                                        $totalpelanggaran = 0;
                                        while ($a = $data->fetch_array()) {
                                            $totalpelanggaran += $a["poin"];
                                        }
                                        echo $totalpelanggaran;
                                        ?>
                                    </h4>
                                </li>
                            </ul>
                        </div>
                        <!-- end .column-->
                        <div class="column content-right bg-trans-dark fadeInUp">
                            <h3>Poin Sementara</h3>
                            <h1 class="text-data">
                                <?php
                                $poinawal = 500;
                                $totalpoin = $poinawal + $totalprestasi - $totalpelanggaran;
                                echo $totalpoin;
                                ?>
                            </h1>
                        </div>
                        <!-- end figure-->
                    </div>
                    <!-- end .grid-->
                </div>
            </section>
            <section class="bg-yellow">
                <div class="wrap">
                    <div class="grid vertical-align">
                        <div class="column">
                            <h2>Homebase Kuning</h2>
                            <p class="text-intro">Update per-tanggal <?php echo date('d M Y'); ?></p>
                            <ul class="description">
                                <li>
                                    <h4 class="text-label">PRESTASI :
                                        <?php
                                        $data = $db->query("SELECT * FROM tbl_prestasi WHERE homebase='kuning'");
                                        $totalprestasi = 0;
                                        while ($a = $data->fetch_array()) {
                                            $totalprestasi += $a["poin"];
                                        }
                                        echo $totalprestasi;
                                        ?>
                                    </h4>
                                </li>
                                <li>
                                    <h4 class="text-label">PELANGGARAN :
                                        <?php
                                        $data = $db->query("SELECT * FROM tbl_pelanggaran WHERE homebase='kuning'");
                                        $totalpelanggaran = 0;
                                        while ($a = $data->fetch_array()) {
                                            $totalpelanggaran += $a["poin"];
                                        }
                                        echo $totalpelanggaran;
                                        ?>
                                    </h4>
                                </li>
                            </ul>
                        </div>
                        <!-- end .column-->
                        <div class="column content-right bg-trans-dark fadeInUp">
                            <h3>Poin Sementara</h3>
                            <h1 class="text-data">
                                <?php
                                $poinawal = 500;
                                $totalpoin = $poinawal + $totalprestasi - $totalpelanggaran;
                                echo $totalpoin;
                                ?>
                            </h1>
                        </div>
                        <!-- end figure-->
                    </div>
                    <!-- end .grid-->
                </div>
            </section>
            <section class="bg-green">
                <div class="wrap">
                    <div class="grid vertical-align">
                        <div class="column">
                            <h2>Homebase Hijau</h2>
                            <p class="text-intro">Update per-tanggal <?php echo date('d M Y'); ?></p>
                            <ul class="description">
                                <li>
                                    <h4 class="text-label">PRESTASI :
                                        <?php
                                        $data = $db->query("SELECT * FROM tbl_prestasi WHERE homebase='hijau'");
                                        $totalprestasi = 0;
                                        while ($a = $data->fetch_array()) {
                                            $totalprestasi += $a["poin"];
                                        }
                                        echo $totalprestasi;
                                        ?>
                                    </h4>
                                </li>
                                <li>
                                    <h4 class="text-label">PELANGGARAN :
                                        <?php
                                        $data = $db->query("SELECT * FROM tbl_pelanggaran WHERE homebase='hijau'");
                                        $totalpelanggaran = 0;
                                        while ($a = $data->fetch_array()) {
                                            $totalpelanggaran += $a["poin"];
                                        }
                                        echo $totalpelanggaran;
                                        ?>
                                    </h4>
                                </li>
                            </ul>
                        </div>
                        <!-- end .column-->
                        <div class="column content-right bg-trans-dark fadeInUp">
                            <h3>Poin Sementara</h3>
                            <h1 class="text-data">
                                <?php
                                $poinawal = 500;
                                $totalpoin = $poinawal + $totalprestasi - $totalpelanggaran;
                                echo $totalpoin;
                                ?>
                            </h1>
                        </div>
                        <!-- end figure-->
                    </div>
                    <!-- end .grid-->
                </div>
            </section>
            <section class="bg-primary">
                <div class="wrap">
                    <div class="grid vertical-align">
                        <div class="column">
                            <h2>Homebase Biru</h2>
                            <p class="text-intro">Update per-tanggal <?php echo date('d M Y'); ?></p>
                            <ul class="description">
                                <li>
                                    <h4 class="text-label">PRESTASI :
                                        <?php
                                        $data = $db->query("SELECT * FROM tbl_prestasi WHERE homebase='biru'");
                                        $totalprestasi = 0;
                                        while ($a = $data->fetch_array()) {
                                            $totalprestasi += $a["poin"];
                                        }
                                        echo $totalprestasi;
                                        ?>
                                    </h4>
                                </li>
                                <li>
                                    <h4 class="text-label">PELANGGARAN :
                                        <?php
                                        $data = $db->query("SELECT * FROM tbl_pelanggaran WHERE homebase='biru'");
                                        $totalpelanggaran = 0;
                                        while ($a = $data->fetch_array()) {
                                            $totalpelanggaran += $a["poin"];
                                        }
                                        echo $totalpelanggaran;
                                        ?>
                                    </h4>
                                </li>
                            </ul>
                        </div>
                        <!-- end .column-->
                        <div class="column content-right bg-trans-dark fadeInUp">
                            <h3>Poin Sementara</h3>
                            <h1 class="text-data">
                                <?php
                                $poinawal = 500;
                                $totalpoin = $poinawal + $totalprestasi - $totalpelanggaran;
                                echo $totalpoin;
                                ?>
                            </h1>
                        </div>
                        <!-- end figure-->
                    </div>
                    <!-- end .grid-->
                </div>
            </section>
            <section class="bg-purple">
                <div class="wrap">
                    <div class="grid vertical-align">
                        <div class="column">
                            <h2>Homebase Ungu</h2>
                            <p class="text-intro">Update per-tanggal <?php echo date('d M Y'); ?></p>
                            <ul class="description">
                                <li>
                                    <h4 class="text-label">PRESTASI :
                                        <?php
                                        $data = $db->query("SELECT * FROM tbl_prestasi WHERE homebase='ungu'");
                                        $totalprestasi = 0;
                                        while ($a = $data->fetch_array()) {
                                            $totalprestasi += $a["poin"];
                                        }
                                        echo $totalprestasi;
                                        ?>
                                    </h4>
                                </li>
                                <li>
                                    <h4 class="text-label">PELANGGARAN :
                                        <?php
                                        $data = $db->query("SELECT * FROM tbl_pelanggaran WHERE homebase='ungu'");
                                        $totalpelanggaran = 0;
                                        while ($a = $data->fetch_array()) {
                                            $totalpelanggaran += $a["poin"];
                                        }
                                        echo $totalpelanggaran;
                                        ?>
                                    </h4>
                                </li>
                            </ul>
                        </div>
                        <!-- end .column-->
                        <div class="column content-right bg-trans-dark fadeInUp">
                            <h3>Poin Sementara</h3>
                            <h1 class="text-data">
                                <?php
                                $poinawal = 500;
                                $totalpoin = $poinawal + $totalprestasi - $totalpelanggaran;
                                echo $totalpoin;
                                ?>
                            </h1>
                        </div>
                        <!-- end figure-->
                    </div>
                    <!-- end .grid-->
                </div>
            </section>
        </article>
    </main>

    <script src="js/webslides.js"></script>

    <script>
        window.ws = new WebSlides({ autoslide: 5000 });
    </script>

    <script defer src="js/svg-icons.js"></script>
</body>

</html>