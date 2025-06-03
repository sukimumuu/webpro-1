<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<body>
    <?php
        $panjang = $_POST['panjang'];
        $lebar = $_POST['lebar'];
        $hitung = $_POST['hitung'];
        $luas = $panjang * $lebar;
        $keliling = 2 * ($panjang + $lebar);
    ?>
    <a href="../pages/persegipanjang.php">Kembali</a>
    <h1>Persegi Panjang</h1>
    <img src="https://imgx.sonora.id/crop/0x0:0x0/700x465/filters:format(webp):quality(50)/photo/2023/08/24/2_ini_rumus_luas_persegi_panjan-20230824100814.jpg" alt="Persegi Panjang" width="300" srcset="">
    <hr>
    <p>Panjang = <?php echo $panjang; ?> cm</p>
    <p>Lebar = <?php echo $lebar; ?> cm</p>
    <br>
    <?php
        if ($hitung == "luas") {
            echo "<p>Luas (Panjang * Lebar) = $luas cm<sup>2</sup></p>";
        } elseif ($hitung == "keliling") {
            echo "<p>Keliling (2 * (Panjang + Lebar)) = $keliling cm</p>";
        } else {
            echo "<p>Luas (Panjang * Lebar) = $luas cm<sup>2</sup></p>";
            echo "<p>Keliling (2 * (Panjang + Lebar)) = $keliling cm</p>";
        }
    ?>
</body>
</html>