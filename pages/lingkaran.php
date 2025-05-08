<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
    <?php
        $phi = 3.14;
        $r = 5;
        $d = 10;
        $luas = $phi * $r * $r;
        $keliling = $phi * $d;
    ?>
    <a href="../index.php">Kembali</a>
    <h1>Lingkaran</h1>
    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiIGX34sz9NaawMhM4uvwmI6f1rd-fvZVQhixwv2-iRtJJvRW6DpdA2wa5ywVFaFC242ezaNkfISkXa_STclLyT_xGAqoG2rOiEqoGBXknX6BUn_u6ap9DjtDxFHsypxOLG18As0sc3cw/s320/lingkaran.1.JPG" width="300" alt="Lingkaran" srcset="">
    <hr>
    <p>Phi = <?php echo $phi; ?> cm</p>
    <p>R = <?php echo $r; ?> cm</p>
    <p>D = <?php echo $d; ?> cm</p>
    <br>
    <p>Luas (Phi * R * R) = <?php echo $luas; ?> cm<sup>2</sup></p>
    <p>Keliling (2 * Phi * R) = <?php echo $keliling; ?> cm</p>
</body>
</html>