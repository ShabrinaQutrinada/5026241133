@extends('template')
@section('title', 'Kode Soal penggajian')
@section('konten')
    <center>
        <h2>Data Penggajian</h2>
        <br />
        <a href="/eastambah" class="btn btn-primary">Tambah Data</a>
        <br /><br />
        <table class="table table-striped table-hover">
            <tr>
                <th>NIP</th>
                <th>Gaji Pokok</th>
                <th>Potongan</th>
                <th>Gaji Bersih</th>
                <th>Persentase Potongan</th>
            </tr>
            @foreach ($penggajian as $p)
                @php
                    $gajiBersih = $p->gajipokok - $p->potongan;
                    $persentase = $p->gajipokok != 0 ? ($gajiBersih / $p->gajipokok) * 100 : 0;
                @endphp
                <tr>
                    <td>{{ $p->nip }}</td>
                    <td>{{ $p->gajipokok }}</td>
                    <td>{{ $p->potongan }}</td>
                    <td>{{ $gajiBersih }}</td>
                    <td>{{ number_format($persentase, 2) }}%</td>
                </tr>
            @endforeach
        </table>
    </center>
@endsection
