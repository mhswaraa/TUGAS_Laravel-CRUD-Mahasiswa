@extends('layout.template')
@section('content')

    @foreach($data as $mahasiswa)
    <form action="/mahasiswa/edit" method="post">
        {{ csrf_field() }}
        <div class="row">
            <div class="col-md-6">
              <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Edit</h3>
        
                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                      <i class="fas fa-minus"></i></button>
                  </div>
                </div>
                <div class="card-body">
                  <div class="form-group">
                    <label for="inputName">NIM</label>
                    <input type="text" name="nim" class="form-control" required="required" value="{{ $mahasiswa->nim }}" placeholder="NIM">
                  <div class="form-group">
                    <label for="inputName">NAMA</label>
                    <input type="text" name="nama" class="form-control" required="required" value="{{ $mahasiswa->nama }}" placeholder="Nama Lengkap">
                  <div class="form-group">
                    <label for="inputName">ALAMAT</label>
                    <input type="text" name="alamat" class="form-control" required="required" value="{{ $mahasiswa->alamat }}" placeholder="Alamat">
                  <div class="form-group">
                    <label for="inputName">HP</label>
                    <input type="text" name="hp" class="form-control" required="required" value="{{ $mahasiswa->hp }}" placeholder="hp">
                  </div>
                </div>
            </div>
          </div>
          <div class="row">
            <div class="col-12">
              <a href="/mahasiswa" class="btn btn-secondary">Cancel</a>
              <input type="submit" value="Save Changes" class="btn btn-success float-right">
            </div>
          </div>
    @endforeach
@endsection