<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Siswa;

class TambahSiswaController extends Controller
{
    public function create(){
        return view('');
    }

     public function store(Request $request){
         Siswa::create($request->all());
         return redirect()->route('siswa.index');
    }
}
