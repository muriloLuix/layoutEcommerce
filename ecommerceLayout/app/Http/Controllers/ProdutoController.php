<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProdutoController extends Controller
{
    public function adicionarProduto()
    {
        $statusList = DB::table('status')->get(); // Buscar os status no banco
    
    
        return view('adicionar-produto', compact('statusList'));
    }
    
    
    
}
