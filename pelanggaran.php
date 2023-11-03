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
                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Violation Records</h1>
                </div>
                <form action="insertpelanggaran.php" method="post">
                    <div class="modal-body p-3">
                        <div class="input-group">
                            <input type="text" id="nis" name="nis" placeholder="Search..." aria-label="First name" class="form-control" autocomplete="off">
                            <span class="input-group-text"><i class="bi bi-person-vcard"></i></span>
                        </div>
                        <ol class="list-group list-group-numbered" id="resultlist"></ol>
                        <small><i>Silahkan ketik Nama Lengkap / Nama Panggilan / Kelas / Homebase</i></small>
                        <input type="text" id="homebase" name="homebase" aria-label="First name" class="form-control" hidden>
                    </div>
                    <div class="modal-body p-3">
                        <div class="input-group">
                            <select class="form-select" aria-label="Default select example" id="pelanggaran" name="pelanggaran"></select>
                        </div>
                    </div>
                    <div class="modal-body p-3 pt-0">
                        <div class="input-group">
                            <select class="form-select" aria-label="Default select example" id="poin" name="poin"></select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="submit" value="Simpan" class="btn btn-primary"></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
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
                            <span class="nis" hidden>` + value.NIS + `</span>
                            <span class="homebase" hidden>` + value.HOMEBASE + `</span>
                        </li>
                        `);
                    }
                });
            });
        });

        $('#resultlist').on('click', 'li', function() {
            let nis = $(this).children('.nis').text();
            let homebase = $(this).children('.homebase').text();

            $('#nis').val(nis);
            $('#homebase').val(homebase);
            $("#resultlist").html('');
        });
    });
</script>
<script>
    $(document).ready(function() {
        $.getJSON('pelanggaran.json', function(data) {
            var jenisData = data.jenis;

            $("#pelanggaran").append('<option value=""> Pilih Jenis Pelanggaran</option>');
            $.each(jenisData, function(key, value) {
                $("#pelanggaran").append('<option value="' + value.id + '">' + value.nama + '</option>');
            });
        });

        $("#pelanggaran").change(function() {
            var id_pelanggaran = $(this).val();

            $.getJSON('pelanggaran.json', function(data) {
                var dataPoin = data.poin[id_pelanggaran];
                $("#poin").empty();
                $("#poin").append('<option value="">Pilih Poin</option>');
                $.each(dataPoin, function(key, value) {
                    $("#poin").append('<option value="' + value.id + '">' + value.nama + '</option>');
                });
            })
        })
    });
</script>

</html>