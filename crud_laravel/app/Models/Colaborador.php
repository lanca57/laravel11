<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Colaborador extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'logradouro',
        'numero',
        'municipio',
        'estado',
        'cargo'
    ];

    protected $table = "colaboradores"; // Nome da tabela original na BD
    
}