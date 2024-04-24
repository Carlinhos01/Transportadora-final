<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\cadastroservico;


class CadastroservicoController extends Controller
{
    public function showHome(){
        return view('home');
    }
    
    public function showCadServic(Request $request){
        return view ("cadastroservic");
    }

    public function cadServic(Request $request){
        $dadosValidos = $request->validate([
            'tipo' => 'string|required',
            'caminhao' => 'string|required',
            'pagamento' => 'string|required'
            
        ]);
        // dd($dadosValidos);
        cadastroservico::Create($dadosValidos);
        return view("home");
        // dd($dadosValidos);  
    }
}
