<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\Admin\CidadeController;
use App\Http\Controllers\Admin\ImovelController;

Route::redirect('/', '/admin/cidades');

Route::get('/sobre', function(){ 
    return '<h1>Sobre</h1>';
});

Route::prefix("admin")->name('admin.')->group(function(){

    Route::get('cidades', [CidadeController::class, "cidades"])->name("cidades.listar");
    Route::get('cidades/salvar', [CidadeController::class, "formAdicionar"])->name("cidades.form");
    Route::post('cidades/salvar', [CidadeController::class, "adicionar"])->name("cidades.adicionar");
    Route::delete('cidades/{id}' , [CidadeController::class, "deletar"])->name("cidades.deletar");
    Route::get('cidades/{id}', [CidadeController::class, "formEditar"])->name("cidades.formEditar");
    Route::put('cidades/{id}', [CidadeController::class, "editar"])->name("cidades.editar");
    
    Route::get('imoveis', [ImovelController::class, "index"])->name("imoveis.index");
    Route::get('imoveis/salvar', [ImovelController::class, "formAdicionar"])->name("imoveis.form");
    Route::post('imoveis/salvar', [ImovelController::class, "adicionar"])->name("imoveis.adicionar");
    





});

