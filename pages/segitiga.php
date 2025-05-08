<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <?php
        $alas = 10;
        $tinggi = 12;
        $a = 3;
        $b = 4;
        $c = 5;
        $luas = 1 / 2 * $alas * $tinggi;
        $keliling = $a + $b + $c;
    ?>
    <a href="../index.php">Kembali</a>
    <h1>Segitiga</h1>
    <img src="https://imgix2.ruangguru.com/assets/miscellaneous/png_d3qfji_5143.png" width="300" alt="Segitiga" srcset="">
    <hr>
    <p>Alas = <?php echo $alas; ?> cm</p>
    <p>Tinggi = <?php echo $tinggi; ?> cm</p>
    <p>A = <?php echo $a; ?> cm</p>
    <p>B = <?php echo $b; ?> cm</p>
    <p>C = <?php echo $c; ?> cm</p>
    <br>
    <p>Luas (1 / 2 * Alas * Tinggi) = <?php echo $luas; ?> cm<sup>2</sup></p>
    <p>Keliling (A + B + C) = <?php echo $keliling; ?> cm</p>
</body>
</html>