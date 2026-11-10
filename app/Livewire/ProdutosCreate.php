<?php

namespace App\Livewire;

use App\Models\Produtos;
use Livewire\Component;

class ProdutosCreate extends Component
{
    public $nome;
    public $descricao;
    public $marcas;
    public $categorias;
    public $unidades_medida;
    public $fornecedores;
    public $preço_custo;
    public $preço_venda;
    public $estoque_minimo;
    public $data_entrada;


    public function save()
    {
        Produtos::create([
            'nome' => $this->nome,
            'descricao' => $this->descricao,
            'marcas' => $this->marcas,
            'categorias' => $this->categorias,
            'unidades_medida' => $this->unidades_medida,
            'fornecedores' => $this->fornecedores,
            'preço_custo' => $this->preço_custo,
            'preço_venda' => $this->preço_venda,
            'estoque_minimo' => $this->estoque_minimo,
            'data_entrada' => $this->data_entrada,
        ]);

        session()->flash(
            'success',
            'Produto cadastrado com sucesso!'
        );
          return redirect()->route('produtos.index');
    }



    public function render()
    {
        return view('livewire.produtos-create');
    }
}
