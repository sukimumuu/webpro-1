<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
    <?php
        $alas = 6;
        $tinggi = 3;
        $sisi = 4;
        $luas = $alas * $tinggi;
        $keliling = 2 * ($alas + $sisi);
    ?>
    <a href="../index.php">Kembali</a>
    <h1>Jajar Genjang</h1>
    <img src="https://cnc-magazine.oramiland.com/parenting/images/rumus_luas_jajar_genjang-x.width-800.format-webp.webp" width="300" alt="Jajar Genjang" srcset="">
    <hr>
    <p>Alas = <?php echo $alas; ?> cm</p>
    <p>Tinggi = <?php echo $tinggi; ?> cm</p>
    <p>Sisi = <?php echo $sisi; ?> cm</p>
    <br>
    <p>Luas (Alas * Tinggi) = <?php echo $luas; ?> cm<sup>2</sup></p>
    <p>Keliling (2 * (Alas + Sisi)) = <?php echo $keliling; ?> cm</p>
</body>
</html>