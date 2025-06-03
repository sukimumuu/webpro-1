<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lingkaran</title>
</head>
<body>
    <a href="../index.php">Kembali</a>
    <h1>Lingkaran</h1>
    <img src="https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiIGX34sz9NaawMhM4uvwmI6f1rd-fvZVQhixwv2-iRtJJvRW6DpdA2wa5ywVFaFC242ezaNkfISkXa_STclLyT_xGAqoG2rOiEqoGBXknX6BUn_u6ap9DjtDxFHsypxOLG18As0sc3cw/s320/lingkaran.1.JPG" width="300" alt="Lingkaran" srcset="">
    <hr>
    <form action="../actions/lingkaranaction.php" method="post">
        <table>
            <tr>
                <td>Masukkan Jari-jari</td>
                <td>:</td>
                <td><input type="number" name="jari_jari" id=""></td>
            </tr>
            <tr>
                <td>Masukkan Diameter</td>
                <td>:</td>
                <td><input type="number" name="diameter" id=""></td>
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