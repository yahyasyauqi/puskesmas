<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokter extends Model
{
    use HasFactory;

// menghubungkan model dengan tabel pasiens
protected $table = 'dokters';

// deklarasikan kolom yang boleh diisi
protected $fillable = ['nama', 'spesialis', 'telp'];
}