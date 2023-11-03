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
            <section>
                <div class="wrap">
                    <div class="grid vertical-align">
                        <div class="column">
                            <h2>Homebase Merah</h2>
                            <p class="text-intro">We worked closely with the very talented people. Content demo. </p>
                            <ul class="description">
                                <li>
                                    <span class="text-label">PRESTASI:</span>
                                    <?php
                                     $data = $db->query("SELECT * FROM tbl_prestasi WHERE homebase='merah'");
                                     $total = 0;
                                     while ($a = $data->fetch_array()) {
                                        $total += $a["poin"];
                                     }
                                     echo $total;
                                    ?>
                                </li>
                                <li>
                                    <span class="text-label">PELANGGARAN:</span>
                                    <?php
                                     $data = $db->query("SELECT * FROM tbl_pelanggaran WHERE homebase='merah'");
                                     $total = 0;
                                     while ($a = $data->fetch_array()) {
                                        $total += $a["poin"];
                                     }
                                     echo $total;
                                    ?>
                                </li>
                            </ul>
                        </div>
                        <!-- end .column-->
                        <div class="column">
                            <h1>
                                <?php
                                 $poinawal = 500;
                                 echo $poinawal;
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
        window.ws = new WebSlides();
    </script>

    <script defer src="js/svg-icons.js"></script>
</body>

</html>