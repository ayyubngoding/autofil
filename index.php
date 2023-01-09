<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="">
        <ul>
            <li><label for="">Nama Obat</label></li>
            <li><input type="text" name="nama" id="nama" onkeyup="autofill()"></li>
        </ul>
        <ul>
            <li><label for="">Qty</label></li>
            <li><input type="number"></li>
        </ul>
        <ul>
            <li><label for="">Harga</label></li>
            <li><input type="text" name="harga" id="harga"></li>
        </ul>
        <ul>
            <li><label for="">Total</label></li>
            <li><input type="text"></li>
        </ul>
        <ul>
            <li><label for="">Tanggal</label></li>
            <li><input type="date"></li>
        </ul>
    </form>

    <script src="js/jquery-3.6.1.min.js"></script>
       <script>
            function autofill(){
                var nama_obat = $("#nama").val();
                $.ajax({
                    url: 'autofil.php',
                    data:"nama1="+nama_obat ,
                }).done(function (data) {
                    var json = data,
                    obj = JSON.parse(json);
                    $('#harga').val(obj.harga_jual);
                });
            }
    </script>

</body>
</html>