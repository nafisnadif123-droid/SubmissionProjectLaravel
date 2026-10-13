@extends('layouts.app')

@section('title', 'Profil Mahasiswa')

@section('content')
    <h1>Profil Mahasiswa</h1>
    <p><strong>Nama:</strong> {{ $nama }}</p>
    <p><strong>NIM:</strong> {{ $nim }}</p>
    <p><strong>Prodi:</strong> {{ $prodi }}</p>
@endsection