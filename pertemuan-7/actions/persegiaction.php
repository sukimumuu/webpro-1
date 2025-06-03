<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi</title>
</head>
<body>
    <?php
        $sisi = $_POST['sisi'];
        $hitung = $_POST['hitung'];
        $luas = $sisi * $sisi;
        $keliling = 4 * $sisi;
    ?>
    <a href="../pages/persegi.php">Kembali</a>
    <h1>Persegi</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f7/Regular_quadrilateral.svg/375px-Regular_quadrilateral.svg.png" alt="Persegi" width="300" srcset="">
    <hr>
    <p>Sisi = <?php echo $sisi; ?> cm</p>
    <br>
    <?php
    if($hitung == 'luas') {
      echo "<p>Luas (Sisi * Sisi) = $luas cm<sup>2</sup></p>";  
    } else if($hitung == 'keliling') {
        echo "<p>Keliling (4 * Sisi) = $keliling cm</p>";
    } else {
        echo "<p>Luas (Sisi * Sisi) = $luas cm<sup>2</sup></p>";
        echo "<p>Keliling (4 * Sisi) = $keliling cm</p>";
    }

    ?>
</body>
</html>