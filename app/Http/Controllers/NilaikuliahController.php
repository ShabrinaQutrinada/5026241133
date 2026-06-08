<?php

namespace App\Http\Controllers;

use App\Models\Nilaikuliah;
use Illuminate\Http\Request;

class NilaikuliahController extends Controller
{
    public function index()
    {
        $data = Nilaikuliah::all();
        return view('nilaikuliah.index', compact('data'));
    }

    public function create()
    {
        return view('nilaikuliah.create');
    }

    public function store(Request $request)
    {
        Nilaikuliah::create($request->all());
        return redirect('/nilaikuliah');
    }
}
