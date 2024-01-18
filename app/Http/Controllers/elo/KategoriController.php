<?php

namespace App\Http\Controllers\elo;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;

class KategoriController extends Controller
{
    public function index() 
    {
        $datas = Kategori::orderBy('id', 'DESC')->paginate(5);
        return view('admin.kategori.index', ['datas' => $datas]);
    }

    public function cari(Request $request) {

        $cari = $request->cari;
        $data = Kategori::where('nama_kategori', 'like', "%". $cari ."%")->paginate();

        return view('admin.kategori.index', ['datas' => $data]);

    }

    public function add() {
        return view('admin.kategori.add');
    }

    public function store(Request $request) 
    {
        Kategori::create($request->all());
        return redirect()->route('index.kategori');
    }

    public function edit($id) {
        $data = Kategori::find($id);
        return view('admin.kategori.edit', ['data' => $data]);
    }

    public function update(Request $request) {
        $data = Kategori::find($request->id);
        $data->update($request->all());
        return redirect()->route('index.kategori');
    }

    public function destroy ($id) {
        $data = Kategori::find($id);
        $data->delete();
        return redirect()->route('index.kategori');
    }
}