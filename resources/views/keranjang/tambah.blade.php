@extends('template')
@section('title', 'Keranjang Belanja')
@section('konten')

    <h2>Tambah Data Belanja</h2>

    @if ($errors->any())
        <ul style="color: red;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif

    <div class="card">
        <div class="card-header">Form Tambah Data Belanja</div>
        <div class="card-body">
            <form action="{{ route('keranjang.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Kode Barang</label>
                    <div class="col-sm-10">
                        <input type="number" name="KodeBarang" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="number" name="Jumlah" class="form-control" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label">Harga</label>
                    <div class="col-sm-10">
                        <input type="number" name="Harga" class="form-control" required>
                    </div>
                </div>
                <div class="row">
                    <div class="offset-sm-2 col-sm-10">
                        <input type="submit" value="Simpan Data" class="btn btn-primary">
                        <a href="{{ route('keranjang.index') }}" class="btn btn-secondary">Kembali</a>
                    </div>
                </div>
            </form>
        </div>
    </div>

@endsection
