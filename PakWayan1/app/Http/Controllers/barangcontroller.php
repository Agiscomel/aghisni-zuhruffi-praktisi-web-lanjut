<?php

namespace App\Http\Controllers;

use App\Models\barang;
use Illuminate\Http\Request;

class barangcontroller extends Controller
{
    public function barangview(){
        $nama = barang::all();
        return view('backend.user.view_barang',compact('nama'));
    }
    public function editbarang($id){
        $nama = barang::Find($id);
        return view('backend.user.barang_edit',compact('nama'));
    }
    public function barangadd($id){
        $nama = barang::Find($id);
        return view('backend.user.add_barang',compact('nama'));
    }
    public function barangUpdate(Request $request, $id){
        

        $data=barang::find($id);
        $data->nama=$request->nama;
        $data->harga=$request->harga;
        $data->jumlah=$request->jumlah;
        // if($request->password!=""){
        //     $data->password=bcrypt($request->password);
        // }
       
        $data->save();

        return redirect()->route('barang.view')->with('info','Update User Berhasil');
    }
    
}
