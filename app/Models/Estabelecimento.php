<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'logo_empresa',
        'codigo',
        'nome_fantasia',
        'responsavel',
        'telefone',
    ];
}
