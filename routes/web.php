<?php

use App\Http\Controllers\ProfileController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\FuncionarioController;
use App\Http\Controllers\CadastroservicoController;
use App\Http\Controllers\ContratoservicoController;


Route::get("/home", [ClienteController::class,'showHome'])->name('home');

Route::get("/formularioCadCliente", [ClienteController::class,'showCadClie'])->name('formularioCadCliente');
Route::post('/formularioCadClie',[ClienteController::class,'cadClie'])->name('envia-banco-cliente');


Route::get("/formularioCadFuncionario", [FuncionarioController::class,'showCadFuncio'])->name('formularioCadFuncionario');
Route::post('/formularioCadFun',[FuncionarioController::class,'cadFuncio'])->name('envia-banco-funcionario');

Route::get("/cadastroServico", [CadastroservicoController::class,'showCadServic'])->name('cadastroServico');
Route::post('/cadastroServic',[CadastroservicoController::class,'cadServic'])->name('envia-banco-cadastro');

Route::get("/contratoServico", [ContratoservicoController::class,'showContrServic'])->name('contratoServico');
Route::post('/contratoServic',[ContratoservicoController::class,'contrServic'])->name('envia-banco-servico');
