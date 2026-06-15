
<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PegawaiDBController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function () {
	return "<h1>Halo, Selamat datang </h1> di tutorial laravel <i>www.malasngoding.com</i>";
});

Route::get('blog', function () {
    return view('blog');

});

Route::get('pert1', function () {
    return view('pertemuan1');
});

Route::get('pert2', function () {
    return view('pertemuan2');
});

Route::get('pert3', function () {
    return view('pertemuan3');
});

Route::get('tugaspert3', function () {
    return view('tugaspertemuan3');
});

Route::get('pert4', function () {
    return view('pertemuan4');
});

Route::get('pert5', function () {
    return view('pertemuan5');
});

Route::get('tugaspert5linktree', function () {
    return view('tugaspertemuan5linktree');
});

Route::get('tugaspert5makeoverig', function () {
    return view('tugaspertemuan5makeoverIG');
});

Route::get('dashboard', function () {
    return view('menu');
});

Route::get('dosen', [DosenController::class, 'index1']);

Route::get('biodata', [DosenController::class, 'biodata']);

Route::get('/pegawailama/{nama}', [PegawaiController::class, 'index']);

Route::get('/formulir', [PegawaiController::class, 'formulir']);

Route::post('/formulir/proses', [PegawaiController::class, 'proses']);

//CRUD TABEL PEGAWAI
Route::get('/pegawai', [PegawaiDBController::class, 'index']);
Route::get('/pegawaitambah', [PegawaiDBController::class, 'tambah']);
Route::post('/pegawaistore', [PegawaiDBController::class, 'store']);
Route::get('/pegawaiedit/{id}', [PegawaiDBController::class, 'edit']);
Route::post('/pegawaiupdate', [PegawaiDBController::class, 'update']);
Route::get('/pegawaihapus/{id}', [PegawaiDBController::class, 'hapus']);
Route::get('/pegawaicari', [PegawaiDBController::class, 'cari']);

//percobaan eas
use App\Http\Controllers\NilaikuliahController;
Route::get('/nilaikuliah', [NilaikuliahController::class, 'index']);
Route::get('/nilaikuliahtambah', [NilaikuliahController::class, 'create']);
Route::post('/nilaikuliahstore', [NilaikuliahController::class, 'store']);

//SIAP EAS-KERANJANG BELANJA
use App\Http\Controllers\KeranjangBelanjaController;
Route::get('/keranjang', [KeranjangBelanjaController::class, 'index'])->name('keranjang.index');
Route::get('/keranjang/tambah', [KeranjangBelanjaController::class, 'create'])->name('keranjang.create');
Route::post('/keranjang/simpan', [KeranjangBelanjaController::class, 'store'])->name('keranjang.store');
Route::delete('/keranjang/{id}', [KeranjangBelanjaController::class, 'destroy'])->name('keranjang.destroy');

//PRA EAS
use App\Http\Controllers\IkanController;
Route::get('/praeas', [IkanController::class, 'index']);
Route::get('/praeastambah', [IkanController::class, 'tambah']);
Route::post('/praeasstore', [IkanController::class, 'store']);
Route::get('/praeaseedit/{id}', [IkanController::class, 'edit']);
Route::post('/praeasupdate', [IkanController::class, 'update']);
Route::get('/praeashapus/{id}', [IkanController::class, 'hapus']);
Route::get('/praeascari', [IkanController::class, 'cari']);

//route CRUD siswa
use App\Http\Controllers\SiswaController;
Route::get('/siswa', [SiswaController::class, 'index'])->name('siswa.index');
Route::get('/siswa/create', [SiswaController::class, 'create'])->name('siswa.create');
Route::post('/siswa', [SiswaController::class, 'store'])->name('siswa.store');
Route::get('/siswa/{nrp}/edit', [SiswaController::class, 'edit'])->name('siswa.edit');
Route::put('/siswa/{nrp}', [SiswaController::class, 'update'])->name('siswa.update');
Route::delete('/siswa/{nrp}', [SiswaController::class, 'destroy'])->name('siswa.destroy');

//route CRUD PENGAAJIAN-EAS
use App\Http\Controllers\PenggajianController;
Route::get('/eas', [PenggajianController::class, 'index']);
Route::get('/eastambah', [PenggajianController::class, 'tambah']);
Route::post('/easstore', [PenggajianController::class, 'store']);
