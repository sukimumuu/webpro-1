<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
    <?php
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $sisi = $_POST['sisi'];
        $hitung = $_POST['hitung'];
        $luas = $alas * $tinggi;
        $keliling = 2 * ($alas + $sisi);
    ?>
    <a href="../pages/jajargenjang.php">Kembali</a>
    <h1>Jajar Genjang</h1>
    <img src="https://cnc-magazine.oramiland.com/parenting/images/rumus_luas_jajar_genjang-x.width-800.format-webp.webp" width="300" alt="Jajar Genjang" srcset="">
    <hr>
    <p>Alas = <?php echo $alas; ?> cm</p>
    <p>Tinggi = <?php echo $tinggi; ?> cm</p>
    <p>Sisi = <?php echo $sisi; ?> cm</p>
    <br>
    <?php
        if($hitung == 'luas') {
            echo "<p>Luas (Alas * Tinggi) = $luas cm<sup>2</sup></p>";
        } else if($hitung == 'keliling') {
            echo "<p>Keliling (2 * (Alas + Sisi)) = $keliling cm</p>";
        }else {
            echo "<p>Luas (Alas * Tinggi) = $luas cm<sup>2</sup></p>";
            echo "<p>Keliling (2 * (Alas + Sisi)) = $keliling cm</p>";
        }
    ?>
</body>
</html>