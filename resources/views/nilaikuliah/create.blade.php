@extends('template')

@section('title', 'Tambah Nilai Kuliah')

@section('konten')

<div style="padding: 20px; margin-top: 80px; color: black;">
    <form action="/nilaikuliahstore" method="POST">
        @csrf

        <label>NRP</label><br>
        <input type="text" name="NRP" maxlength="6"><br><br>

        <label>Nilai Angka</label><br>
        <input type="text" name="NilaiAngka"><br><br>

        <label>SKS</label><br>
        <input type="text" name="SKS"><br><br>

        <button type="submit">Simpan</button>
        <a href="/nilaikuliah" style="color: black;">Batal</a>
    </form>
</div>

@endsection
