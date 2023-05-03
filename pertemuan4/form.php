<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf=8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
</head>
<body>
    <h2> FORM TAMBAH MAHASISWA</h2>
    <form action="simpan.php" method="POST">
        NIM : <br>
        <input type="text" name="txtnim"><br>
        Nama:<br>
        <input type="text" name="txtnama"><br>
        jenis kelamin : <br>
        <select name="txtjenkel">
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">perempuan</option>
</select><br>
Tempat Tanggal Lahir : <br>
<input type="text" name="txtlahir"><br>
            Nomor hp : <br>
            <input type="text" name="txthp"><br>
            <button type="submit">Simpan</button>
</form>
</body>
</html>
