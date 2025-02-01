<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class StatusController extends Controller
{
    public function adicionarStatus(Request $request)
{
    // Validação (opcional)
    $request->validate([
        'sta_nome' => 'required|string|max:255',
    ], [
        'sta_nome.required' => 'O campo status é obrigatório.'
    ]);

    // Recuperando o valor do campo "sta_nome"
    $sta_nome = $request->input('sta_nome');
    
    // Inserção no banco de dados
    $inserted = DB::table('status')->insert([
        'sta_nome' => $sta_nome,
    ]);

    if ($inserted) {
        // Em vez de redirecionar, vamos retornar à página atual com a mensagem de sucesso
        return back()->with('success', 'Seu status foi <span class="criado">Criado</span> com sucesso!');
    } else {
        return back()->with('error', 'Erro ao adicionar status.');
    }
}

    





    // Adicionando o método 'index' para listar os status
    public function index()
    {
        $statusList = DB::table('status')->get(); // Recupera todos os registros de status

        return view('editar-status', ['statusList' => $statusList]);
    }
}
