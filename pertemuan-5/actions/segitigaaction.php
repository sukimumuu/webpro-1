<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <?php
        $alas = $_POST['alas'];
        $tinggi = $_POST['tinggi'];
        $sisi_a = $_POST['sisi_a'];
        $sisi_b = $_POST['sisi_b'];
        $sisi_c = $_POST['sisi_c'];
        $luas = 1 / 2 * $alas * $tinggi;
        $keliling = $sisi_a + $sisi_b + $sisi_c;
    ?>
    <a href="../pages/segitiga.php">Kembali</a>
    <h1>Segitiga</h1>
    <img src="https://imgix2.ruangguru.com/assets/miscellaneous/png_d3qfji_5143.png" width="300" alt="Segitiga" srcset="">
    <hr>
    <p>Alas = <?php echo $alas; ?> cm</p>
    <p>Tinggi = <?php echo $tinggi; ?> cm</p>
    <p>A = <?php echo $sisi_a; ?> cm</p>
    <p>B = <?php echo $sisi_b; ?> cm</p>
    <p>C = <?php echo $sisi_c; ?> cm</p>
    <br>
    <p>Luas (1 / 2 * Alas * Tinggi) = <?php echo $luas; ?> cm<sup>2</sup></p>
    <p>Keliling (A + B + C) = <?php echo $keliling; ?> cm</p>
</body>
</html>