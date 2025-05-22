<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belah Ketupat</title>
</head>
<body>
    <a href="../index.php">Kembali</a>
    <h1>Belah Ketupat</h1>
    <img src="https://www.kimiamath.com/content/images/belah-ketupat/pembuktian-luas-belah-ketupat4.jpg" width="300" alt="Belah Ketupat" srcset="">
    <hr>
    <form action="../actions/belahketupataction.php" method="post">
        <table>
            <tr>
                <td>
                    <label for="">Masukan Diagonal 1</label>
                </td>
                <td>:</td>
                <td>
                    <input type="number" name="diagonal1" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Masukan Diagonal 2</label>
                </td>
                <td>:</td>
                <td>
                    <input type="number" name="diagonal2" id="">
                </td>
            </tr>
            <tr>
                <td>
                    <label for="">Masukan Sisi</label>
                </td>
                <td>:</td>
                <td>
                    <input type="number" name="sisi" id="">
                </td>
            </tr>
        </table>
        <button type="submit">Hitung Luas & Keliling</button>
    </form>
</body>
</html>