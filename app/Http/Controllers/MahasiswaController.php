<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function profil()
    {
        $nama = "M. Nadil Ulum AnNafis"; 
        $nim = "242520090"; 
        $prodi = "Informatika";

        return view('mahasiswa.profil', compact('nama', 'nim', 'prodi'));
    }
    public function daftar()
    {
        $mahasiswa = [
            ['nim' => '242520090', 'nama' => 'M. Nadil Ulum AnNafis', 'ipk' => 3.80],
            ['nim' => '2200018002', 'nama' => 'Siti Rahma', 'ipk' => 3.25],
            ['nim' => '2200018003', 'nama' => 'Andi Wijaya', 'ipk' => 2.85],
            ['nim' => '2200018004', 'nama' => 'Dewi Lestari', 'ipk' => 1.90],
            ['nim' => '2200018005', 'nama' => 'Eko Prasetyo', 'ipk' => 3.55],
        ];

        return view('mahasiswa.daftar', compact('mahasiswa'));
    }
    public function detail($nim)
    {
        $daftarMahasiswa = [
            ['nim' => '242520090', 'nama' => 'M. Nadil Ulum AnNafis', 'ipk' => 3.80],
            ['nim' => '2200018002', 'nama' => 'Siti Rahma', 'ipk' => 3.25],
            ['nim' => '2200018003', 'nama' => 'Andi Wijaya', 'ipk' => 2.85],
            ['nim' => '2200018004', 'nama' => 'Dewi Lestari', 'ipk' => 1.90],
            ['nim' => '2200018005', 'nama' => 'Eko Prasetyo', 'ipk' => 3.55],
        ];

        $mahasiswa = collect($daftarMahasiswa)->firstWhere('nim', $nim);

        abort_unless($mahasiswa, 404);

        return view('mahasiswa.detail', compact('mahasiswa'));
    }
}