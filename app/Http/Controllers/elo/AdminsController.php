<?php

namespace App\Http\Controllers\elo;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;

class adminsController extends Controller
{
    public function index()
    {
        $datas = Admin::orderBy('id', 'DESC')->paginate(5);
        return view('admin.admin.index', ['datas' => $datas]);
    }

    public function cari(Request $request)
    {

        $cari = $request->cari;
        $data = Admin::where('username', 'like', "%" . $cari . "%")->paginate();

        return view('admin.admin.index', ['datas' => $data]);
    }

    public function add()
    {
        return view('admin.admin.add');
    }

    public function store(Request $request)
    {
        Admin::create($request->all());
        return redirect()->route('index.admin');
    }

    public function edit($id)
    {
        $data = Admin::find($id);
        return view('admin.admin.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        $data = Admin::find($request->id);
        $data->update($request->all());
        return redirect()->route('index.admin');
    }

    public function destroy($id)
    {
        $data = Admin::find($id);
        $data->delete();
        return redirect()->route('index.admin');
    }
}
