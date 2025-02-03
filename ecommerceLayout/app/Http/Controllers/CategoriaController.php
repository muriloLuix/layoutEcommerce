<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CategoriaController extends Controller
{
    public function AdicionarCategoria(Request $request)
    {

        // Validação
        $request->validate([
            'cat_nome' => 'required|string|max:255',
        ], [
            'cat_descricao' => 'required|string|max:255',
        ]);

        // Recuperando o valor do campo "cat_nome"
        $cat_nome = $request->input('cat_nome');
        $cat_descricao = $request->input('cat_descricao');

        // Inserção no banco de dados
        $inserted = DB::table('categoria')->insert([
            'cat_nome' => $cat_nome,
            'cat_descricao' => $cat_descricao
        ]);

        if ($inserted) {
            return back()->with('success', 'Sua categoria foi <span class="criado">Criada</span> com sucesso!');
        } else {
            return back()->with('error', 'Erro ao adicionar categoria.');

        }
    }
        // Adicionando o método 'index' para listar os status
        public function index()
        {
            $categoriaList = DB::table('categoria')->get(); // Recupera todos os registros de status
    
            return view('editar-categoria', ['categoriaList' => $categoriaList]);
        }
    
        public function create()
        {
            $categoriaList = DB::table('categoria')->get(); // Busca os status no banco
            return view('adicionar-categoria', compact('categoriaList'));
        }
}