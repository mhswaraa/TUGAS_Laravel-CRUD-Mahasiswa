<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Tambah Data Mahasiswa</title>
</head>
<body>

    <h3>Halaman Tambah Data Mahasiswa</h3>
    <a href="/mahasiswa">Kembali</a>
    
    <br>
    <form action="/mahasiswa/store" method="post">
        {{ csrf_field() }}
        NIM <input type="text" name="nim" required="required" placeholder="NIM"><br>
        Nama <input type="text" name="nama" required="required" placeholder="Nama Lengkap"><br>
        Alamat <input type="text" name="alamat" required="required" placeholder="Alamat"><br>
        Hp <input type="text" name="hp" required="required" placeholder="hp"><br>
        <input type="submit" value="Simpan Data">

    </form>
</body>
</html>