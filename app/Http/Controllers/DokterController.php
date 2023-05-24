<?php

namespace App\Http\Controllers;

use App\Models\Dokter;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\FuncCall;

class DokterController extends Controller
{
    public function index(){
        $dokters = Dokter::getAll();
        return view('dokter.index',[
            'dokters' => $dokters
        ]);
    }
    
    public function create(){
        return view('dokter.create');
    }

    public function store(Request $request){
        dd($request->all());
    }
}
