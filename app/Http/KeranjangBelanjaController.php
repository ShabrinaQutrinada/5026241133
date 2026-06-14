<?php

namespace App\Http\Controllers;

use App\Models\KeranjangBelanja;
use Illuminate\Http\Request;

class KeranjangBelanjaController extends Controller
{
    public function index()
    {
        $data = KeranjangBelanja::all();
        return view('keranjang.index', compact('data'));
    }

    public function create()
    {
        return view('keranjang.tambah');
    }

    public function store(Request $request)
    {
        $request->validate([
            'KodeBarang' => 'required|integer',
            'Jumlah'     => 'required|integer',
            'Harga'      => 'required|integer',
        ]);

        KeranjangBelanja::create($request->only(['KodeBarang', 'Jumlah', 'Harga']));

        return redirect()->route('keranjang.index')->with('success', 'Data berhasil ditambahkan!');
    }

    public function destroy($id)
    {
        KeranjangBelanja::findOrFail($id)->delete();
        return redirect()->route('keranjang.index')->with('success', 'Data berhasil dihapus!');
    }
}
