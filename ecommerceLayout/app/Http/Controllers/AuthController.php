<?php

namespace App\Http\Controllers;
use App\Models\Usuario; 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Método para autenticação
    public function authenticate(Request $request)
    {
        // Validação dos campos do formulário
        $credentials = $request->validate([
            'usu_email' => ['required', 'email'],
            'password' => ['required', 'string', 'min:8'], 
        ]);
        
        // Autentica com os campos personalizados
        if (Auth::attempt(['usu_email' => $credentials['usu_email'], 'password' => $credentials['password']], $request->remember)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        
        // Retorna erro caso as credenciais estejam incorretas
        return back()->withErrors([
            'usu_email' => 'As credenciais fornecidas estão incorretas.',
        ]);
    }

    // Método para registrar um novo usuário
    public function register(Request $request)
    {
        try {
            // Validação dos campos
            $request->validate([
                'usu_nome' => 'required|string|max:255',
                'usu_email' => 'required|string|email|max:255|unique:usuario,usu_email',
                'usu_senha' => 'required|string|min:8',
                'usu_telefone' => 'required|string|min:10',
            ], [
                'usu_nome.required' => 'O campo Nome é obrigatório.',
                'usu_email.required' => 'O campo E-mail é obrigatório.',
                'usu_senha.required' => 'O campo Senha é obrigatório.',
                'usu_telefone.required' => 'O campo Telefone é obrigatório.',
            ]);
    
            // Criação do usuário
            Usuario::create([
                'usu_nome' => $request->usu_nome,
                'usu_email' => $request->usu_email,
                'usu_senha' => $request->usu_senha, // O mutator cuidará do hash
                'usu_telefone' => $request->usu_telefone,
            ]);
    
            return redirect()->back()->with('success', 'Usuário cadastrado com sucesso!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Erro ao cadastrar o usuário: ' . $e->getMessage());
        }
    }
    
}
