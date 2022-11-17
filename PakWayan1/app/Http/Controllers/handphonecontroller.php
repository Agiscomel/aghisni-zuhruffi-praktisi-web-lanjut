<?php

namespace App\Http\Controllers;

use App\Models\handphone;
use Illuminate\Http\Request;

class handphonecontroller extends Controller
{
    public function handphoneview(){
        $nama = handphone::all();
        return view('backend.handphone.view_handphone',compact('nama'));
        
    }
}
