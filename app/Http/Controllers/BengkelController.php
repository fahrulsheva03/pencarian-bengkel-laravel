<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Kategori;

class BengkelController extends Controller
{
    private $BengkelContract;

    public function __construct($BengkelContract)
    {

        $this->BengkelContract = $BengkelContract;
    }

    public function index()
    {
        $data = $this->BengkelContract->index();
        return $data;
    }

    public function store(Request $request)
    {
        // $extention = $request->file('gambar')->getClientOriginalExtension();
        // $namaBaru = $request->nama_bengkel . "-" . now()->timestamp . "." . $extention;
        // $request->file('gambar')->storeAs('gambar' , $namaBaru);

        // $request['peta']= $namaBaru;
        $this->BengkelContract->store($request->all());
        return response()->json([
            'status' => 'berhasil tambah data'
        ]);
    }

    public function edit($id)
    {
        $data = $this->BengkelContract->edit($id);
        return $data;
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $tes = $this->BengkelContract->update($data, $id);
        return response()->json([
            'data' => $tes,
            'status' => 'Berhasil Ubah data'
        ]);
    }

    public function destroy($id)
    {

        $this->BengkelContract->destroy($id);
        return response()->json([
            'status' => 'Berhasil hapus data'
        ]);
    }
}
