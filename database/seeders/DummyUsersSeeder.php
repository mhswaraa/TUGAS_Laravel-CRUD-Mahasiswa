<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DummyUsersSeeder extends Seeder
{
    public function run(): void
    {
        $userData = [
            [
                'name'=>'Admin Kelas',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>bcrypt('admin12345')
            ],
            [
                'name'=>'Pengurus Kelas',
                'email'=>'pengurus@gmail.com',
                'role'=>'pengurus',
                'password'=>bcrypt('pengurus12345')
            ],
            [
                'name'=>'Anggota',
                'email'=>'anggota@gmail.com',
                'role'=>'anggota',
                'password'=>bcrypt('anggota12345')
            ],
        ];
        
        foreach($userData as $key => $val){
            User::create($val);
        }
    }
}
