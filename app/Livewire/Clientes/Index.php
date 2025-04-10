<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $confirmingDelete = false;
    public $clientIdToDelete = null;
    public $search = '';
    public $perPage = 10;

    public function confirmDelete($clienteId)
    {
        $this->confirmingDelete = true;
        $this->clientIdToDelete = $clienteId;
    }

    public function cancelDelete()
    {
        $this->confirmingDelete = false;
        $this->clientIdToDelete = null;
    }

    protected $queryString = [
        'search' =>['except'=> ''],
        'perPage'=>['except'=> '10']
    ];

    public function render()
    {
        $clientes = Cliente::where('nome', 'like', "%{$this->search}$")
        ->orwhere('email', 'like', "%{$this->search}%")
        ->orwhere('cpf', 'like', "%{$this->search}")
        ->paginate($this->perPage);

        return view('livewire.clientes.index', compact('clientes'));
    }

    public function delete($id){
        Cliente::findOrFail($id)->delete();
        session()->flash('message', 'Cliente deletado com sucesso.');

        $this->confirmingDelete = false;
        $this->clientIdToDelete = null;
    }
}
