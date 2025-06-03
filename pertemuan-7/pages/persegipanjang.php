<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Persegi Panjang</title>
</head>
<body>
    <a href="../index.php">Kembali</a>
    <h1>Persegi Panjang</h1>
    <img src="https://imgx.sonora.id/crop/0x0:0x0/700x465/filters:format(webp):quality(50)/photo/2023/08/24/2_ini_rumus_luas_persegi_panjan-20230824100814.jpg" alt="Persegi Panjang" width="300" srcset="">
    <hr>
    <form action="../actions/persegipanjangaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Panjang</td>
                <td>:</td>
                <td><input type="number" name="panjang" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Lebar</td>
                <td>:</td>
                <td><input type="number" name="lebar" id=""></td>
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