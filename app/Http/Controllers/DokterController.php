<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class DokterController extends Controller
{
    public function index(){
        $dokters = Dokter::all();
        return view('dokter.index',[
            'dokters' => $dokters
        ]);
    }
    
    public function create(){
        return view('dokter.create');
    }


public function store(Request $request){

        // validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'spesialis' => 'required',
            'telp' => 'required|numeric',
        ]);

    Dokter::create([
        'nama' => $request->nama,
        'spesialis' => $request->spesialis,
        'telp' => $request->telp,
    ]);

    return redirect('/dokter');
}

// methode untuk menampilkan form edit
public function edit($id){
    // cari dokter berdasrkan id
    $dokter = Dokter::find($id);

    return view('dokter.edit', [
        'dokter' => $dokter
    ]);
}

// methode untuk update
public function update($id, Request $request){
    // validasi data form
    $request->validate([
        'nama' => 'required|min:3',
        'spesialis' => 'required|',
        'telp' => 'required|numeric',
    ]);

    // cari pasien berdasarkan id
    $dokter = Dokter::find($id);

    // meniympan perubahan
    $dokter->update([
            'nama' => $request->nama,
            'spesialis' => $request->spesialis,
            'telp' => $request->telp,
        ]);

        return redirect('/dokter')->with('success', 'data dokter berhasil di ubah.');
}

// methode untuk menghapus data pasien
public function destroy(Request $request)
{
    Dokter::destroy($request->dokter_id);

    return redirect('/dokter');
}

}