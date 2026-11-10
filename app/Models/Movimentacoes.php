<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimentacoes extends Model
{
    use HasFactory;
    protected $fillable = [
        'tipo_operaçao',
        'produto_movimentado',
        'quantidade',
        'valor',
        'data',
        'funcionario'
    ];
} 
