<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

    public static function getAll(){
        return[
            [ 
                'nama'=>'yahya ',
                'spesialis'=>'gigi',  
                'telp'=>'08123456789',
                'alamat'=>'Depok'],
            
            
                ['nama'=>'nazla',
                'spesialis'=>'ginjal',
                'telp'=>'08123456789',
                'alamat'=>'Jakarta'],
            
            
                ['nama'=>'citra',
                'spesialis'=>'jantung',                
                'telp'=>'08123456789',
                'alamat'=>'Bogor'
            ],
        ];
    }
}
