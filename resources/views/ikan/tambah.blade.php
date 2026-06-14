@extends('template')
@section('title', 'Tambah Ikan')
@section('konten')
    <center>
        <br />
        <div class="card">
            <div class="card-header">Form Tambah Data Ikan</div>
            <div class="card-body">
                <form action="/praeasstore" method="POST">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Nama Ikan</label>
                        <div class="col-sm-10">
                            <input type="text" name="namaikan" class="form-control" maxlength="30" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Jumlah</label>
                        <div class="col-sm-10">
                            <input type="number" name="jumlahikan" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Tersedia (Y/N)</label>
                        <div class="col-sm-10">
                            <input type="text" name="tersedia" class="form-control" maxlength="1" required>
                        </div>
                    </div>
                    <div class="row">
                        <div class="offset-sm-2 col-sm-10">
                            <input type="submit" value="Simpan Data" class="btn btn-primary">
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <br />
        <a href="/praeas" class="btn btn-info">Kembali</a>
    </center>
@endsection
