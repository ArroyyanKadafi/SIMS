<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $table = "siswa";
    
    protected $fillable = [   
        'nis',     
        'nama',                   
        'tempat_lahir', 
        'tanggal_lahir', 
        'jk', 
        'agama',
        'gol_dar',
        'kelas',
        'jurusan',
        'no_telp',
        'alamat'
    ];
}
