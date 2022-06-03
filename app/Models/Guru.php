<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    use HasFactory;

    protected $table = "guru";
    
    protected $fillable = [        
        'nip', 
        'nama', 
        'kode_guru', 
        'tempat_lahir', 
        'tanggal_lahir', 
        'jk', 
        'alamat', 
        'honor_perjam'
    ];
}
