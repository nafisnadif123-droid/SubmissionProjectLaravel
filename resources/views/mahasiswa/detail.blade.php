@extends('layouts.app')

@section('title', 'Detail Mahasiswa')

@section('content')
    <h1>Detail Mahasiswa</h1>
    <ul>
        <li><strong>NIM:</strong> {{ $mahasiswa['nim'] }}</li>
        <li><strong>Nama:</strong> {{ $mahasiswa['nama'] }}</li>
        <li><strong>IPK:</strong> {{ number_format($mahasiswa['ipk'], 2) }}</li>
    </ul>
    <br>
    <a href="{{ route('mahasiswa.index') }}">&laquo; Kembali ke Daftar Mahasiswa</a>
@endsection