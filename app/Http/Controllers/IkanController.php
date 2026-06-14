<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class IkanController extends Controller
{
    public function index()
    {
        $ikan = DB::table('ikan')->paginate(10);
        return view('ikan.index', ['ikan' => $ikan]);
    }

    public function cari(Request $request)
    {
        $cari = $request->cari;
        $ikan = DB::table('ikan')
            ->where('namaikan', 'like', "%" . $cari . "%")
            ->paginate();
        return view('ikan.index', ['ikan' => $ikan]);
    }

    public function tambah()
    {
        return view('ikan.tambah');
    }

    public function store(Request $request)
    {
        DB::table('ikan')->insert([
            'namaikan'   => $request->namaikan,
            'jumlahikan' => $request->jumlahikan,
            'tersedia'   => $request->tersedia,
        ]);
        return redirect('/praeas');
    }

    public function edit($id)
    {
        $ikan = DB::table('ikan')->where('kodeikan', $id)->get();
        return view('ikan.edit', ['ikan' => $ikan]);
    }

    public function update(Request $request)
    {
        DB::table('ikan')->where('kodeikan', $request->id)->update([
            'namaikan'   => $request->namaikan,
            'jumlahikan' => $request->jumlahikan,
            'tersedia'   => $request->tersedia,
        ]);
        return redirect('/praeas');
    }

    public function hapus($id)
    {
        DB::table('ikan')->where('kodeikan', $id)->delete();
        return redirect('/praeas');
    }
}
