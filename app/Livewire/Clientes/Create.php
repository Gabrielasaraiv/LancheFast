<?php

namespace App\Livewire\Clientes;

use App\Models\Cliente;
use Livewire\Component;

class Create extends Component
{
    public $nome; 
    public $endereco;
    public $telefone; 
    public $cpf;
    public $email; 
    public $senha;
    
    // Definindo regras de validação
    protected $rules = [
        'nome' => 'required|string|max:80',
        'endereco' => 'required|string|max:80',
        'telefone' => 'required|string|max:15',
        'cpf' => 'required|string|max:11|unique:clientes,cpf',
        'email' => 'required|email|unique:clientes',
        'senha' => 'required|string|min:6', // Não estamos mais usando 'confirmed'
    ];

    protected $messages = [
        'nome.required' => 'O nome é obrigatório.',
        'nome.max'=> 'O nome deve ter no máximo 80 caracteres.',
        'endereco.required' => 'O endereço é obrigatório.',
        'endereco.max' => 'O endereço deve ter no máximo 80 caracteres.',
        'telefone.required' => 'O telefone é obrigatório.',
        'telefone.max' => 'O telefone deve ter no máximo 15 caracteres.',
        'cpf.required' => 'O CPF é obrigatório.',
        'cpf.unique' => 'Este CPF já está cadastrado.',
        'cpf.max' => 'O CPF deve ter no máximo 11 caracteres.',
        'email.required' => 'O e-mail é obrigatório.',
        'email.unique' => 'Este e-mail já está em uso.',
        'senha.required' => 'A senha é obrigatória.',
        'senha.min' => 'A senha precisa ter no mínimo 6 caracteres.',
    ];

    // Função para armazenar os dados do cliente
    public function store()
    {
        // Validação dos dados
        $this->validate();

        
        
        // Salvando o cliente no banco de dados
        Cliente::create([
            'nome' => $this->nome,
            'endereco' => $this->endereco,
            'telefone' => $this->telefone,
            'cpf' => $this->cpf,
            'email' => $this->email,
            'senha'=>$this->senha
            
        ]);

        

        // Exibindo uma mensagem de sucesso
        session()->flash('message', 'Cliente cadastrado com sucesso!');
        
        // Opcional: Redirecionar ou limpar os campos
        // return redirect()->route('clientes.index'); // Ou alguma outra rota
    }

    // Método render para renderizar a view
    public function render()
    {
        return view('livewire.clientes.create');
    }
}
