@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <h2>Data Keranjang Belanja</h2>

    @if (session('success'))
        <p style="color: green;">{{ session('success') }}</p>
    @endif

    <a href="{{ route('keranjang.create') }}" class="btn btn-primary mb-3">Beli</a>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Kode Pembelian</th>
                <th>Kode Barang</th>
                <th>Jumlah Pembelian</th>
                <th>Harga per Item</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($data as $row)
            <tr>
                <td>{{ $row->id }}</td>
                <td>{{ $row->KodeBarang }}</td>
                <td>{{ $row->Jumlah }}</td>
                <td>Rp {{ number_format($row->Harga, 0, ',', '.') }}</td>
                <td>Rp {{ number_format($row->Jumlah * $row->Harga, 0, ',', '.') }}</td>
                <td>
    <a href="{{ route('keranjang.create') }}" class="btn btn-warning btn-sm">Beli</a>
    <form action="{{ route('keranjang.destroy', $row->id) }}" method="POST" style="display:inline;"
        onsubmit="return confirm('Yakin ingin membatalkan?')">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger btn-sm">Batal</button>
    </form>
</td>
            </tr>
            @endforeach
        </tbody>
    </table>

@endsection
