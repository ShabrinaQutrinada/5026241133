<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DosenController;

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


Route::get('dosen', [DosenController::class, 'index']);
Route::get('biodata', [DosenController::class, 'biodata']);


