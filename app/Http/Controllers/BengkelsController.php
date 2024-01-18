<?php

namespace App\Http\Controllers;
use App\Models\Bengkel;

use Illuminate\Http\Request;

class BengkelsController extends Controller
{

    public function index()
    {
        $datas = Bengkel::orderBy('id', 'DESC')->paginate(5);
        return view('user.layouts.index', ['datas' => $datas]);
    }

    public function detail ($id)
    {
        $data = Bengkel::find($id);
        return view('user.detail', ['data' => $data]);
    }
}