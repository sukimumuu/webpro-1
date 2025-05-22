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
    <p>Luas (1 / 2 * Diagonal 1 * Diagonal 2) = <?php echo $luas; ?> cm<sup>2</sup></p>
    <p>Keliling (2 * (A + B)) = <?php echo $keliling; ?> cm</p>
</body>
</html>