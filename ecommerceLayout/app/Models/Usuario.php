<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuario'; // Nome da tabela
    protected $primaryKey = 'usu_id'; // Nome da chave primária
    public $timestamps = false; // Defina como false se não usar 'created_at' e 'updated_at'

    // Campos que podem ser preenchidos automaticamente
    protected $fillable = ['usu_nome', 'usu_email', 'usu_senha', 'usu_telefone', 'usu_lembrar_acesso'];

    // Oculta o campo 'usu_senha' ao serializar o modelo
    protected $hidden = ['usu_senha'];

    // Mutator para hash da senha
    public function setUsuSenhaAttribute($value)
    {
        $this->attributes['usu_senha'] = bcrypt($value);
    }

    // Accessor para que o Laravel use 'password' como alias de 'usu_senha'
    public function getAuthPassword()
    {
        return $this->usu_senha;
    }

    // Sobrescrevendo o comportamento padrão do Laravel para "Lembrar-me"
    public function getRememberToken()
    {
        return $this->usu_lembrar_acesso;
    }

    public function setRememberToken($value)
    {
        $this->attributes['usu_lembrar_acesso'] = $value;
    }

    public function getRememberTokenName()
    {
        return 'usu_lembrar_acesso';
    }
}
