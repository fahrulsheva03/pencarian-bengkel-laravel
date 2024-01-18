<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    private $AdminContract;

    public function __construct($AdminContract)
    {
        $this->AdminContract = $AdminContract;
    }

    public function index()
    {
        $data = $this->AdminContract->index();
        return $data;
    }

    public function store(Request $request)
    {
        $this->AdminContract->store($request->all());
        return response()->json([
            'status' => 'berhasil tambah data'
        ]);
    }

    public function edit($id)
    {
        $data = $this->AdminContract->edit($id);
        return $data;
    }

    public function update(Request $request, $id)
    {
        $data = $request->all();
        $tes = $this->AdminContract->update($data, $id);
        return response()->json([
            'data' => $tes,
            'status' => 'Berhasil Ubah data'
        ]);
    }

    public function destroy($id)
    {

        $this->AdminContract->destroy($id);
        return response()->json([
            'status' => 'Berhasil hapus data'
        ]);
    }
}
