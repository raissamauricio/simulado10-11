<?php

namespace App\Livewire;

use App\Models\Produtos;
use Livewire\Component;

class ProdutosIndex extends Component
{
    public function render()
    {
         $produtos = Produtos::all();

        return view(
            'livewire.produto-index',
            compact('produtos')
        );
    }
}
