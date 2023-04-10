<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use Psy\CodeCleaner\FunctionReturnInWriteContextPass;
use PDF;
use App\Exports\MahasiswaExport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controllers;


class MahasiswaController extends Controller
{
    public function index()
    {
        return view('login');
    }
    
    
    public function tampil()
    {
        $data=Mahasiswa::all();
        return view('mahasiswa', ['data'=>$data]);
        
    }
    public function tambah()
    {
        return view('tambah');
    }

    public function simpan(request $request)

    {
        $data=array(
            "nim"=>$request->nim,
            "nama"=>$request->nama,
            "alamat"=>$request->alamat,
            "hp"=>$request->hp,

        );
        $data=Mahasiswa::create($data);
        if($data)
        {
            return redirect('/mahasiswa')->with(array('status'=>true,'Berhasil Tambah Data'));
        } 
        else
        {
            return json_encode(array('status'=>false, 'pesan'=>"Gagal Tambah Data"));
        }
    }
    public function edit(request $request)

    {
        $data=Mahasiswa::where("nim", $request->nim)->update(array(
            "nama"=>$request->nama,
            "alamat"=>$request->alamat,
            "hp"=>$request->hp,

        ));

        if($data)
        {
            return redirect('/mahasiswa')->with(array('status'=>true,'Berhasil Ubah Data'));
        } 
        else
        {
            return json_encode(array('status'=>false, 'pesan'=>"Gagal Ubah Data"));
        }
    }

    public function ubah($nim)
    {
    $data=Mahasiswa::where('nim',$nim)->get();
    return view('ubah', ['data'=>$data]);
    }

    public function hapus($nim)
    {
        $data = Mahasiswa::where("nim", $nim)->delete();
        if($data){
            return redirect('/mahasiswa')->with(array('status'=>true, 'Berhasi; Hapus Data'));
        }
        else
        {
            return json_encode (array(
                'status'=>false,
                'pesan'=>'Gagal Hapus',));
        } 
    }

    public function cetak_pdf()
    {
        $mhs = Mahasiswa::all();

        $pdf = PDF::loadView('pdf', ['mhs' =>$mhs]);
        return $pdf->download('laporan-mahasiswa.pdf');

        }
    
    public function Export_excel()
    {
        return view('excel');
    }
    
} 