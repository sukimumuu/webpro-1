<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<body>
    <?php
        $panjang = 19;
        $lebar = 10;
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);
    ?>
    <a href="../index.php">Kembali</a>
    <h1>Persegi Panjang</h1>
    <img src="https://imgx.sonora.id/crop/0x0:0x0/700x465/filters:format(webp):quality(50)/photo/2023/08/24/2_ini_rumus_luas_persegi_panjan-20230824100814.jpg" alt="Persegi Panjang" width="300" srcset="">
    <hr>
    <p>Panjang = <?php echo $panjang; ?> cm</p>
    <p>Lebar = <?php echo $lebar; ?> cm</p>
    <br>
    <p>Luas (Panjang * Lebar) = <?php echo $luas; ?> cm<sup>2</sup></p>
    <p>Keliling (2 * (Panjang + Lebar)) = <?php echo $keliling; ?> cm</p>
</body>
</html>