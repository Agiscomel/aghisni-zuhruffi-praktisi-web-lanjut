<?php

namespace App\Http\Controllers;

use App\Models\Barang as ModelsBarang;
use Illuminate\Http\Request;

class Barang extends Controller
{
    public function daftarBarang()
    {
        $data = [
            'barang' => ModelsBarang::all()
        ];
        return view('UTS.barang', $data);
    }
    public function reviewBarang($id)
    {
        $reviewBarang = ModelsBarang::Find($id);
        return view('UTS.detailbarang', compact('reviewBarang'));
    }
}
