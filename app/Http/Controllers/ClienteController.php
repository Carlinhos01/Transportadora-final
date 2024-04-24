<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Cliente;

class ClienteController extends Controller
{
    public function showHome(){
        return view("home");
    }

    public function showCadClie(Request $request){
        return view ("cadastroClie");
    }

    public function cadClie(Request $request){
        // dd($request);
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'email' => 'string|required',
            'fone' => 'string|required'
        ]);
        // dd($dadosValidos);
        Cliente::Create($dadosValidos);
        return view("contratoservic");
    }
}

