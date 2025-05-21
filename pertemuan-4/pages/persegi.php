<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
</head>
<body>
    <?php
        $sisi = 12;
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;
    ?>
    <a href="../index.php">Kembali</a>
    <h1>Persegi</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Regular_quadrilateral.svg/375px-Regular_quadrilateral.svg.png" alt="Persegi" width="300" srcset="">
    <hr>
    <p>Sisi = <?php echo $sisi; ?> cm</p>
    <br>
    <p>Luas (Sisi * Sisi) = <?php echo $luas; ?> cm<sup>2</sup></p>
    <p>Keliling (4 * Sisi) = <?php echo $keliling; ?> cm</p>
</body>
</html>