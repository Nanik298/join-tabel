<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <h1>Form Tambah<h1>
    <form action="proses-tambah.php" method="POST">
        <from>
            <fieldset>
                <p>
                    <label for="nama">Nama :</label>
                    <input type="text" name="nama"/>
</p>
<p>
    <label for="kelas">Kelas :</label>
    <input type="text" name="kelas"/>
</p>
<p>
<label for="nama_jurusan">Nama Jurusan :</label>
<select name="jurusan">
    <option value="rpl">RPL</option>
    <option value="busana">Busana</option>
    <option value="boga">Boga</option>
    <option value="tl">TL</option>
</select>
</p>
<p>
    <label for="angkatan">Angkatan :</label>
    <input type="text" name="angkatan"/>
</p>
<p>
    <label for="nominal">Nominal :</label>
    <input type="text" name="nominal"/>
</p>
<p>
    <input type="submit" value="tambah siswa" name="tambah_siswa"/>
</p>
</fieldset>
</form>
</body>
</html>