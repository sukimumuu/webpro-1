<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Segitiga</title>
</head>
<body>
    <a href="../index.php">Kembali</a>
    <h1>Segitiga</h1>
    <img src="https://imgix2.ruangguru.com/assets/miscellaneous/png_d3qfji_5143.png" width="300" alt="Segitiga" srcset="">
    <hr>
    <form action="../actions/segitigaaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Alas</td>
                <td>:</td>
                <td><input type="number" name="alas" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Tinggi</td>
                <td>:</td>
                <td><input type="number" name="tinggi" id=""></td>
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
                <td>Masukkan Sisi C</td>
                <td>:</td>
                <td><input type="number" name="sisi_c" id=""></td>
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
                    <label for="luas">Luas & Keliling</label>
                </td>
            </tr>
        </table>
        <button type="submit">Hitung</button>
    </form>
</body>
</html>