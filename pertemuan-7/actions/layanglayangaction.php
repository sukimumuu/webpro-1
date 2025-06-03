<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang-Layang</title>
</head>
<body>
    <?php
        $diagonal1 = $_POST['diagonal1'];
        $diagonal2 = $_POST['diagonal2'];
        $sisi_a = $_POST['sisi_a'];
        $sisi_b = $_POST['sisi_b'];
        $hitung    = $_POST['hitung'];
        $luas = 1 / 2 * $diagonal1 * $diagonal2;
        $keliling = 2 * ($sisi_a + $sisi_b);
    ?>
    <a href="../pages/layanglayang.php">Kembali</a>
    <h1>Layang-Layang</h1>
    <img src="https://uptdsmpn3bangkalan.sch.id/wp-content/uploads/2024/01/layang-layang.jpg" width="300" alt="Layang-layang" srcset="">
    <hr>
    <p>Diagonal 1 = <?php echo $diagonal1; ?> cm</p>
    <p>Diagonal 2 = <?php echo $diagonal2; ?> cm</p>
    <p>A = <?php echo $sisi_a; ?> cm</p>
    <p>B = <?php echo $sisi_b; ?> cm</p>
    <br>
    <?php
        if ($hitung == 'luas') {
            echo "<p>Luas (1 / 2 * Diagonal 1 * Diagonal 2) = $luas cm<sup>2</sup></p>";
        } elseif ($hitung == 'keliling') {
            echo "<p>Keliling (2 * (A + B)) = $keliling cm</p>";
        } else {
            echo "<p>Luas (1 / 2 * Diagonal 1 * Diagonal 2) = $luas cm<sup>2</sup></p>";
            echo "<p>Keliling (2 * (A + B)) = $keliling cm</p>";
        }
    ?>
</body>
</html>