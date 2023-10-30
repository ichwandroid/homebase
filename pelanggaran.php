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
