<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contract\KategoriContract;
use App\Models\Kategori;


class KategoriController extends Controller
{
    
    private $KategoriContract;

    public function __construct($KategoriContract) {
        $this->KategoriContract = $KategoriContract;
    }

    public function index() {
        $data = $this->KategoriContract->index();
        return $data;
    }

    public function store(Request $request) {
        $this->KategoriContract->store($request->all());
        return response()->json([
            'status' => 'berhasil tambah data'
        ]);
    }

    public function edit ($id) {
        $data = $this->KategoriContract->edit($id);
        return $data;
    }

    public function update(Request $request, $id) {
        $data = $request->all();
        $tes = $this->KategoriContract->update($data, $id);
        return response()->json([
            'data' => $tes,
            'status' => 'Berhasil Ubah data'
        ]);
    }

    public function destroy($id) {

        $this->KategoriContract->destroy($id);
        return response()->json([
            'status' => 'Berhasil hapus data'
        ]);

    }
}
