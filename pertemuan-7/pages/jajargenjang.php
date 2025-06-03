<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jajar Genjang</title>
</head>
<body>
    <a href="../index.php">Kembali</a>
    <h1>Jajar Genjang</h1>
    <img src="https://cnc-magazine.oramiland.com/parenting/images/rumus_luas_jajar_genjang-x.width-800.format-webp.webp" width="300" alt="Jajar Genjang" srcset="">
    <hr>
    <form action="../actions/jajargenjangaction.php" method="post">
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
                <td>Masukkan Sisi</td>
                <td>:</td>
                <td><input type="number" name="sisi" id=""></td>
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