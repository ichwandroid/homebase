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
                <div class="modal-body"></div>
                <div class="modal-footer">
                    <input type="submit" value="Simpan" class="btn btn-primary"></input>
                </div>
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

</html>


<!-- <!DOCTYPE html>
<html>
<head>
    <title>Contoh Combobox Bertingkat</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function(){
            // Mengambil data provinsi dari berkas JSON
            $.getJSON('data.json', function(data){
                var provinsiData = data.provinsi;

                $("#provinsi").append('<option value="">Pilih Provinsi</option>');
                $.each(provinsiData, function(key, value){
                    $("#provinsi").append('<option value="' + value.id + '">' + value.nama + '</option>');
                });
            });

            // Event saat combobox provinsi berubah
            $("#provinsi").change(function(){
                var provinsi_id = $(this).val();

                // Mengambil data kota berdasarkan provinsi_id dari berkas JSON
                $.getJSON('data.json', function(data){
                    var kotaData = data.kota[provinsi_id];
                    $("#kota").empty();
                    $("#kota").append('<option value="">Pilih Kota</option>');
                    $.each(kotaData, function(key, value){
                        $("#kota").append('<option value="' + value.id + '">' + value.nama + '</option>');
                    });
                });
            });
        });
    </script>
</head>
<body>
    <h1>Combobox Bertingkat</h1>
    <form>
        <label for="provinsi">Provinsi:</label>
        <select id="provinsi" name="provinsi">
        </select>
        <br>
        <label for="kota">Kota:</label>
        <select id="kota" name="kota">
        </select>
    </form>
</body>
</html> -->