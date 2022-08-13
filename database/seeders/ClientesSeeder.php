<?php

namespace Database\Seeders;

use App\Models\Cliente;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome' => 'Victor',
            'cpf' => '3030',
            'cnpj' => 'bla',
            'situacao' => 'bla',
            'email' => '4334',
            'cep' => '4334',
            'endereco' => '4334',
            'numero' => '4334',
            'complemento' => '4334',
            'bairro' => '4334',
            'cidade' => '4334',
            'telefone' => '4334',
            'estabelecimento_id' => '1',
        ]);
    }
}
