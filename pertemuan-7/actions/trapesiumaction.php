<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <?php
        $sisi_a = $_POST['sisi_a'];
        $sisi_b = $_POST['sisi_b'];
        $sisi_c = $_POST['sisi_c'];
        $sisi_d = $_POST['sisi_d'];
        $tinggi = $_POST['tinggi'];
        $hitung = $_POST['hitung'];
        $luas = 1 / 2 * ($sisi_a + $sisi_b) * $tinggi;
        $keliling = $sisi_a + $sisi_b + $sisi_c + $sisi_d;
    ?>
    <a href="../pages/trapesium.php">Kembali</a>
    <h1>Trapesium</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/Isosceles_trapezoid.jpg" width="300" alt="Trapesium" srcset="">
    <hr>
    <p>A = <?php echo $sisi_a; ?> cm</p>
    <p>B = <?php echo $sisi_b; ?> cm</p>
    <p>C = <?php echo $sisi_c; ?> cm</p>
    <p>D = <?php echo $sisi_d; ?> cm</p>
    <p>T = <?php echo $tinggi; ?> cm</p>
    <br>
    <?php
        if ($hitung == 'luas') {
            echo "<p>Luas (1 / 2 * (A + B) * Tinggi) = $luas cm<sup>2</sup></p>";
        } elseif ($hitung == 'keliling') {
            echo "<p>Keliling (A + B + C + D) = $keliling cm</p>";
        } else {
            echo "<p>Luas (1 / 2 * (A + B) * Tinggi) = $luas cm<sup>2</sup></p>";
            echo "<p>Keliling (A + B + C + D) = $keliling cm</p>";
        }
    ?>
</body>
</html>