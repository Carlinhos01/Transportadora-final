<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class contratoservico extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo',
        'caminhao',
        'localsaida',
        'localchegada'
    ];
}
