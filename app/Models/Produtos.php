<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produtos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'descricao',
        'marcas',
        'categorias',
        'unidades_medida',
        'fornecedores',
        'preço_custo',
        'preço_venda',
        'estoque_minimo',
        'data_entrada'
    ];
}
