<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pemograman Web</title>
</head>
<body>
    <h2> Operasi CRUD</h2>
    <h3>Sistem Informasi Akademik</h3>
    <h4>UNIVERSITAS DUTA BANGSA</h4>

    <a href="/tambah"> + Mahasiswa Baru</a>
    <a href="/mahasiswa/cetak_pdf" target="_blank"> CETAK PDF </a>
    <a href="/mahasiswa/export_excel" class="btn btn-succes my-3" target="_blank"> EXPORT EXCEL</a>

    <table border="1">
        <tr>
            <th>NIM</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Nomor HP</th>
            <th>Opsi</th>

        </tr>

        {{-- call database --}}
        @foreach ($data as $mahasiswa)
        <tr>
            <td>{{ $mahasiswa->nim }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->alamat }}</td>
            <td>{{ $mahasiswa->hp }}</td>
            <td>
                <a href="/mahasiswa/ubah/{{ $mahasiswa->nim }}">EDIT</a>
                    
                    @method('delete')
                {{ csrf_field() }}
                    <a class="btn btn-danger" onclick="return confirm('Anda yakin akan menghapus data ini?')"href="/hapus/{{ $mahasiswa->nim }}"><i class="fa fa-trans"></i>Hapus</a>
            </td>
        @endforeach
        </tr>
    </table>
</body>
</html>