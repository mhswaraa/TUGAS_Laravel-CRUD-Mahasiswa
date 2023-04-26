<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index()
    {
        return view('login');
    }
    function login (request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ], [
            'email.required' => 'Email wajib di isi',
            'password.required' => 'Password wajib di isi',
        ]);

        $infologin = [
            'email'=> $request->email,
            'password'=> $request->password
        ];

        if(Auth::attempt($infologin)){

            return redirect('/mahasiswa');
        } else {
            return redirect('')->withErrors('Username dan Password yang anda masukkan salah')->withInput();
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect ('');
    }
}