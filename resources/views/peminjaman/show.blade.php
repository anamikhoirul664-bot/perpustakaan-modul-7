@extends('layouts.app')

@section('title', 'Detail Peminjaman')

@section('content')
<div class="container">
    <h1>Detail Peminjaman</h1>

    <p>Nama Anggota: {{ $peminjaman->anggota->nama }}</p>
    <p>Email: {{ $peminjaman->anggota->email }}</p>
    <p>Judul Buku: {{ $peminjaman->buku->judul }}</p>
    <p>Tanggal Pinjam: {{ $peminjaman->tanggal_pinjam }}</p>
    <p>Tanggal Kembali: {{ $peminjaman->tanggal_kembali }}</p>
</div>
@endsection