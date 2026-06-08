@extends('template')

@section('title', 'EAS - Nilai Kuliah')

@section('konten')

<div style="padding: 20px; margin-top: 100px; color: black;">
    <a href="/nilaikuliahtambah" style="color: #0d6efd;">Tambah Data</a>
    <br><br>

    <table border="1" cellpadding="8" style="color: black; background-color: white;">
        <tr style="background-color: #0d6efd; color: white;">
            <th>ID</th>
            <th>NRP</th>
            <th>Nilai Angka</th>
            <th>SKS</th>
            <th>Nilai Huruf</th>
            <th>Bobot</th>
        </tr>
        @foreach ($data as $item)
        <tr>
            <td>{{ $item->id }}</td>
            <td>{{ $item->NRP }}</td>
            <td>{{ $item->NilaiAngka }}</td>
            <td>{{ $item->SKS }}</td>
            <td>
                @if ($item->NilaiAngka <= 40) D
                @elseif ($item->NilaiAngka <= 60) C
                @elseif ($item->NilaiAngka <= 80) B
                @else A
                @endif
            </td>
            <td>{{ $item->NilaiAngka * $item->SKS }}</td>
        </tr>
        @endforeach
    </table>
</div>

@endsection
