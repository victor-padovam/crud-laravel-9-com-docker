<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'cpf',
        'cnpj',
        'situacao',
        'email',
        'cep',
        'endereco',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'telefone',
        'estabelecimento_id',
    ];

    //Criar sempre no plural o nome da funcao do model q ela se refere
    public function estabemecimentos()
    {
        return $this->belongsTo(Estabelecimento::class);
    }
}
