<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jadpel extends Model
{
    use HasFactory;

    protected $table = "jadpel";

    protected $fillable = [
        'hari',
        'waktu',
        'jam',
        'mapel',        
    ];
}
