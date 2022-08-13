<?php

namespace Database\Seeders;

use App\Models\Estabelecimento;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstabelecimentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Estabelecimento::create([
            'logo_empresa' => 'Victor',
            'codigo' => '3030',
            'nome_fantasia' => 'bla',
            'responsavel' => 'bla',
            'telefone' => '4334',
        ]);
    }
}
