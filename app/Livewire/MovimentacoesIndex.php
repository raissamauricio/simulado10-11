<?php

namespace App\Livewire;

use App\Models\Movimentacoes;
use Livewire\Component;

class MovimentacoesIndex extends Component
{
    public function render()
    {
         $movimentacoes = Movimentacoes::all();

        return view('livewire.movimentacoes-index', compact('movimentacoes'));
    }
}
