@extends('template')
@section('title', 'Data Ikan')
@section('konten')
    <center>
        <p>Cari Data Ikan :</p>
        <form action="/praeascari" method="GET">
            <input type="text" name="cari" placeholder="Cari Ikan .." class="form-control">
            <input type="submit" value="CARI" class="btn btn-secondary">
        </form>
        <br />
        <table class="table table-striped table-hover">
            <tr>
                <th>Kode</th>
                <th>Nama Ikan</th>
                <th>Jumlah</th>
                <th>Tersedia</th>
                <th>Opsi</th>
            </tr>
            @foreach ($ikan as $i)
                <tr>
                    <td>{{ $i->kodeikan }}</td>
                    <td>{{ $i->namaikan }}</td>
                    <td>{{ $i->jumlahikan }}</td>
                    <td>{{ $i->tersedia }}</td>
                    <td>
                        <a href="/praeaseedit/{{ $i->kodeikan }}" class="btn btn-warning">Edit</a>
                        <a href="/praeashapus/{{ $i->kodeikan }}" class="btn btn-danger"
                            onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                    </td>
                </tr>
            @endforeach
        </table>
        {{ $ikan->links('pagination::bootstrap-5') }}
        <a href="/praeastambah" class="btn btn-primary">Tambah Ikan Baru</a>
    </center>
@endsection
