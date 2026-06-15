@extends('template')
@section('title', 'Kode Soal penggajian')
@section('konten')
    <center>
        <br />
        <div class="card">
            <div class="card-header">Form Tambah Data Penggajian</div>
            <div class="card-body">
                <form action="/easstore" method="POST" onsubmit="return validasiForm()">
                    {{ csrf_field() }}
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">NIP</label>
                        <div class="col-sm-10">
                            <input type="text" name="nip" id="nip" class="form-control" maxlength="8" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Gaji Pokok</label>
                        <div class="col-sm-10">
                            <input type="text" name="gajipokok" id="gajipokok" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">Potongan</label>
                        <div class="col-sm-10">
                            <input type="text" name="potongan" id="potongan" class="form-control" required>
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
        <a href="/eas" class="btn btn-info">Kembali</a>
    </center>

    <script>
        const existingNip = [
            @foreach($penggajian as $p)
                "{{ $p->nip }}",
            @endforeach
        ];

        function validasiForm() {
            let nip = document.getElementById('nip').value.trim();
            let gajipokok = parseFloat(document.getElementById('gajipokok').value);
            let potongan = parseFloat(document.getElementById('potongan').value);

            if (existingNip.includes(nip)) {
                Swal.fire({
                    title: "Kesalahan Input!",
                    text: "NIP sudah ada, NIP harus unik!",
                    icon: "error"
                });
                return false;
            }

            if (potongan >= gajipokok * 0.3) {
                Swal.fire({
                    title: "Kesalahan Input!",
                    text: "Potongan harus kurang dari 30% dari Gaji Pokok!",
                    icon: "error"
                });
                return false;
            }

            return true;
        }
    </script>
@endsection
