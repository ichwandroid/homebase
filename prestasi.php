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
                <form action="insertlomba.php" name="formName" id="altForm" method="post" enctype="multipart/form-data">
                    <div class="modal-body">
                        <div class="modal-body p-3">
                            <div class="input-group">
                                <input type="text" id="nis" name="nis" placeholder="Search..." aria-label="First name" class="form-control" autocomplete="off">
                                <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                            </div>
                            <ol class="list-group list-group-numbered" id="resultlist"></ol>
                            <small><i>Silahkan ketik Nama Lengkap / Nama Panggilan / Kelas</i></small>
                        </div>
                        <div class="modal-body p-3 pt-0">
                            <ul class="list-group">
                                <li class="list-group-item list-group-item-action">
                                    <input class="form-check-input me-1" type="checkbox" value='<span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">Dijemput Orang Tua</span>' id="radio1" name="status" onclick="if(this.checked) {document.formName.radio2.checked=false;document.formName.radio3.checked=false;myFunction();}">
                                    <label class="form-check-label stretched-link" for="radio1">Dijemput Orang Tua</label>
                                </li>
                                <li class="list-group-item list-group-item-action">
                                    <input class="form-check-input me-1" type="checkbox" value='<span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">Ditunggu Team Antar Jemput</span>' id="radio2" name="status" onclick="if(this.checked) {document.formName.radio1.checked=false;document.formName.radio3.checked=false;myFunction();}">
                                    <label class="form-check-label stretched-link" for="radio2">Ditunggu Team Antar Jemput</label>
                                </li>
                                <li class="list-group-item list-group-item-action">
                                    <input class="form-check-input me-1" type="checkbox" value='<span class="badge d-flex align-items-center p-1 pe-2 text-primary-emphasis bg-primary-subtle border border-primary-subtle rounded-pill">Dijemput Ojek Online</span>' id="radio3" name="status" onclick="if(this.checked) {document.formName.radio2.checked=false;document.formName.radio1.checked=false;myFunction();}">
                                    <label class="form-check-label stretched-link" for="radio3">Dijemput Ojek Online</label>
                                </li>
                            </ul>
                        </div>
                        <div id="formLomba" style="display: none;">
                            <div class="modal-body p-3">
                                <div class="input-group">
                                    <select class="form-select" aria-label="Default select example" id="lomba" name="lomba">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-body p-3 pt-0">
                                <div class="input-group">
                                    <select class="form-select" aria-label="Default select example" id="juara" name="juara">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div id="formUpacara">
                            <div class="modal-body p-3">
                                <div class="input-group">
                                    <select class="form-select" aria-label="Default select example" id="tugas" name="tugas">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                            <div class="modal-body p-3 pt-0">
                                <div class="input-group">
                                    <select class="form-select" aria-label="Default select example" id="poin" name="poin">
                                        <option value=""></option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Simpan" class="btn btn-primary"></input>
                    </div>
                </form>
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
            $('#nis').keyup(function() {
                $('#resultlist').html('');
                $('#state').val('');
                var searchField = $('#nis').val();
                var expression = new RegExp(searchField, "i");

                $.getJSON('tbl_datahome.json', function(data) {
                    $.each(data, function(key, value) {
                        if (value.NIS.search(expression) != -1 || value.KELAS.search(expression) != -1 || value.NAMA.search(expression) != -1 || value.HOMEBASE.search(expression) != -1 || value.NAMA_KELAS.search(expression) != -1) {
                            $('#resultlist').append(`
                        <li class="list-group-item d-flex justify-content-between align-items-start list-group-item-action ">
                            <div class="ms-2 me-auto">
                            <div class="fw-bold">` + value.NAMA + `</div>
                            <small>` + value.KELAS + `-` + value.NAMA_KELAS + `</small>
                            </div>
                            <span class="badge bg-` + value.THEME_COLOR + `">` + value.HOMEBASE + `</span>
                            <span class="nama" hidden>` + value.NIS + `</span>
                        </li>
                        `);
                        }
                    });
                });
            });

            $('#resultlist').on('click', 'li', function() {
                let nis = $(this).children('.nama').text();

                $('#nis').val(nis);
                $("#resultlist").html('');
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $.ajax({
                type: 'POST',
                url: "get_data_lomba.php",
                cache: false,
                success: function(msg) {
                    $("#lomba").html(msg);
                }
            });

            $("#lomba").change(function() {
                var lomba = $("#lomba").val();
                $.ajax({
                    type: 'POST',
                    url: "get_data_juara.php",
                    data: {
                        lomba: lomba
                    },
                    cache: false,
                    success: function(msg) {
                        $("#juara").html(msg);
                    }
                });
            });
        });
    </script>
    <script>
        function myFunction() {
            var r1 = document.getElementById("radio1");
            var text1 = document.getElementById("formLomba");
            if (r1.checked == true) {
                formLomba.style.display = "block";
            }
        }
    </script>
</body>

</html>