<?php

namespace App\Http\Controllers\elo;

use App\Http\Controllers\Controller;
use App\Models\Bengkel;
use File;
// use App\Models\Kategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BengkelController extends Controller
{
    public function index()
    {
        $datas = Bengkel::orderBy('id', 'DESC')->paginate(5);
        return view('admin.bengkel.index', ['datas' => $datas]);
    }

    public function cari(Request $request)
    {

        $cari = $request->cari;
        $data = Bengkel::where('nama_bengkel', 'like', "%" . $cari . "%")->paginate();

        return view('admin.bengkel.index', ['datas' => $data]);
    }



    public function store(Request $request)
    {


        $fileModel = new Bengkel;
            $fileModel->nama_bengkel = $request->nama_bengkel;
            $fileModel->peta = $request->peta;
            $fileModel->alamat = $request->alamat;
            $fileModel->keterangan = $request->keterangan;

        if($request->file()) {
            $fileName = time().'_'.$request->gambar->getClientOriginalName();
            $filePath = $request->file('gambar')->storeAs('uploads', $fileName, 'public');
            $fileModel->gambar = '/storage/' . $filePath;
        }

        $fileModel->save();
        // Bengkel::create($request->all());
        return redirect()->route('index.bengkel');
    }


    public function edit($id)
    {
        $data = Bengkel::find($id);
        return view('admin.bengkel.edit', ['data' => $data]);
    }

    public function update(Request $request)
    {
        // $fileModel = new Bengkel;
        // $path = $fileModel->gambar;
        // Storage::delete($path);
        $fileModel = Bengkel::find($request->id);


        // \Storage::disk('public')->delete($fileModel->gambar);

        if($request->hasFile('gambar')) {
            File::delete(public_path($fileModel->gambar));
            $fileName = time().'_'.$request->gambar->getClientOriginalName();
            $filePath = $request->file('gambar')->storeAs('uploads', $fileName, 'public');
            $fileModel->gambar = '/storage/' . $filePath;
        }
        $fileModel->nama_bengkel = $request->nama_bengkel;
        $fileModel->peta = $request->peta;
        $fileModel->alamat = $request->alamat;
        $fileModel->keterangan = $request->keterangan;
        $fileModel->save();
        // $data->update($request->all());
        return redirect()->route('index.bengkel');
    }

    public function destroy($id)
    {
        $data = Bengkel::find($id);
        File::delete(public_path($data->gambar));
        $data->delete();
        return redirect()->route('index.bengkel');
    }
}
