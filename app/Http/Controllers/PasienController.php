<?php

namespace App\Http\Controllers;

use App\Models\Pasien;
use Illuminate\Http\Request;

class PasienController extends Controller
{

    public function index()
    {
        // mendapatkan semua data pada tabel pasiens
        $pasiens = Pasien::all();
        return view('pasien/index', [
            'pasiens' => $pasiens
        ]);
    }

    public function create()
    {
        return view('pasien.create');
    }

    //method untuk menampilkan form tambah pasien ke database
    public function store(Request $request)
{       
        // validasi data form
        $request->validate([
            'nama' => 'required|min:3',
            'jk' => 'required',
            'alamat' => 'required',
            'tgl_lahir' => 'required|date',
            'telp' => 'required|numeric',
        ]);

    Pasien::create([
        'nama' => $request->nama,
        'jk' => $request->jk,
        'alamat' => $request->alamat,
        'tgl_lahir' => $request->tgl_lahir,
        'telp' => $request->telp,
    ]);
    
    return redirect('/pasien');
}

//method untuk menampilkan form edit
public function edit($id){
    // cari pasien bedasarkan id
    $pasien = Pasien::find($id);

    return view('pasien.edit',[
        'pasien' => $pasien
    ]);
}

// method untuk update pasien
public function update($id, Request $request){
     // validasi data form
     $request->validate([
        'nama' => 'required|min:3',
        'jk' => 'required',
        'alamat' => 'required',
        'tgl_lahir' => 'required|date',
        'telp' => 'required|numeric',
    ]);

    // cari pasien bedasarkan id
    $pasien = Pasien::find($id);

    // menyimpan perubahan
    $pasien->update([
        'nama' => $request->nama,
        'jk' => $request->jk,
        'alamat' => $request->alamat,
        'tgl_lahir' => $request->tgl_lahir,
        'telp' => $request->telp,
    ]);

    return redirect('/pasien')->with('success', 'Data pasien berhasil di ubah.');
}

// method untuk mengapus data pasien
public function destroy(Request $request)
{
    Pasien::destroy($request->id);

    return redirect('/pasien');
}
}