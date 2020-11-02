
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator Sederhana</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
</head>
<body>
    <div id="show-data">

    </div>
    <label for="angka1">
        <input type="number" name="angka1" id="angka1" placeholder="Masukkan angka 1"><br><br>
    </label>
    <label for="angka2">
        <input type="number" name="angka2" id="angka2" placeholder="Masukkan angka 2"><br><br>
    </label>
    <label for="operator">
        <select name="operator" id="operator">
            <option value="x">Kali</option>
            <option value="+">Tambah</option>
            <option value="/">Bagi</option>
            <option value="-">Kurang</option>
        </select>
    </label>
        <input type="submit" name="submit" id="post_data">
    
    <script type="text/javascript">
        $(document).ready(function() {
            $("#post_data").click(function() {
                var angka1 = $("input[name='angka1']").val();
                var angka2 = $("input[name='angka2']").val();
                var operat = $("select[name='operator']").val();
                $.ajax({
                    type: 'POST',
                    url:  "proses.php",
                    dataType: 'html',
                    // data: "angka1=" + angka1 + " angka2=" + angka2 + "",
                    data: {angka_pertama: angka1, angka_kedua: angka2, operator: operat},
                    success: function(hasil) {
                        $("#show-data").html("<p>" + hasil + "</p>");
                    }
                });
            });
        });
    </script>
</body>
</html>