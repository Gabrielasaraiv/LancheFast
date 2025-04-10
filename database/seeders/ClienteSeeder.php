<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClienteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Cliente::create([
            'nome' => 'Cliente Exemplo',
            'endereco' => 'Rua Exemplo, 123',
            'telefone' => '11999999999',
            'cpf'=> '12345678901',
            'email' => 'cliente@email.com',
            'senha' => bcrypt('senha123')
        ]);

        Cliente::create([
            'nome' => 'Cliente Teste 2',
            'endereco' => 'Rua Teste, 321',
            'telefone' => '12345678999',
            'cpf'=> '98765432101',
            'email' => 'cliteste@email.com',
            'senha' => bcrypt('senha123')
        ]);
        Cliente::create([
            'nome' => 'Cliente 3',
            'endereco' => 'Rua 3, 333',
            'telefone' => '33333333333',
            'cpf'=> '33333333333',
            'email' => '3333@email.com',
            'senha' => bcrypt('senha333')
        ]);
    }
}
