<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class Usuario extends Authenticatable
{
    protected $table = 'usuario'; // Nome da tabela
    protected $primaryKey = 'usu_id'; // Nome da chave primária
    public $timestamps = false; // Defina como false se não usar 'created_at' e 'updated_at'

    // Campos que podem ser preenchidos automaticamente
    protected $fillable = ['usu_nome', 'usu_email', 'usu_senha', 'usu_telefone'];

    // Oculta o campo 'usu_senha' ao serializar o modelo
    protected $hidden = ['usu_senha'];

    // Mutator para hash da senha
    public function setUsuSenhaAttribute($value)
    {
        $this->attributes['usu_senha'] = bcrypt($value);
    }
}