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

    public function store(Request $request)
{
    Pasien::create([
        'nama' => $request->nama,
        'jk' => $request->jk,
        'alamat' => $request->alamat,
        'tgl_lahir' => $request->tgl_lahir,
        'telp' => $request->telp,
    ]);
    
    return redirect('/pasien');
}

// method untuk mengapus data pasien
public function destroy(Request $request)
{
    Pasien::destroy($request->id);

    return redirect('/pasien');
}
}