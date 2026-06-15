<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PenggajianController extends Controller
{
	public function index()
	{
		$penggajian = DB::table('penggajian')->get();
		return view('penggajian.index', ['penggajian' => $penggajian]);
	}

	public function tambah()
	{
		$penggajian = DB::table('penggajian')->get();
		return view('penggajian.tambah', ['penggajian' => $penggajian]);
	}

	public function store(Request $request)
	{
		DB::table('penggajian')->insert([
			'nip' => $request->nip,
			'gajipokok' => $request->gajipokok,
			'potongan' => $request->potongan
		]);
		return redirect('/eas');
	}
}
