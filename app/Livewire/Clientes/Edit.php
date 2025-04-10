<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Edit extends Component
{
    public $clienteId, $nome, $endereco, $telefone, $cpf, $email, $senha;

    // Método para carregar os dados do cliente
    public function mount($id)
    {
        // Recupera os dados do cliente a partir do ID
        $cliente = Cliente::findOrFail($id);
        $this->clienteId = $cliente->id;
        $this->nome = $cliente->nome;
        $this->endereco = $cliente->endereco;
        $this->telefone = $cliente->telefone;
        $this->cpf = $cliente->cpf;
        $this->email = $cliente->email;
        $this->senha = '';  // O campo de senha estará vazio por questões de segurança
    }

    // Método para salvar as alterações
    public function update()
    {
        $data = $this->validate([
            'nome' => 'required|string|max:80',
            'endereco' => 'required|string|max:80',
            'telefone' => 'required|string|max:15',
            'cpf' => 'required|string|max:11|unique:clientes,cpf,' . $this->clienteId,
            'email' => 'required|email|unique:clientes,email,' . $this->clienteId,
            'senha' => 'nullable|string|min:6',
        ]);

        // Se a senha foi fornecida, criptografa ela
        if ($this->senha) {
            $data['senha'] = bcrypt($this->senha);
        }

        // Atualiza o cliente no banco de dados
        $cliente = Cliente::find($this->clienteId);
        $cliente->update($data);

        session()->flash('message', 'Cliente atualizado com sucesso!');
        return redirect()->route('clientes.show', $cliente->id);
    }

    // Método render para exibir a view
   

    public function render()
    {
        return view('livewire.clientes.edit');
    }
}
