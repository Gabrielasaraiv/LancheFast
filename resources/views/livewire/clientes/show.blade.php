<div class="container mt-5">
    <h2>Detalhes do Cliente</h2>

    @if ($cliente)
        <div class="card">
            <div class="card-header" style="background-color: rgb(242, 192, 93)">
                <h5>Informações do Cliente</h5>
            </div>
            <div class="card-body">
                <ul class="list-group">
                    <li class="list-group-item"><strong>Nome:</strong> {{ $cliente->nome }}</li>
                    <li class="list-group-item"><strong>Endereço:</strong> {{ $cliente->endereco }}</li>
                    <li class="list-group-item"><strong>Telefone:</strong> {{ $cliente->telefone }}</li>
                    <li class="list-group-item"><strong>CPF:</strong> {{ $cliente->cpf }}</li>
                    <li class="list-group-item"><strong>Email:</strong> {{ $cliente->email }}</li>
                </ul>

                <div class="mt-4">
                    <a href="{{ route('clientes.index') }}" class="btn btn-primary">Voltar para a lista</a>
                    <a href="{{ route('clientes.edit', $cliente->id) }}" class="btn btn-warning">Editar Cliente</a>
                </div>
            </div>
        </div>
    @else
        <p>Cliente não encontrado.</p>
    @endif
</div>
