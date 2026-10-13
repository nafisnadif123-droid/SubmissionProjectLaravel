@extends('layouts.app')

@section('title', 'Daftar Mahasiswa')

@section('content')
    <h1>Daftar Mahasiswa</h1>

    @php
        $adaIpkRendah = collect($mahasiswa)->contains(fn($m) => $m['ipk'] < 2.0);
    @endphp

    @if ($adaIpkRendah)
        <x-alert tipe="bahaya">
            <strong>Peringatan!</strong> Terdapat mahasiswa dengan IPK di bawah 2.0.
        </x-alert>
    @endif

    <table border="1" cellpadding="8" cellspacing="0">
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>IPK</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($mahasiswa as $m)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $m['nim'] }}</td>
                    <td>{{ $m['nama'] }}</td>
                    <td>{{ number_format($m['ipk'], 2) }}</td>
                    <td>
                        @if ($m['ipk'] >= 3.5)
                            Cum Laude
                        @elseif ($m['ipk'] >= 3.0)
                            Baik
                        @else
                            Perlu ditingkatkan
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('mahasiswa.detail', $m['nim']) }}">Detail</a>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="6">Belum ada data.</td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection
