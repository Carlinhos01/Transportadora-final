<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function showHome(){
        return view('home');
    }
    
    public function showCadFuncio(Request $request){
        return view ("cadastroFun");
    }

    public function cadFuncio(Request $request){
        $dadosValidos = $request-> validate([
            'nome' => 'string|required',
            'funcao' => 'string|required'
            
        ]);

        Funcionario::create($dadosValidos);
        return view("cadastroservic");
    }
}
