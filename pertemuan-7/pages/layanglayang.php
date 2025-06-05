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
                <td>:</td>
                <td><input type="number" name="diagonal1" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Diagonal 2</td>
                <td>:</td>
                <td><input type="number" name="diagonal2" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Sisi A</td>
                <td>:</td>
                <td><input type="number" name="sisi_a" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Sisi B</td>
                <td>:</td>
                <td><input type="number" name="sisi_b" id=""></td>
            </tr>
            <tr>
                <td>
                    <label for="">Pilih Opsi Hitung</label>
                </td>
                <td>:</td>
                <td>
                    <input type="radio" value="luas" id="luas" name="hitung">
                    <label for="luas">Luas</label>
                    <input type="radio" value="keliling" id="keliling" name="hitung">
                    <label for="keliling">Keliling</label>
                    <input type="radio" value="luas_keliling" id="luas_keliling" name="hitung">
                    <label for="luas_keliling">Luas & Keliling</label>
                </td>
            </tr>
        </table>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>