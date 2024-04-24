<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\contratoservico;

class ContratoservicoController extends Controller
{
    public function showHome(){
        return view('home');
    }
    
    public function showContrServic(Request $request){
        return view ("contratoservic");
    }

    public function contrServic(Request $request){
        $dadosValidos = $request-> validate([
            'tipo' => 'string|required',
            'caminhao' => 'string|required',
            'localsaida' => 'string|required',
            'localchegada' => 'string|required'
            
        ]);
        contratoservico::create($dadosValidos);
        return view("home");
    }
}
