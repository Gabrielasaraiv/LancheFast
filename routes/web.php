<?php

use App\Livewire\Clientes\Create;
use App\Livewire\Clientes\Edit;
use App\Livewire\Clientes\Index;
use App\Livewire\Clientes\Show;
use App\Livewire\Produtos\Create as ProdutosCreate;
use App\Livewire\Produtos\Edit as ProdutosEdit;
use App\Livewire\Produtos\Index as ProdutosIndex;
use App\Livewire\Produtos\Show as ProdutosShow;
use Illuminate\Support\Facades\Route;

Route::prefix('clientes')->group(function () {
    Route::get('/', Index::class)->name('clientes.index');
    Route::get('/create', Create::class)->name('clientes.create');
    Route::get('/{id}', Show::class)->name('clientes.show');
    Route::get('/{id}/edit', Edit::class)->name('clientes.edit');
});

Route::prefix('produtos')->group(function () {
    Route::get('/', ProdutosIndex::class)->name('produtos.index');
    Route::get('/create', ProdutosCreate::class)->name('produtos.create');
    Route::get('/{produto}', ProdutosShow::class)->name('produtos.show');
    Route::get('/{produto}/edit', ProdutosEdit::class)->name('produtos.edit');
});
