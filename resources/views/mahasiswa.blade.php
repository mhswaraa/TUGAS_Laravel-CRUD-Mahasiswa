@extends('layout.template')
@section('content')


<div class="card">
    <div class="card-header">
            <h1>Sistem Informasi Akademik</h1>
            <h4>UNIVERSITAS DUTA BANGSA</h4>
            <br>
            <a class="btn btn-danger btn-sm" href="/tambah"> + Mahasiswa Baru</a>
            <a class="btn btn-info btn-sm" href="/mahasiswa/cetak_pdf" target="_blank"> CETAK PDF </a>
            <a class="btn btn-info btn-sm" href="/mahasiswa/export_excel" class="btn btn-succes my-3" target="_blank"> EXPORT EXCEL</a>
          

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>

    <table border="1">
    </div>
    <div class="card-body p-0">
      <table class="table table-striped projects">
          <thead>
              <tr>
                  <th style="width: 1%">
                      #
                  </th>
                  <th style="width: 20%">
                      NIM
                  </th>
                  <th style="width: 30%">
                      Nama
                  </th>
                  <th>
                      Alamat
                    </th>
                    <th style="width: 8%" class="text-center">
                        HP
                        <th style="width: 20%">
                    </th>
                </tr>
            </thead>
            
            {{-- call database --}}
            @foreach ($data as $mahasiswa)
            <tbody>
                <tr>
                    <td>
                        #
                    </td>
                    <td>
                        {{ $mahasiswa->nim }}
                    </td>
                    <td>
                        {{ $mahasiswa->nama }}   
                    </td>
                    <td>
                        {{ $mahasiswa->alamat }}    
                    </td>
                    <td> 
                        {{ $mahasiswa->hp }}
                    </td>
                <td class="project-actions text-right">
                    <a class="btn btn-info btn-sm" href="/mahasiswa/ubah/{{ $mahasiswa->nim }}">
                        <i class="fas fa-pencil-alt">
                        </i>
                        Edit
                        
                    @method('delete')
                    </a>
                    <a class="btn btn-danger btn-sm" href="/hapus/{{ $mahasiswa->nim }}">
                        <i class="fas fa-trash">
                        </i>
                        Delete
                    </a>
                </td>
            </tr>
        </tbody>
        @endforeach
        </tr>
    </table>
@endsection