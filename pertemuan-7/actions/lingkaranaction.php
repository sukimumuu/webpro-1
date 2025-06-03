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
        $jari_jari = $_POST['jari_jari'];
        $diameter = $_POST['diameter'];
        $hitung = $_POST['hitung'];
        $luas = $phi * $jari_jari * $jari_jari;
        $keliling = $phi * $diameter;
    ?>
    <a href="../pages/lingkaran.php">Kembali</a>
    <h1>Lingkaran</h1>
    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiIGX34sz9NaawMhM4uvwmI6f1rd-fvZVQhixwv2-iRtJJvRW6DpdA2wa5ywVFaFC242ezaNkfISkXa_STclLyT_xGAqoG2rOiEqoGBXknX6BUn_u6ap9DjtDxFHsypxOLG18As0sc3cw/s320/lingkaran.1.JPG" width="300" alt="Lingkaran" srcset="">
    <hr>
    <p>Phi = <?php echo $phi; ?> cm</p>
    <p>Jari - Jari (R) = <?php echo $jari_jari; ?> cm</p>
    <p>Diameter (D) = <?php echo $diameter; ?> cm</p>
    <br>
    <?php
    if($hitung == 'luas') {
        echo "<p>Luas (Phi * R * R) = $luas cm<sup>2</sup></p>";
    } else if($hitung == 'keliling') {
        echo "<p>Keliling (Phi * D) = $keliling cm</p>";
    } else {
        echo "<p>Luas (Phi * R * R) = $luas cm<sup>2</sup></p>";
        echo "<p>Keliling (Phi * D) = $keliling cm</p>";
    }
    ?>
</body>
</html>