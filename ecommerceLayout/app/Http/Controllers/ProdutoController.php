<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function adicionarProduto()
    {
        $statusList = DB::table('status')->get(); // Buscar os status no banco
        $categoriaList = DB::table('categoria')->get(); // Buscar as categorias no banco
    
        // Passar ambas as listas para a view corretamente
        return view('adicionar-produto', compact('statusList', 'categoriaList'));
    }
}

