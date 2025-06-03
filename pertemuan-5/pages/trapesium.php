<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trapesium</title>
</head>
<body>
    <a href="../index.php">Kembali</a>
    <h1>Trapesium</h1>
    <img src="https://upload.wikimedia.org/wikipedia/commons/b/b7/Isosceles_trapezoid.jpg" width="300" alt="Trapesium" srcset="">
    <hr>
    <form action="../actions/trapesiumaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Sisi A</td>
                <td><input type="number" name="sisi_a" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Sisi B</td>
                <td><input type="number" name="sisi_b" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Sisi C</td>
                <td><input type="number" name="sisi_c" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Sisi D</td>
                <td><input type="number" name="sisi_d" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Tinggi</td>
                <td><input type="number" name="tinggi" id=""></td>
            </tr>
        </table>
        <button type="submit">Hitung Luas & Keliling</button>
    </form>
</body>
</html>