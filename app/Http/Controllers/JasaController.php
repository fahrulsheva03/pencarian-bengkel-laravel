<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\Contract\KategoriContract;
use App\Models\Jasa;

class JasaController extends Controller
{
    private $JasaContract;

    public function __construct($JasaContract)
    {
        $this->JasaContract = $JasaContract;
    }

    public function index()
    {
        $data = $this->JasaContract->index();
        return $data;
    }

    public function store(Request $request)
    {
        $this->JasaContract->store($request->all());
        return response()->json([
            'status' => 'berhasil tambah data'
        ]);
    }

    public function edit($id)
    {
        $data = $this->JasaContract->edit($id);
        return $data;
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $tes = $this->JasaContract->update($data, $id);
        return response()->json([
            'data' => $tes,
            'status' => 'Berhasil Ubah data'
        ]);
    }

    public function destroy($id)
    {

        $this->JasaContract->destroy($id);
        return response()->json([
            'status' => 'Berhasil hapus data'
        ]);
    }
}
