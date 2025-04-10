<div class="mt-5">

    @if (session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif


    {{-- Cartão principal --}}
    <div class="card border-0 shadow rounded-3">
        <h5 class="card-header text-white fw-bold" style="background: linear-gradient(to right, #f6d365, #fda085);">
            🧾 Cadastro de Cliente
        </h5>

        <div class="card-body" style="background-color: rgb(255, 252, 225)">
            <form wire:submit.prevent="store">
                <div class="py-3">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-5 col-xxl-4">

                                <div class="bg-white p-4 rounded shadow-sm border border-light-subtle">

                                    {{-- Nome --}}
                                    <div class="mb-3">
                                        <label for="nome" class="form-label fw-semibold">Nome</label>
                                        <input type="text" class="form-control" id="nome" name="nome"
                                            placeholder="Nome Completo" wire:model.defer="nome">
                                        @error('nome')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Endereço --}}
                                    <div class="mb-3">
                                        <label for="endereco" class="form-label fw-semibold">Endereço</label>
                                        <input type="text" class="form-control" id="endereco" name="endereco"
                                            placeholder="Ex: Rua Manaus, 454" wire:model.defer="endereco">
                                        @error('endereco')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Telefone --}}
                                    <div class="mb-3">
                                        <label for="telefone" class="form-label fw-semibold">Telefone</label>
                                        <input type="text" class="form-control" id="telefone" name="telefone"
                                            placeholder="(00) 00000-0000" wire:model.defer="telefone">
                                        @error('telefone')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- E-mail --}}
                                    <div class="mb-3">
                                        <label for="email" class="form-label fw-semibold">Email</label>
                                        <input type="email" class="form-control" id="email" name="email"
                                            placeholder="exemplo@email.com" wire:model.defer="email">
                                        @error('email')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- CPF --}}
                                    <div class="mb-3">
                                        <label for="cpf" class="form-label fw-semibold">CPF</label>
                                        <input type="text" class="form-control" id="cpf" name="cpf"
                                            placeholder="xxx.xxx.xxx-xx" wire:model.defer="cpf">
                                        @error('cpf')
                                            <small class="text-danger">{{ $message }}</small>
                                        @enderror
                                    </div>

                                    {{-- Senha --}}


                                    <div class="mb-3">
                                        <label for="senha" class="form-label">Senha</label>
                                        <input type="password" class="form-control" id="senha" wire:model="senha"
                                            placeholder="Digite sua senha">
                                        @error('senha')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    {{-- Lembrar informações --}}
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="rememberMe">
                                        <label class="form-check-label text-muted" for="rememberMe">
                                            Salvar informações
                                        </label>
                                    </div>

                                    {{-- Botão --}}
                                    <button type="submit" class="btn btn-success w-100 py-2">
                                        <i class="bi bi-person-plus-fill me-1"></i> Cadastrar Cliente
                                    </button>

                                    {{-- Botão Cancelar --}}
                                    <div class="mt-3">
                                        <a href="{{ route('clientes.index') }}" class="btn btn-secondary w-100 py-2">
                                            <i class="bi bi-x-circle me-1"></i> Cancelar
                                        </a>
                                    </div>

                                    {{-- Botão Voltar --}}
                                    <div class="mt-3">
                                        <a href="{{ route('clientes.index') }}" class="btn btn-warning w-100 py-2">
                                            <i class="bi bi-arrow-left-circle me-1"></i> Voltar para a Lista de Clientes
                                        </a>
                                    </div>

                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
