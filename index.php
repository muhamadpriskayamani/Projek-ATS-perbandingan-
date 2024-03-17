<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mengecek Perbandingan</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="bootstrap-5.0.0-dist/php/css/bootstrap.min.css">
</head>
<body class="p bg-danger">
    <div class="yamni">
    <?php 
    @$angkapertama= $_POST['angka_pertama'];
    @$angkakedua= $_POST['angka_kedua'];
    
    if ($angkapertama < $angkakedua) { 
        $operator= "<";
        echo "<h5 class= 'operator'>$operator</h5>";
        echo "<h3>$angkapertama Lebih Kecil Dari  $angkakedua</h3>";
    }else if ($angkapertama > $angkakedua){
        $operator=">";
        echo "<h5 class= 'operator'>$operator</h5>";
        echo "<h3>$angkapertama Lebih Besar Dari $angkakedua</h3>";
    }else if ($angkapertama == $angkakedua) {
        $operator="==";
        echo "<h5 class= 'operator'>$operator</h5>";
        echo "<h3>$angkapertama Sama Dengan $angkakedua</h3>";
    }
    ?>
<h5>cek perbandingan angka</h5>
    <form method="POST" action="perbandingan.php">
        <input type="number" id="angka_pertama" placeholder= "angka pertama"class = "pris" name="angka_pertama" required>
        <input type="number" id="angka_kedua" placeholder= "angka kedua" class = "pris1" name="angka_kedua" required>
        <input type="submit" name="submit" class = "pris3" value="Kirim">
    </form>
    </div>
</body>
</html>