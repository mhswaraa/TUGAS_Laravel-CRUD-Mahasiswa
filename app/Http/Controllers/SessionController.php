<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    //menampilkan isi session
    public function tampilkanSession(Request$request)
    {
        if($request->session()->has('nama')){
            echo $request->session()->get('name');
        }else{
            echo 'Tidak ada data dalam session.';
        }
    }

    //membuat session

    public function buatSession(Request $request) {
        $request->session()->put('nama', 'Maheswara Wira Yoganata - Administrator');
        echo "Data telah di tambahkan ke session.";

    }

    public function hapusSession(Request $request) {
        $request->session()->forget('nama');
        echo "Data ttelah di hapus ke session.";
    }
}
