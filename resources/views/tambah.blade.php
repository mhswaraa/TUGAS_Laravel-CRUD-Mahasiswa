@extends('layout.template')
@section('content')


    <form action="/mahasiswa/store" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">General</h3>
        
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">NIM</label>
                    <input type="text" name="nim" class="form-control" required="required" placeholder="NIM">
                  <div class="form-group">
                    <label for="inputName">NAMA</label>
                    <input type="text" name="nama" class="form-control" required="required" placeholder="Nama Lengkap">
                  <div class="form-group">
                    <label for="inputName">ALAMAT</label>
                    <input type="text" name="alamat" class="form-control" required="required"  placeholder="Alamat">
                  <div class="form-group">
                    <label for="inputName">HP</label>
                    <input type="text" name="hp" class="form-control" required="required" placeholder="hp">
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <a href="#" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="Tambah" class="btn btn-success float-right">
            </div>
          </div>
@endsection


{{-- @extends('layout.template')
@section('content')

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

@endsection --}}