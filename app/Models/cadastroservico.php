<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cadastroservico extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo',
        'caminhao',
        'pagamento'
    ];
}
