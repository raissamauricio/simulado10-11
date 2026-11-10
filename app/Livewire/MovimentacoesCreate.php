<?php

namespace App\Livewire;

use App\Models\Movimentacoes;
use Livewire\Component;

class MovimentacoesCreate extends Component
{ 

    public $tipo_operaçao;
    public $produto_movimentado;
    public $quantidade;
    public $valor;
    public $data;
    public $funcionario;

    public function save(){
        Movimentacoes::create([
             'tipo_operaçao' => $this -> tipo_operaçao,
             'produto_movimentado' => $this -> produto_movimentado,
             'quantidade' => $this -> quantidade,
             'valor' => $this -> valor,
             'data' => $this -> data,
             'funcionario' => $this -> funcionario
        ]);
      
    }
    public function render()
    {
        return view('livewire.movimentacoes-create');
    }
}
