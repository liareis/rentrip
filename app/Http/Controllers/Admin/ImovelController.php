<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Molds\Imovel;

class ImovelController extends Controller

{
    

    public function index()
    {
       $subtitulo = "Lista de Imoveis";

        return view("admin.imoveis.index");
    }


    public function formAdicionar()
    {   
      $action = route( 'admin.imoveis.adicionar' );
      return view('admin.imoveis.form' , compact ('action'));
    }


    public function create()
    {
        $action = route('admin.imoveis.store');
        return view("admin.imoveis.form", compact ('action'));
    }

    public function store(Request $request)
    {

    
    }


}
