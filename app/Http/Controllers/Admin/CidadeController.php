<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CidadeRequest;
use Illuminate\Http\Request;


use App\Http\Requests\CidadeRequests;
use App\Models\Cidade;

class CidadeController extends Controller

{

      public function cidades()
    {
        $subtitulo="Lista de Cidades";

        $cidades=Cidade::all();

        return view("admin.cidades.index", compact ("subtitulo","cidades"));
    }


      public function formAdicionar()
    {   
      $action = route( 'admin.cidades.adicionar' );
      return view('admin.cidades.form' , compact ('action'));
    }

   
      public function adicionar(CidadeRequest $request)
    {    
     //criar um obejto do modelo (classe) cidade
     Cidade::create($request->all());

     $request->session()->flash("sucesso","Cidade $request->nome incluída com sucesso!");

     return redirect()->route("admin.cidades.listar");
    }


      public function deletar($id, Request $request)
    {
     Cidade::destroy($id);
     $request->session()->flash("delete", "Cidade excluida com sucesso!");  
     return redirect()->route("admin.cidades.listar");      
    }


      public function formEditar ($id)
    {
      $cidade = Cidade::find($id);
      $action = route('admin.cidades.editar' , $cidade->id);

      return view('admin.cidades.form' , compact ('cidade','action'));
    }

    public function editar (CidadeRequest $request, $id)
    {
      $cidade = Cidade::find($id);
      $cidade->update($request->all());
    
      $request->session()->flash("sucess","Cidade $request->nome alterada com sucesso!");
      return redirect()->route("admin.cidades.listar");
    }
}