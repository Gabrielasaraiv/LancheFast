<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Show extends Component
{
    public $cliente; // A propriedade que armazenará o cliente

    // Método para carregar o cliente
    public function mount($id)
    {
        // Busca o cliente pelo ID
        $this->cliente = Cliente::findOrFail($id);
    }

    public function render()
    {
        return view('livewire.clientes.show');
    }
}
