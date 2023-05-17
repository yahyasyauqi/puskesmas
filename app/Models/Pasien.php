<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pasien extends Model
{
    use HasFactory;

    public static function getAll()
    {
        
        return [
             [
                'nama'=>'Budi', 
                'jk'=>'l',
                'tgl_lahir'=>'12/04/2003', 
                'alamat'=>'Jakarta', 
                'telp'=>'08123456789'
             ],

             [
                'nama'=>'Elsa', 
                'jk'=>'p',
                'tgl_lahir'=>'16/04/2003', 
                'alamat'=>'Jakarta', 
                'telp'=>'08123456789'
             ],

             [
                'nama'=>'Latif', 
                'jk'=>'l',
                'tgl_lahir'=>'08/05/2003', 
                'alamat'=>'Bogor', 
                'telp'=>'08123456789'
             ],
            ];
    }
}