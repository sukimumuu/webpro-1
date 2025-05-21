<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <?php
        $a = 8;
        $b = 12;
        $c = 10;
        $d = 12;
        $tinggi = 7;
        $luas = 1 / 2 * ($a + $b) * $tinggi;
        $keliling = $a + $b + $c + $d;
    ?>
    <a href="../index.php">Kembali</a>
    <h1>Trapesium</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/Isosceles_trapezoid.jpg" width="300" alt="Trapesium" srcset="">
    <hr>
    <p>A = <?php echo $a; ?> cm</p>
    <p>B = <?php echo $b; ?> cm</p>
    <p>C = <?php echo $c; ?> cm</p>
    <p>T = <?php echo $tinggi; ?> cm</p>
    <p>D = <?php echo $d; ?> cm</p>
    <br>
    <p>Luas (1 / 2 * (A + B) * Tinggi) = <?php echo $luas; ?> cm<sup>2</sup></p>
    <p>Keliling (A + B + C + D) = <?php echo $keliling; ?> cm</p>
</body>
</html>