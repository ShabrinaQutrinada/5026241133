<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NilaikuliahController extends Controller
{
    public function index()
    {
        $nilaikuliah = DB::table('nilaikuliah')->get();
        return view('nilaikuliah.index', ['nilaikuliah' => $nilaikuliah]);
    }

    public function create()
    {
        return view('nilaikuliah.create');
    }

    public function store(Request $request)
    {
        DB::table('nilaikuliah')->insert([
            'NRP'        => $request->NRP,
            'NilaiAngka' => $request->NilaiAngka,
            'SKS'        => $request->SKS,
        ]);
        return redirect('/nilaikuliah');
    }
}
