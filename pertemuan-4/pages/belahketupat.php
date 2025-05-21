<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
    <?php
        $diagonal1 = 18;
        $diagonal2 = 24;
        $sisi = 15;
        $luas = 1 / 2 * $diagonal1 * $diagonal2;
        $keliling = 4 * $sisi;
    ?>
    <a href="../index.php">Kembali</a>
    <h1>Belah Ketupat</h1>
    <img src="https://www.kimiamath.com/content/images/belah-ketupat/pembuktian-luas-belah-ketupat4.jpg" width="300" alt="Belah Ketupat" srcset="">
    <hr>
    <p>Diagonal 1 = <?php echo $diagonal1; ?> cm</p>
    <p>Diagonal 2 = <?php echo $diagonal2; ?> cm</p>
    <p>Sisi = <?php echo $sisi; ?> cm</p>
    <br>
    <p>Luas (1 / 2 * Diagonal 1 * Diagonal 2) = <?php echo $luas; ?> cm<sup>2</sup></p>
    <p>Keliling (4 * Sisi) = <?php echo $keliling; ?> cm</p>
</body>
</html>