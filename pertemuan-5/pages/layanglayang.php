<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Layang-Layang</title>
</head>
<body>
    <a href="../index.php">Kembali</a>
    <h1>Layang-Layang</h1>
    <img src="https://uptdsmpn3bangkalan.sch.id/wp-content/uploads/2024/01/layang-layang.jpg" width="300" alt="Layang-layang" srcset="">
    <hr>
    <form action="../actions/layanglayangaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Diagonal 1</td>
                <td><input type="number" name="diagonal1" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Diagonal 2</td>
                <td><input type="number" name="diagonal2" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Sisi A</td>
                <td><input type="number" name="sisi_a" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Sisi B</td>
                <td><input type="number" name="sisi_b" id=""></td>
            </tr>
        </table>
        <button type="submit">Hitung Luas & Keliling</button>
    </form>
</body>
</html>