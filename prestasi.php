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
                <div class="modal-body">
                    <form action="" name="formName" id="altForm" method="post" enctype="multipart/form-data">
                        <div class="modal-body p-3">
                            <div class="input-group">
                                <input type="text" id="nis" name="nis" placeholder="Search..." aria-label="First name" class="form-control" autocomplete="off">
                                <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                            </div>
                            <ol class="list-group list-group-numbered" id="resultlist"></ol>
                            <small><i>Silahkan ketik Nama Lengkap / Nama Panggilan / Kelas</i></small>
                        </div>
                        <div class="modal-body p-3">
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" id="lomba">
                                    <option value="" selected>Open this select menu</option>
                                </select>
                            </div>
                        </div>
                        <div class="modal-body p-3 pt-0">
                            <div class="input-group">
                                <select class="form-select" aria-label="Default select example" id="juara">
                                    <option value="" selected>Open this select menu</option>
                                </select>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Understood</button>
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

            $("#altForm").submit(function(e) {
                e.preventDefault();
                $.ajax({
                    type: "post",
                    url: "includes/insert.php",
                    data: $(this).serialize(),
                }).done(function(data) {
                    $("nis").val("");
                    $("#status").val("");
                    $("#basic-url").val("");
                    let text = data + " Data berhasil disimpan, ingin melihat statusnya? ";
                    if (confirm(text) == true) {
                        window.location = "http://localhost/pickup.v3";
                    } else {
                        window.location.reload();
                    }
                    // alert(data);
                    // window.location.reload();
                })
            })
        });
    </script>
    <script>
        $(document).ready(function () {
            $.ajax ({
                type: 'POST',
                url: "get_data_lomba.php",
                cache: false,
                success: function(msg){
                    $("#lomba").html(msg);
                }
            });

            $("#lomba").change(function(){
                var lomba = $("#lomba").val();
                $.ajax({
                    type: 'POST',
                    url: "get_data_juara.php",
                    data: {lomba: lomba},
                    cache: false,
                    success: function(msg){
                        $("#juara").html(msg);
                    }
                });
            });
        });
    </script>
</body>

</html>