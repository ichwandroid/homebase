<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PRESTASI HOMEBASE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
    <style>
        .bg-indigo {
            background-color: #6610f2;
        }
    </style>
</head>

<body>
    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Achievement Record</h1>
                </div>
                <form name="listMenu">
                    <div class="modal-body">
                        <ul class="list-group">
                            <li class="list-group-item list-group-item-action">
                                <input class="form-check-input me-1" type="checkbox" value='<span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">Penilaian Peserta Lomba</span>' id="radio1" name="status" onclick="if(this.checked) {document.listMenu.radio2.checked=false;document.listMenu.radio3.checked=false;myFunction();}">
                                <label class="form-check-label stretched-link" for="radio1">Penilaian Peserta Lomba</label>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <input class="form-check-input me-1" type="checkbox" value='<span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">Penilaian Petugas Upacara</span>' id="radio2" name="status" onclick="if(this.checked) {document.listMenu.radio1.checked=false;document.listMenu.radio3.checked=false;myFunction();}">
                                <label class="form-check-label stretched-link" for="radio2">Penilaian Petugas Upacara</label>
                            </li>
                            <li class="list-group-item list-group-item-action">
                                <input class="form-check-input me-1" type="checkbox" value='<span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">Penilaian Tambahan</span>' id="radio3" name="status" onclick="if(this.checked) {document.listMenu.radio2.checked=false;document.listMenu.radio1.checked=false;myFunction();}">
                                <label class="form-check-label stretched-link" for="radio3">Penilaian Tambahan</label>
                            </li>
                        </ul>
                    </div>
                </form>
                <div id="formLomba" style="display: none;">
                    <form action="insertlomba.php" method="post">
                        <div class="modal-body p-3">
                            <div class="input-group">
                                <input type="text" id="nis1" name="nis1" placeholder="Search..." aria-label="First name" class="form-control" autocomplete="off">
                                <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                            </div>
                            <ol class="list-group list-group-numbered" id="resultlist1"></ol>
                            <small><i>Silahkan ketik Nama Lengkap / Nama Panggilan / Kelas / Homebase</i></small>
                            <input type="text" id="homebase1" name="homebase1" aria-label="First name" class="form-control" hidden>
                        </div>
                        <div class="modal-body p-3">
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" id="lomba" name="lomba">
                                </select>
                            </div>
                        </div>
                        <div class="modal-body p-3 pt-0">
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" id="juara" name="juara">
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary"></input>
                        </div>
                    </form>
                </div>
                <div id="formUpacara" style="display: none;">
                    <form action="insertupacara.php" method="post">
                        <div class="modal-body p-3">
                            <div class="input-group">
                                <input type="text" id="nis2" name="nis2" placeholder="Search..." aria-label="First name" class="form-control" autocomplete="off">
                                <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                            </div>
                            <ol class="list-group list-group-numbered" id="resultlist2"></ol>
                            <small><i>Silahkan ketik Nama Lengkap / Nama Panggilan / Kelas / Homebase</i></small>
                            <input type="text" id="homebase2" name="homebase2" aria-label="First name" class="form-control" hidden>
                        </div>
                        <div class="modal-body p-3">
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" id="tugas" name="tugas">
                                </select>
                            </div>
                        </div>
                        <div class="modal-body p-3 pt-0">
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" id="poinupacara" name="poinupacara">
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary"></input>
                        </div>
                    </form>
                </div>
                <div id="formSikap" style="display: none;">
                    <form action="inserttambahan.php" method="post">
                        <div class="modal-body p-3">
                            <div class="input-group">
                                <input type="text" id="nis3" name="nis3" placeholder="Search..." aria-label="First name" class="form-control" autocomplete="off">
                                <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                            </div>
                            <ol class="list-group list-group-numbered" id="resultlist3"></ol>
                            <small><i>Silahkan ketik Nama Lengkap / Nama Panggilan / Kelas / Homebase</i></small>
                            <input type="text" id="homebase3" name="homebase3" aria-label="First name" class="form-control" hidden>
                        </div>
                        <div class="modal-body p-3">
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" id="tambahan" name="tambahan">
                                </select>
                            </div>
                        </div>
                        <div class="modal-body p-3 pt-0">
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" id="pointambahan" name="pointambahan">
                                </select>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="submit" value="Simpan" class="btn btn-primary"></input>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script type="text/javascript">
        $(window).on('load', function() {
            $('#staticBackdrop').modal('show');
        });
    </script>
    <script>
        $(document).ready(function() {
            $.ajaxSetup({
                cache: false
            });
            $('#nis1').keyup(function() {
                $('#resultlist1').html('');
                var searchField = $('#nis1').val();
                var expression = new RegExp(searchField, "i");

                $.getJSON('js/tbl_datahome.json', function(data) {
                    $.each(data, function(key, value) {
                        if (value.NIS.search(expression) != -1 || value.KELAS.search(expression) != -1 || value.NAMA.search(expression) != -1 || value.HOMEBASE.search(expression) != -1 || value.NAMA_KELAS.search(expression) != -1) {
                            $('#resultlist1').append(`
                        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-action ">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">` + value.NAMA + `</div>
                            <small>` + value.KELAS + `-` + value.NAMA_KELAS + `</small>
                            </div>
                            <span class="badge bg-` + value.THEME_COLOR + `">` + value.HOMEBASE + `</span>
                            <span class="nis" hidden>` + value.NIS + `</span>
                            <span class="homebase" hidden>` + value.HOMEBASE + `</span>
                        </li>
                        `);
                        }
                    });
                });
            });

            $('#resultlist1').on('click', 'li', function() {
                let nis = $(this).children('.nis').text();
                let homebase = $(this).children('.homebase').text();

                $('#nis1').val(nis);
                $('#homebase1').val(homebase);
                $("#resultlist1").html('');
            });

            // ============================================== //

            $('#nis2').keyup(function() {
                $('#resultlist2').html('');
                var searchField = $('#nis2').val();
                var expression = new RegExp(searchField, "i");

                $.getJSON('js/tbl_datahome.json', function(data) {
                    $.each(data, function(key, value) {
                        if (value.NIS.search(expression) != -1 || value.KELAS.search(expression) != -1 || value.NAMA.search(expression) != -1 || value.HOMEBASE.search(expression) != -1 || value.NAMA_KELAS.search(expression) != -1) {
                            $('#resultlist2').append(`
                        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-action ">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">` + value.NAMA + `</div>
                            <small>` + value.KELAS + `-` + value.NAMA_KELAS + `</small>
                            </div>
                            <span class="badge bg-` + value.THEME_COLOR + `">` + value.HOMEBASE + `</span>
                            <span class="nis" hidden>` + value.NIS + `</span>
                            <span class="homebase" hidden>` + value.HOMEBASE + `</span>
                        </li>
                        `);
                        }
                    });
                });
            });

            $('#resultlist2').on('click', 'li', function() {
                let nis = $(this).children('.nis').text();
                let homebase = $(this).children('.homebase').text();

                $('#nis2').val(nis);
                $('#homebase2').val(homebase);
                $("#resultlist2").html('');
            });

            // =============================================== //

            $('#nis3').keyup(function() {
                $('#resultlist3').html('');
                var searchField = $('#nis3').val();
                var expression = new RegExp(searchField, "i");

                $.getJSON('js/tbl_datahome.json', function(data) {
                    $.each(data, function(key, value) {
                        if (value.NIS.search(expression) != -1 || value.KELAS.search(expression) != -1 || value.NAMA.search(expression) != -1 || value.HOMEBASE.search(expression) != -1 || value.NAMA_KELAS.search(expression) != -1) {
                            $('#resultlist3').append(`
                        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-action ">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">` + value.NAMA + `</div>
                            <small>` + value.KELAS + `-` + value.NAMA_KELAS + `</small>
                            </div>
                            <span class="badge bg-` + value.THEME_COLOR + `">` + value.HOMEBASE + `</span>
                            <span class="nis" hidden>` + value.NIS + `</span>
                            <span class="homebase" hidden>` + value.HOMEBASE + `</span>
                        </li>
                        `);
                        }
                    });
                });
            });

            $('#resultlist3').on('click', 'li', function() {
                let nis = $(this).children('.nis').text();
                let homebase = $(this).children('.homebase').text();

                $('#nis3').val(nis);
                $('#homebase3').val(homebase);
                $("#resultlist3").html('');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $.getJSON('js/prestasi.json', function(data) {
                var jenisLomba = data.jenis;

                $("#lomba").append('<option value=""> Pilih Tingkatan Lomba</option>');
                $.each(jenisLomba, function(key, value) {
                    $("#lomba").append('<option value="' + value.id + '">' + value.nama + '</option>');
                });
            });

            $("#lomba").change(function() {
                var id_lomba = $(this).val();

                $.getJSON('js/prestasi.json', function(data) {
                    var dataJuara = data.juara[id_lomba];
                    $("#juara").empty();
                    $("#juara").append('<option value="">Pilih Juara</option>');
                    $.each(dataJuara, function(key, value) {
                        $("#juara").append('<option value="' + value.poin + '">' + value.nama + '</option>');
                    });
                });
            });

            // ================================================================================================= //

            $.getJSON('js/prestasi.json', function(data) {
                var jenisTugas = data.tugas;

                $("#tugas").append('<option value=""> Pilih Tugas</option>');
                $.each(jenisTugas, function(key, value) {
                    $("#tugas").append('<option value="' + value.id + '">' + value.nama + '</option>');
                });
            });

            $("#tugas").change(function() {
                var id_tugas = $(this).val();

                $.getJSON('js/prestasi.json', function(data) {
                    var dataPoin = data.poinupacara[id_tugas];
                    $("#poinupacara").empty();
                    $("#poinupacara").append('<option value="">Pilih Poin</option>');
                    $.each(dataPoin, function(key, value) {
                        $("#poinupacara").append('<option value="' + value.nama + '">' + value.nama + '</option>');
                    });
                });
            });

            // ================================================================================================= //
            
            $.getJSON('js/prestasi.json', function(data) {
                var jenisTambahan = data.tambahan;

                $("#tambahan").append('<option value=""> Pilih Tugas</option>');
                $.each(jenisTambahan, function(key, value) {
                    $("#tambahan").append('<option value="' + value.id + '">' + value.nama + '</option>');
                });
            });

            $("#tambahan").change(function() {
                var id_tambahan = $(this).val();

                $.getJSON('js/prestasi.json', function(data) {
                    var dataPoin = data.pointambahan[id_tambahan];
                    $("#pointambahan").empty();
                    $("#pointambahan").append('<option value="">Pilih Poin</option>');
                    $.each(dataPoin, function(key, value) {
                        $("#pointambahan").append('<option value="' + value.nama + '">' + value.nama + '</option>');
                    });
                });
            });
        });
    </script>
    <script>
        function myFunction() {
            var r1 = document.getElementById("radio1");
            var text1 = document.getElementById("formLomba");
            var r2 = document.getElementById("radio2");
            var text2 = document.getElementById("formUpacara");
            var r3 = document.getElementById("radio3");
            var text3 = document.getElementById("formSikap");

            if (r1.checked == true) {
                formLomba.style.display = "block";
            } else {
                formLomba.style.display = "none";
            }
            if (r2.checked == true) {
                formUpacara.style.display = "block";
            } else {
                formUpacara.style.display = "none";
            }
            if (r3.checked == true) {
                formSikap.style.display = "block";
            } else {
                formSikap.style.display = "none";
            }
        }
    </script>
</body>

</html>