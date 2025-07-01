<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model
{
    use HasFactory; 
    
    protected $fillable = [
        'nome',
        'cpf',
        'telefone',
        'email',
        'senha',
        // Adicione aqui todos os campos que você terá na sua tabela de cadastro
    ];
}
