<?php

namespace App\Http\Controllers\elo;

use App\Http\Controllers\Controller;
use App\Models\Jasa;
use Illuminate\Http\Request;

class JasaController extends Controller
{
    public function index()
    {
        $datas = Jasa::orderBy('id', 'DESC')->paginate(5);
        return view('admin.jasa.index', ['datas' => $datas]);
    }

    public function cari(Request $request)
    {

        $cari = $request->cari;
        $data = Jasa::where('nama_jasa', 'like', "%" . $cari . "%")->paginate();

        return view('admin.jasa.index', ['datas' => $data]);
    }

    public function add()
    {
        return view('admin.modals.jasa.add');
    }

    public function store(Request $request)
    {
        Jasa::create($request->all());
        return redirect()->route('index.jasa');
    }

    public function edit($id)
    {
        $data = Jasa::find($id);
        return view('admin.jasa.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $data = Jasa::find($request->id);
        $data->update($request->all());
        return redirect()->route('index.jasa');
    }

    public function destroy($id)
    {
        $data = Jasa::find($id);
        $data->delete();
        return redirect()->route('index.jasa');
    }
}
